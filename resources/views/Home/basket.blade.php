@extends('Home.master')

@section('content')

    <!--main-->
    <style>
        #sabade_kharid_title {
            color: #6f6f6f;
        }

        .choose_option {

            border-radius: 8px;
            border: 1px solid #e9e9e9;
            /* margin-bottom: 50px; */
            background: #f9f9f9;
            cursor: pointer;
            position: relative;
            text-align: center;
        }

        .choose_option::after {
            content: '';
            display: block;
            width: 16px;
            height: 16px;
            top: 13px;
            right: 10px;
            position: absolute;
        }

        .choose_option::before {
            content: '';
            display: block;
            width: 16px;
            height: 16px;
            background: url(/img/chevron-arrow-down.png) no-repeat center;
            top: 11px;
            left: 3px;
            position: absolute;
        }

        .choose_option .option_selected {
            color: #6f6f6f;
            float: right;
            line-height: 40px;
            width: 50%;
            height: 100%;
        }

        .choose_option .tedad {
            padding: 0;
            border-radius: 5px;
            border: 1px solid #e9e9e9;
            background: #f9f9f9;
            margin-top: 1px;
            display: none;
            position: absolute;
            z-index: 4;
            /* max-height: 90px; */
            overflow-y: overlay;
            width: 100%;
            left: 0%;
            top: 37px;
        }

        }

        .choose_option .tedad li {
            text-align: center;
            color: #6f6f6f;
            font-size: 11pt;
            cursor: pointer;
        }

        #sabad {

            /*font-family: IranSans;*/
            color: #6f6f6f;

        }


        #sabad img {
            max-width: 100%;
            border-radius: 4px;
        }

        .delete_prod {
            display: block;
            width: 24px;
            height: 24px;
            margin: auto;
            position: relative;
            background: url(/img/x-button.png) no-repeat center;
            cursor: pointer;
        }

        .one_price, .all_price ,.discount_price{

            text-align: center;
        }
    </style>
    <style>
        .addBtn {
            display: block;
            border-radius: 8px;
            /*width: 150px;
            height: 42px;*/
            background: #67bfb0;
            text-align: center;
            color: white;
            border: 1px solid #4d8f84;
            font-size: 12.5pt;
            cursor: pointer;
            transition: background-color 300ms ease-in;
        }

        .addBtn:hover {
            background-color: #4d8f84;
        }

        .goto_next {
            /*background: white;*/
            border: 1px solid #e9e9e9;
            font-family: IranSans;
            box-shadow: 2px 2px 5px #cbcbcb;
        }

        .row_s {
            /*width: 100%;*/
            /*float: right;*/
            /*font-size: 16pt;*/

        }

        .row_s p {
            text-align: center;
            margin: 0;
        }

        .row_s .addBtn {
            /*width: 245px;*/
            height: 48px;
            /*margin: auto;*/
            line-height: 48px;
            /*margin-bottom: 20px;*/
            border-radius: 6px;
        }
        .x{
            box-shadow: 2px 2px 5px #cbcbcb;
        }

    </style>
    <div class="container" style="position: relative">


        <div class="row mt-sm-4 mt-4 pr-3 fontmd" id="sabade_kharid_title">

            سبد خرید

        </div>

        @if(sizeof($baskets)>0)
        <div class="row mt-sm-4 justify-content-between ">

            <div class="col-12 col-sm-9 font-m50-p90" id="sabad">

                @foreach($baskets as $basket)
                <div class="x row align-items-center pt-3 pb-3 border-bottom bg-white">
                    <div class="col-1 pr-1 pl-0">
                        <span class="delete_prod" onclick="deleteProduct({{$basket->product_id}})"></span>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-6 right_img pr-1 pl-0">

                                <img src="/storage/{{$basket->images[0]['url']}}">

                            </div>
                            <div class="col-6 left_title">

                                <p id="title">
                                    {{$basket->title}}
                                </p>
                                {{--<p>--}}
                                    {{--نویسنده--}}
                                {{--</p>--}}
                                {{--<p>--}}
                                    {{--انتشارات--}}
                                {{--</p>--}}

                            </div>

                        </div>
                    </div>
                    <div class="col-1 pr-0">

                        <div class="choose_option pr-0 pr-md-4">
                        <span class="option_selected">
                             {{$basket->number}}
                        </span>
                            <ul class="tedad">
                                @for($i=1;$i<=\App\Product::find($basket->product_id)['stockCount'];$i++)
                                    <li data-product="{{$basket->product_id}}" data-price="{{$basket->price}}" data-discount="{{$basket->discount}}">
                                        {{$i}}
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class="col-2 one_price">
                        مبلغ واحد:
                        <p class="price_row" style="margin-bottom: 0;text-align: center">
                            {{$basket->price/1000}}
                        </p>
                        هزار
                    </div>
                    <div class="col-2 discount_price">
                        تخفیف:
                        <p class="price_row" style="margin-bottom: 0;text-align: center">
                        {{$basket->number*($basket->price/1000-($basket->price*(1-$basket->discount/100)/1000))}}
                        </p>
                        هزار
                    </div>
                    <div class="col-2 all_price">
                        مبلغ کل:

                        <p class="price_row" style="margin-bottom: 0;text-align: center">
                        {{$basket->number*($basket->price*(1-$basket->discount/100)/1000)}}
                        </p>
                        هزار تومان
                    </div>
                </div>
                @endforeach

            </div>
            <div class="col-12 col-sm-2 goto_next bg-white h-100 pb-4 mt-4 mt-sm-0">

                <div class="row_s pt-3">
                    <p style="color: #6f6f6f;" class="fontlg">
                        مبلغ قابل پرداخت
                    </p>
                    <div  style="color:#e54a86;text-align: center;" class="mt-2 mb-2">
                                <p class="price_total">
                                    ...
                                </p>
                        هزار تومان
                    </div>
                </div>

                <div class="row_s">
                    <a href="{{route('orderShow')}}">
                        <span class="addBtn">
                            ادامه ثبت سفارش
                        </span>
                    </a>
                </div>

            </div>
            @else
                <div class="row mt-4 fontsm jumbotron justify-content-center">
                    سبد خرید شما خالی میباشد
                </div>
            @endif

        </div>
    </div>

@endsection

@section('js')

    <script>

        $('.choose_option').click(function () {
            $(this).find('.tedad').slideToggle(100);
        });


        $('.tedad li').click(function () {
            var number = $(this).text();
            var product_id = $(this).attr('data-product');
            var price = $(this).attr('data-price');
            var discount = $(this).attr('data-discount');

            $(this).parents('.choose_option').find('.option_selected').text(number);
            $(this).parents('.x').find('.discount_price .price_row').text(number*(price-(price*(1-discount/100)))/1000);
            $(this).parents('.x').find('.all_price .price_row').text(number*(price*(1-discount/100))/1000);
            addtobasket(product_id,number,0);
            priceRefresh();
        });

        function priceRefresh() {
            $.ajax({
                method:'POST',
                url:'/priceRefresh',
            }).done(function (msg) {
                $('.price_total').text(msg);
                // console.log(msg)
            });

        }
        priceRefresh();

        function deleteProduct(productId) {
            startLoader();
            let product_id=productId;
            let formData=new FormData();
            formData.append('product_id',product_id);
            $.ajax({
                method:'POST',
                url:'/deletebasket',
                data:formData,
                contentType:false,
                processData:false,
            }).done(function (msg) {
                // console.log(msg)
                endLoader();
                location.reload();
            });
        }
    </script>
@endsection