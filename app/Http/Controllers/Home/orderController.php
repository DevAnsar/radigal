<?php

namespace App\Http\Controllers\Home;

use App\Address;
use App\Basket;
use App\Discount;
use App\Http\Controllers\Controller;
use App\Model;
use App\Order;
use App\Pay;
use App\Payment;
use App\Product;
use App\Send;
use Artesaos\SEOTools\Facades\SEOMeta;
use Carbon\Carbon;
//use Illuminate\Database\Eloquent\Model;
use SoapClient;


class orderController extends Controller
{

    public function staircase()
    {
        SEOMeta::setTitle('مراحل ثبت سفارش');
        $cookie = Model::getBasketCookie();
        $baskets = Basket::whereCookie($cookie)
            ->leftJoin('products', 'baskets.product_id', '=', 'products.id')->get();

        $priceTolal = 0;
        foreach ($baskets as $basket) {
            $price = $basket->price;
            $number = $basket->number;
            $discount = $basket->discount;

            $price = $number * ($price / 1000 * (1 - ($discount / 100)));
            $priceTolal += $price;

        }
        $baskets['priceTotal'] = $priceTolal;

        Model::sessionInit();
        Model::sessionSet('priceTotal', $priceTolal);

        $addresses = auth()->user()->addresses;
        $sends = Send::all();
        $pays = Pay::all();

        return view('Home.staircase', compact('baskets', 'addresses', 'sends', 'pays'));
    }

    public function orderPriceRefresh()
    {
        $post_id = \request('post_id');
        $post_price = Send::whereId($post_id)->select('price')->first()['price'];
        Model::sessionInit();
        $priceTolal = Model::sessionGet('priceTotal');
        $orderPrice = $priceTolal + $post_price / 1000;
        return $orderPrice;
    }

    public function pay()
    {
        $user = auth()->user();
        $post_id = \request('post_id');
        $address_id = request('address_id');
        $pay_id = request('pay_id');

        $discount_title=request('discount');
        $discount = Discount::whereTitle($discount_title)->first();

        $discount_id=1;
        $discount_value=0;
        if (! empty($discount)){
            $discount_id=$discount->id;
            $discount_value=$discount->value;
        }
        if($user->discounts == 'null' || $user->discounts == ''){
            $user->update([
                'discounts'=>[$discount_id],
            ]);
        }else{
            $olddis=$user->discounts;
            if ($discount_id!=1){
                array_push($olddis,$discount_id);
            }
            $user->update([
                'discounts'=>$olddis,
            ]);
        }


        $send = Send::whereId($post_id)->first();
        $address = Address::whereId($address_id)->first();
        $pay = Pay::whereId($pay_id)->first();
        $send_price = ($send->price) / 1000;


        $cookie = Model::getBasketCookie();
        $baskets = Basket::whereCookie($cookie)
            ->leftJoin('products', 'baskets.product_id', '=', 'products.id')->get();


        Model::sessionInit();
        $sessionPrice=Model::sessionGet('priceTotal');

        $priceTolal = ($sessionPrice*( 1-$discount_value/100 ) )+ $send_price;

        $order = Order::create([
            'user_id' => $user->id,
            'order' => $baskets,
            'price' => $priceTolal * 1000,
            'address' => $address,
            'send' => $send['title'],
            'pay' => $pay['title'],
            'discount_id'=>$discount_id,
        ]);


        $result = Basket::whereCookie($cookie)->get();
        foreach ($result as $item) {
            $item->delete();
        }
        ///////////////////////////////////////////////////////////////////
        if ($pay_id == 1) {

            $MerchantID = env('ZP_MID'); //Required
            $Amount = $priceTolal * 1000; //Amount will be based on Toman - Required
            $Description = 'پرداخت هزینه ی سفارش از فروشگاه رادیگال'; // Required
            $Email = $user->email; // Optional
            $Mobile = $order->address['mobile']; // Optional
            $CallbackURL = env('ZP_CALL_BACK1'); // Required


            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentRequest(
                [
                    'MerchantID' => $MerchantID,
                    'Amount' => $Amount,
                    'Description' => $Description,
                    'Email' => $Email,
                    'Mobile' => $Mobile,
                    'CallbackURL' => $CallbackURL,
                ]
            );

            //Redirect to URL You can do it also by creating a form
            if ($result->Status == 100) {

                $payment = Payment::whereUser_idAndOrder_id($user->id, $order->id)->first();
                if (!empty($payment)) {
                    $payment->update([
                        'authority' => $result->Authority,
                    ]);
                } else {
                    Payment::create([
                        'authority' => $result->Authority,
                        'order_id' => $order->id,
                        'user_id' => $user->id,
                        'price'=>$Amount
                    ]);
                }

                return redirect('https://www.zarinpal.com/pg/StartPay/' . $result->Authority);
                //برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
                //Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
            } else {
                echo 'ERR: ' . $result->Status;
            }

        }

    }

