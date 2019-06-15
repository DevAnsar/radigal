<?php

namespace App\Http\Controllers\Home;

use App\Model;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Basket;
use Alert;

class basketController extends Controller
{
    function addtobasket()
    {


        $validator = Validator::make(\request()->all(), [
            'product_id' => 'required'
        ]);
        if ($validator->fails()) {
            return $validator->errors()->all();
        }
        $product_id = \request('product_id');
        $number=\request('number');
        $status=\request('status');
        $product=Product::find($product_id);


        $cookie = Model::getBasketCookie();
        $result = Basket::whereCookieAndProduct_id( $cookie , $product_id)->get();
        if ($status==1){
        if (sizeof($result) == 0 && $product->stockCount >= $number) {
            Basket::create([
                'cookie' => $cookie,
                'product_id' => $product_id,
                'number' => 1
            ]);

//            alert()->message('Message', '1');
            return [1,1];
        }else if (!empty($result) && $product->stockCount >= $number){

            if ($number==1){
                $tedad = $result[0]['number'];
                $tedad += 1;
            }else{
                $tedad=$number;

            }
            if ($product->stockCount >= $tedad){
            $result[0]->update([
                'number' => $tedad
            ]);

                return [$tedad,1];


            }
//            alert()->message('Message', '2');
            return [0,1];

        }else{
            return [0,1];
        }

        }else if($status==0){
            if (sizeof($result) == 0 && $product->stockCount >= $number) {
                Basket::create([
                    'cookie' => $cookie,
                    'product_id' => $product_id,
                    'number' => 1
                ]);

//            alert()->message('Message', '1');
                return [1,0];
            }else if (sizeof($result)>0 && $product->stockCount >= $number){

//                if ($number==1){
//                    $tedad = $result[0]['number'];
//                    $tedad += 1;
//                }else{
//                    $tedad=$number;
//
//                }
                $tedad=$number;
                if ($product->stockCount >= $tedad){
                    $result[0]->update([
                        'number' => $tedad
                    ]);

                    return [$tedad,0];


                }
//            alert()->message('Message', '2');
                return [0,0];

            }else{
                return [0,0];
            }
        }



    }
    public function index(){
        SEOMeta::setTitle('سبد خرید');
        OpenGraph::setTitle('سبد خرید');
        $cookie = Model::getBasketCookie();
        $baskets = Basket::whereCookie( $cookie)
            ->leftJoin('products', 'baskets.product_id', '=', 'products.id')->get();
//        return $baskets;

//        return $baskets[0]->images;
        return view('Home.basket',compact('baskets'));
    }

    public function priceRefresh(){
        $cookie = Model::getBasketCookie();
        $baskets = Basket::whereCookie( $cookie)
            ->leftJoin('products', 'baskets.product_id', '=', 'products.id')->select('number','price','discount')->get();

//        return $baskets;

        $priceTolal=0;
        foreach ($baskets as $basket){
            $price=$basket->price;
            $number=$basket->number;
            $discount=$basket->discount;

            $price=$number*($price/1000*(1-($discount/100)));
            $priceTolal +=$price;

        }
        return $priceTolal;
    }

    public  function basketCount(){
        $cookie = Model::getBasketCookie();
        $result = Basket::whereCookie($cookie)->get()->count();
        return $result;
    }

    public function deletebasket(){
        $cookie = Model::getBasketCookie();
        $product_id = \request('product_id');
        $result = Basket::whereCookieAndProduct_id( $cookie , $product_id)->first();
        $result->delete();
//        return $result;
        ;
    }
}
