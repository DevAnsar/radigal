<link rel="stylesheet" href="/css/home.css">

<div class="col-12 ">
    <div class="row mt-5 fontlg">{{$field->label}}</div>
    <div class="row border-top mb-2"></div>
    @foreach($value as $order)

        <div class="row">
            <div class="col-2">نام محصول :</div>
            <div class="col-10">{{\App\Product::find($order['product_id'])['title']}}</div>
        </div>
        <div class="row">
            <div class="col-2">قیمت واحد :</div>
            <div class="col-10">{{$order['price']}}</div>
        </div>
        <div class="row">
            <div class="col-2">تعداد :</div>
            <div class="col-10">{{$order['number']}}</div>
        </div>
        <div class="row">
            <div class="col-2">قیمت :</div>
            <div class="col-10">{{$order['number']*$order['price']}}</div>
        </div>
        <div class="row border-bottom mt-2"></div>
    @endforeach
</div>