    public function checker()
    {

        $Authority = request('Authority');
        $payment = Payment::whereAuthority($Authority)->firstOrFail();
        $order_id = $payment->order_id;
        $order = Order::whereId($order_id)->firstOrFail();

        if (request('Status') == 'OK') {

            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => env('ZP_MID'),
                    'Authority' => $Authority,
                    'Amount' => $order->price,
                ]
            );

            if ($result->Status == 100) {
                $order->update([
                    'pay_status' => 2
                ]);
                $payment->update([
                    'RefID' => $result->RefID
                ]);
                $this->stock($order, 'done');
                alert()->success('پرداخت با موفقیت انجام شد.از پنل مدریت خود از آخرین وضعیت سفارش خود مطلع شوید', 'پرداخت موفق')->confirmButton('ممنون');
                return redirect('/');

            } else {
                echo 'Transaction failed. Status:' . $result->Status;
            }
        } else {
            alert()->warning('پرداخت توسط شما کنسل شد.تا ۲۴ ساعت میتوانیداز پنل خود مجددا اقدام به پرداخت کنید', 'پرداخت ناموفق')->confirmButton('باشه');
            return redirect('/');
        }
    }

    public function payAgian()
    {

        $order_id = request('order_id');
        $order = Order::find($order_id);
        $user = auth()->user();

        if ($this->stock($order, 'check')) {
            $MerchantID = env('ZP_MID'); //Required
            $Amount = $order->price; //Amount will be based on Toman - Required
            $Description = 'پرداخت هزینه ی سفارش از فروشگاه رادیگال'; // Required
            $Email = $user->email; // Optional
            $Mobile = $order->address['mobile']; // Optional
            $CallbackURL = env('ZP_CALL_BACK2'); // Required


            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentRequest(
                [
                    'MerchantID' => $MerchantID,
                    'Amount' => $Amount,
                    'Description' => $Description,
                    'Email' => $Email,
                    'Mobile' => $Mobile,
                    'CallbackURL' => $CallbackURL,
                ]
            );

            //Redirect to URL You can do it also by creating a form
            if ($result->Status == 100) {

                $payment = Payment::whereUser_idAndOrder_id($user->id, $order->id)->first();
                if (!empty($payment)) {
                    $payment->update([
                        'authority' => $result->Authority,
                    ]);
                } else {
                    Payment::create([
                        'authority' => $result->Authority,
                        'order_id' => $order->id,
                        'user_id' => $user->id,
                        'price'=>$Amount
                    ]);
                }


                return redirect('https://www.zarinpal.com/pg/StartPay/' . $result->Authority);
                //برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
                //Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
            } else {
                alert()->warning('اشکال در اتصال به بانک', 'بعدا تلاش کنید')->confirmButton('باشه');
                return redirect('/panel');
            }
        } else {
            alert()->warning('احتمالا موجودی یکی از محصولات به پایان رسیده است!', 'سفارش خود را دوباره انجام دهید')->confirmButton('باشه');
            return redirect('/');
        }

    }

    public function checkerAgain()
    {

        $Authority = request('Authority');
        $payment = Payment::whereAuthority($Authority)->firstOrFail();
        $order_id = $payment->order_id;
        $order = Order::whereId($order_id)->firstOrFail();

        if (request('Status') == 'OK') {

            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);

            $result = $client->PaymentVerification(
                [
                    'MerchantID' => env('ZP_MID'),
                    'Authority' => $Authority,
                    'Amount' => $order->price,
                ]
            );

            if ($result->Status == 100) {

                $order->update([
                    'pay_status' => 2
                ]);
                $payment->update([
                    'RefID' => $result->RefID
                ]);
                $this->stock($order, 'done');
                alert()->success('پرداخت با موفقیت انجام شد.از پروفایل خود از آخرین وضعیت سفارش مطلع شوید', 'پرداخت موفق')->confirmButton('ممنون');
                return redirect('/panel');

            } else {
                echo 'Transaction failed. Status:' . $result->Status;
            }
        } else {
            alert()->warning('پرداخت توسط شما کنسل شد', 'پرداخت ناموفق')->confirmButton('باشه');
            return redirect('/panel');
        }
    }

    public function stock($order, $option)
    {
        $products = $order->order;
        if ($option == 'done') {
            foreach ($products as $OrderProduct) {
                $product_id = $OrderProduct['product_id'];
                $number = $OrderProduct['number'];
                $product = Product::find($product_id);
                $oldStock = $product->stockCount;
                $newStock = $oldStock - $number;
                if ($newStock<0)$newStock=0;
                $old_sale=$product->saleCount;

                $product->update([
                    'stockCount' => $newStock,
                    'saleCount'=> $old_sale + $number,
                ]);
            }
            return true;
        } elseif ($option == 'check') {
            foreach ($products as $OrderProduct) {
                $product_id = $OrderProduct['product_id'];
                $number = $OrderProduct['number'];
                $product = Product::find($product_id);
                $Stock = $product->stockCount;
                if ($Stock < $number) {
                    return false;
                }
            }
            return true;
        }

    }

    public function addAddress($callback='orderShow')
    {
        $name= request('fullname');
        $mobile= request('usermobile');
        $ostan= request('ostan');
        $shahr= request('shahr');
        $address= request('address');
        $post= request('post');

        auth()->user()->addresses()->create([
            'name'=>$name,
            'mobile'=>$mobile,
            'ostan'=>$ostan,
            'shahr'=>$shahr,
            'address'=>$address,
            'post'=>$post
        ]);

        return redirect(route($callback));
    }

    public function deleteAddress()
    {
        $address_id= request('address_id');
        $callback= request('callback');

//        $ostan= request('ostan');
//        $shahr= request('shahr');
//        $address= request('address');
//        $post= request('post');
        Address::find($address_id)->delete();
        return redirect(route($callback));
    }

    public function discount()
    {
        $discountTitle = request('discount');
        $discount = Discount::whereTitle($discountTitle)->first();

        $user_discounts=auth()->user()['discounts'];

        $now=Carbon::now();



        $post_id = \request('post_id');
        $post_price = Send::whereId($post_id)->select('price')->first()['price'];
        Model::sessionInit();
        $priceTotal = Model::sessionGet('priceTotal');

        $status=0;
        $message='';
        if (!empty($discount)){
            $discount_id=$discount->id;
            if ($user_discounts==null){
                if ($discount->start < $now){
                    if ($discount->end > $now){
                        $priceTotal = $priceTotal * (1 - $discount['value'] / 100);
                        $message="کد تخفیف ".$discountTitle." دارای  ".$discount->value." % تخفیف بود که از هزینه ی سفارش شما کسر گردید";
                        $status=5;
                    }else{
                        $status=4;
                    }

                }else{
                    $status=3;
                }
            }else{
                if ( ! in_array($discount_id,$user_discounts)){
                if ($discount->start < $now){
                    if ($discount->end > $now){
                        $priceTotal = $priceTotal * (1 - $discount['value'] / 100);
                        $message="کد تخفیف ".$discountTitle." دارای   %".$discount->value." تخفیف بود که از هزینه ی سفارش شما کسر گردید";
                        $status=6;
                    }else{
                        $status=4;
                    }

                }else{
                    $status=3;
                }
                }else{
                    $status=2;
                }
            }
        }else{
            $status=1;
        }
        //1 -> کد تخفیف در سیستم ثبت نشده است
        //2 -> شما از این کد تخفیف قبلا استفاده کرده اید
        //3 -> زمان شروع کد تخفیف فرا نرسیده است
        //4 -> مدت اعتبار کد تخفیف پایان یافته است
        //5 -> به مقدار کد تخفیف از هزینه ی سفارش کم شد
        $priceTolal = $priceTotal + $post_price / 1000;
        return [$priceTolal,$status,$message];
    }
}