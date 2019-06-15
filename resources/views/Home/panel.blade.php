
@extends('Home.master')

@section('content')
    <style>
        .addBtn {
            /*width: 100%;*/
            /* height: 36px; */
            line-height: 36px;
            /* margin: auto; */
            display: block;
            border-radius: 8px;
            /*width: 150px;*/
            height: 42px;
            background: #67bfb0;
            text-align: center;
            color: white;
            border: 1px solid #4d8f84;
            cursor: pointer;
            transition: background-color 300ms ease-in;
        }

        .addBtn:hover {
            background-color: #4d8f84;
        }

        .payFalse {
            width: 100%;
            /* height: 36px; */
            line-height: 36px;
            /* margin: auto; */
            display: block;
            border-radius: 8px;
            /*width: 150px;*/
            height: 42px;
            background: #eb8d98;
            text-align: center;
            color: white;
            border: 1px solid #4d8f84;
            cursor: pointer;
            transition: background-color 300ms ease-in;
        }

        .payFalse:hover {
            background-color: #ff9ca7;
        }

        .data_title {
            width: 99%;
            color: #6f6f6f;
            font-size: 16pt;
            margin-right: 15px;
        }

        .title_data {
            color: #67bfb0;
        }

        .value_data {
            color: #6f6f6f;
            margin-right: 8px;
        }

        #tab_part .col-3 {
            color: #6f6f6f;
            border-left: 1px solid #dcdcdc;
            cursor: pointer;
        }

        #tab_part .col-3.activeTab {
            box-shadow: 0 -4px 1px #67bfb0;
            background: white;
            /*height: 101% !important;*/
        }

        .more_detail {
            display: block;
            width: 16px;
            height: 16px;
            line-height: 45px;
            margin: auto;
            cursor: pointer;
            background: url(/img/chevron-arrow-down.png) no-repeat center;
        }

        .close_detail {
            background: url(/img/chevron-arrow-up.png) no-repeat center !important;
        }

        .more_detail_order {
            display: none;
            border-top: 5px solid #8c8c8c;
            border-left: 5px solid #8c8c8c;
            border-right: 5px solid #e9e9e9;
            border-bottom: 5px solid #e9e9e9;
        }

        #fav_list .border:hover {
            box-shadow: 0 0 25px #a8a8a8;
        }

        .delete_icon {
            display: block;
            width: 24px;
            height: 24px;
            float: left;
            background: url(/img/x-button.png) no-repeat center;
            margin: 1px 0 0 1px;
            cursor: pointer;
        }

        #fav_list img {
            max-width: 180px;
            border-radius: 5px;
        }

        #fav_list span {
            display: block;
            color: #6f6f6f;

        }

        .view_opi {
            display: block;
            width: 24px;
            height: 24px;
            margin: auto;
            cursor: pointer;
            background: url(/img/eye.png) no-repeat center;
        }

        .onvan3 {
            color: #67bfb0;
        }
    </style>

    <div class="container">
        <div class="row mt-sm-4 justify-content-center">


            <div class="col-11 mt-4 mt-sm-2  col-sm-12 data_box1 bg-white mb-4  pt-3 pb-3  pr-4 pl-4">

                <div class="row " style=" border-bottom: 1px solid #eee;">
                    <div class="col-sm-12">
                        <div class="data_title">
                            اطلاعات کاربری
                        </div>
                    </div>
                </div>
                <div class="row mt-3 justify-content-end">

                    <div class="col-sm-4 pb-3 ">
                    <span class="title_data">
                            نام و نام خانوادگی:
                        </span>
                        <span class="value_data">
                            {{$user->name}}
                        </span>
                    </div>

                    <div class="col-sm-4 pb-3">
                   <span class="title_data">
ایمیل:
                        </span>
                        <span class="value_data">
                            {{$user->email}}
                    </span>
                    </div>

                    <div class="col-sm-4 pb-3">
                    <span class="title_data">
شماره تلفن  همراه:
                        </span>
                        <span class="value_data">
                            {{$user->mobile}}
                    </span>
                    </div>


                    <div class="col-12 pb-3">
                        <div class="row">
                            <div class="col-5 col-md-2">
                                <button  type="button" class="btn btn-info " data-toggle="modal" data-target="#edit_data">
                                    ویرایش اطلاعات
                                </button>
                                <!-- Modal -->
                                <div id="edit_data" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                <h4 class="modal-title">
                                                    ویرایش اطلاعات
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <form >
                                                    {{csrf_field()}}
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label">نام و نام خانوادگی</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="col-form-label">ایمیل</label>
                                                        <input style="direction: ltr" type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mobile" class="col-form-label">شماره تماس</label>
                                                        <input style="direction: ltr" type="text" class="form-control" id="mobile" name="mobile" value="{{$user->mobile}}">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" onclick="editdata()">ثبت تغییرات</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{--<div class="col-5 col-md-2">--}}
                                {{--<a href="{{route('password.reset')}}" class="btn btn-danger">تغییر رمز</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>

                </div>

            </div>

            {{--<div class="col-11  col-sm-12 data_box1 bg-white mb-4 pt-3 pb-3  pr-4 pl-4">--}}

            {{--<div class="row " style=" border-bottom: 1px solid #eee;">--}}
            {{--<div class="col-sm-12">--}}
            {{--<div class="data_title">--}}
            {{--گزارش عملکرد--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row mt-3">--}}

            {{--<div class="col-sm-4 pb-3 ">--}}
            {{--<span class="title_data">--}}
            {{--تعداد کل سفارشات:--}}
            {{--</span>--}}
            {{--<span class="value_data">--}}
            {{--a--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--<div class="col-sm-4 pb-3">--}}
            {{--<span class="title_data">--}}
            {{--تعداد نظرات ارسال شده:--}}
            {{--</span>--}}
            {{--<span class="value_data">--}}
            {{--b--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--<div class="col-sm-4 pb-3">--}}
            {{--<span class="title_data">--}}
            {{--سفارشات در انتظار تایید:--}}
            {{--</span>--}}
            {{--<span class="value_data">--}}
            {{--c--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--<div class="col-sm-4 pb-3">--}}
            {{--<span class="title_data">--}}
            {{--سفارشات در حال پردازش:--}}
            {{--</span>--}}
            {{--<span class="value_data">--}}
            {{--d--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--<div class="col-sm-4 pb-3">--}}
            {{--<span class="title_data">--}}
            {{--تعداد پیغام های خوانده نشده:--}}
            {{--</span>--}}
            {{--<span class="value_data">--}}
            {{--e--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--<div class="col-sm-4 pb-3">--}}
            {{--<span class="title_data">--}}
            {{--سفارشات ارسال شده:--}}
            {{--</span>--}}
            {{--<span class="value_data">--}}
            {{--f--}}
            {{--</span>--}}
            {{--</div>--}}

            {{--</div>--}}


            {{--</div>--}}


            <div class="col-11 col-sm-12" id="tabs">

                <div class="row  bg-white fontsm" id="tab_part">

                    <div class="col-3 pt-2 pb-2">
                        پیغام ها
                    </div>
                    <div class="col-3 pt-2 pb-2">
                        سفارشات
                    </div>
                    <div class="col-3 pt-2 pb-2">
                        علاقه ها
                    </div>
                    <div class="col-3 pt-2 pb-2">
                        آدرس ها
                    </div>


                </div>

                <div class="row  bg-white justify-content-center " id="tab_content">

                    <div class="col-11 ">
                        {{--<div class="row my_message mt-4 mb-4 fontssm">--}}
                            {{--<div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">--}}
                                {{--تاریخ--}}

                            {{--</div>--}}
                            {{--<div class="col-3 pt-2 pb-2 bg-light text-center border border-left-0">--}}
                                {{--عنوان--}}

                            {{--</div>--}}
                            {{--<div class="col-5 pt-2 pb-2 bg-light text-center border border-left-0">--}}
                                {{--متن--}}

                            {{--</div>--}}
                            {{--<div class="col-2 pt-2 pb-2 bg-light text-center border">--}}
                                {{--وضعیت--}}
                            {{--</div>--}}

                            {{--<!--//////////////////////////////////////////////////////-->--}}
                            {{--<div class="col-2 pt-2 pb-2 text-center border border-left-0 border-top-0">--}}
                                {{--10 مهر 97--}}

                            {{--</div>--}}
                            {{--<div class="col-3 pt-2 pb-2 text-center border border-left-0 border-top-0">--}}
                                {{--پیام سفارش--}}

                            {{--</div>--}}
                            {{--<div class="col-5 pt-2 pb-2 text-center border border-left-0 border-top-0">--}}
                                {{--سفارش در حال تایید است--}}

                            {{--</div>--}}
                            {{--<div class="col-2 pt-2 pb-2 text-center border border-top-0">--}}
                                {{--در حال تایید--}}

                            {{--</div>--}}

                            {{--<!--/////////////////////////////////////////////////////////////-->--}}

                        {{--</div>--}}
                        <div class="row mt-4 fontssm jumbotron justify-content-center">
                            این قسمت بعدا به فروشگاه اضافه خواهد شد
                        </div>
                    </div>


                    <div class="col-11 pb-4" id="my_order">
                        <?php
                        if (sizeof($orders) > 0){
                        ?>
                        <div class="row mt-4 fontssm">

                            <!--//////////////////////////title/////////////////////////////-->
                            <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                تاریخ
                            </div>
                            <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                کد
                            </div>
                            <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                مبلغ کل
                            </div>
                            <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                وضعیت
                            </div>
                            <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                عملیات پرداخت
                            </div>
                            <div class="col-2 pt-2 pb-2 bg-light text-center border">
                                جزئیات
                            </div>
                        </div>


                        <!--//////////////////////////////////////////////////////-->
                        <form class="payAgain" method="post" action="{{route('orderPayAgain')}}">
                            {{method_field('post')}}
                            {{csrf_field()}}
                            @foreach($orders as $order)
                                <div class="row fontssm">

                                    <div class="col-2 font-m60-p95  pt-2 pb-2 text-center border border-left-0 border-top-0">
                                        <?php
                                        echo  Verta::instance($order->created_at)->format('%d %B %Y');
                                        ?>
                                        {{--10 مهر 97--}}
                                    </div>
                                    <div class="col-2  pt-2 pb-2 text-center border border-left-0 border-top-0">
                                        {{$order->id}}
                                    </div>
                                    <div class="col-2  pt-2 pb-2 text-center border border-left-0 border-top-0">
                                        {{$order->price/1000}}
                                        <br>
                                        <div class="fontssm" style="color: #879c8a">
                                            هزار تومان
                                        </div>
                                    </div>
                                    <div class="col-2  pt-2 pb-2 text-center border border-left-0 border-top-0">
                                        {{$order->send_title}}
                                    </div>
                                    <div class="col-2  pt-2 pb-2 text-center border border-left-0 border-top-0">
                                        {{$order->pay_title}}
                                    </div>
                                    <div class="col-2  pt-2 pb-2 text-center border  border-top-0">
                                        <span class="more_detail"></span>
                                    </div>
                                </div>
                                <!--///////////////level2///////////////////-->
                                <div class="row more_detail_order ">

                                    <div class="col-11 mt-4 mb-4 mr-3 mr-sm-5">
                                        <div class="row fontssm">
                                            <div class="col-12">
                                                <div class="row all_detail">
                                                    <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                                        کالا
                                                    </div>
                                                    <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                                        تعداد
                                                    </div>
                                                    <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                                        قیمت واحد
                                                    </div>
                                                    <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                                        قیمت کل
                                                    </div>
                                                    <div class="col-2 pt-2 pb-2 bg-light text-center border border-left-0">
                                                        تخفیف کل
                                                    </div>
                                                    <div class="col-2  pt-2 pb-2 bg-light text-center border">
                                                        مبلغ کل
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-12">
                                                @foreach($order->order as $product)
                                                    <div class="row">
                                                        <div class="col-2 pt-2 pb-2 text-center border border-left-0 border-top-0">
                                                            {{$product['title']}}
                                                        </div>
                                                        <div class="col-2 pt-2 pb-2 text-center border border-left-0 border-top-0">
                                                            {{$product['number']}}
                                                        </div>
                                                        <div class="col-2 pt-2 pb-2 text-center border border-left-0 border-top-0">
                                                            {{number_format($product['price']/1000)}}
                                                            <br>
                                                            <div class="fontssm" style="color: #879c8a">
                                                                هزار تومان
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $total_price = ($product['number'] * $product['price'])/1000;
                                                        $total_discount =($product['number'] * ($product['price'] * ( $product['discount'] / 100)))/1000 ;
                                                        ?>
                                                        <div class="col-2 pt-2 pb-2 text-center border border-left-0 border-top-0">
                                                            {{ number_format($total_price) }}
                                                            <br>
                                                            <div class="fontsssm" style="color: #879c8a">
                                                                هزار تومان
                                                            </div>
                                                        </div>

                                                        <div class="col-2 pt-2 pb-2 text-center border border-left-0 border-top-0">
                                                            {{ number_format($total_discount) }}
                                                            <br>
                                                            <div class="fontsssm" style="color: #879c8a">
                                                                هزار تومان
                                                            </div>
                                                        </div>
                                                        <div class="col-2 pt-2 pb-2 text-center border  border-top-0">
                                                            {{number_format($total_price-$total_discount)}}
                                                            <br>
                                                            <div class="fontsssm" style="color: #879c8a">
                                                                هزار تومان
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-11 mt-4 mb-4 mr-3 mr-sm-5">
                                        <div class="row">
                                            <div class="col-12 ">
                                                <div class="row fontsm">
                                                    <div class="col-12 mb-3">
                                                        <div class="row justify-content-center">
                                                            <div class="col-12 text-center">
                                                                ارسال با
                                                                {{$order->send}}

                                                            </div>
                                                            <?php
                                                            $discount_id = $order->discount_id;
                                                            if ($discount_id != '' || $discount_id != 0 || $discount_id != 'null'){
                                                            $discount = \App\Discount::find($discount_id);
                                                            if ($discount->value != 0){
                                                            ?>
                                                            <div class="col-12 mt-2 text-center p-1"
                                                                 style="background: rgba(255,46,114,0.11)">
                                                                کد تخفیف
                                                                {{$discount->title}}
                                                                با
                                                                %{{$discount->value}}
                                                                تخفیف
                                                            </div>
                                                            <?php } } ?>
                                                        </div>
                                                    </div>
                                                    <div class="col-12  pt-2 pb-2  border">

                                                        <div class="row">
                                                            <div class="col-12 col-sm-4">
                                            <span class="onvan3">
                                                آدرس تحویل:
                                            </span>
                                                                <span>
                                                 {{$order->address['shahr']}}
                                                                    ،
                                                                    {{$order->address['address']}}
                                            </span>
                                                            </div>
                                                            <div class="col-12 col-sm-4">
                                            <span class="onvan3">
                                                نام تحویل گیرنده:
                                            </span>
                                                                <span>
                                                        {{$order->address['name']}}
                                            </span>
                                                            </div>
                                                            <div class="col-12 col-sm-4">
                                            <span class="onvan3">
                                                 شماره تلفن:
                                            </span>
                                                                <span>
                                                        {{$order->address['mobile']}}
                                            </span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                @if($order->pay_status=='1')
                                                    @if($order->created_at->diffInHours(\Carbon\Carbon::now())<72)
                                                        <div class="row mt-3 justify-content-end">
                                                            <div class="col-6 col-md-4 ">
                                                                <span class="addBtn payAgainBtn font-m50-p90"
                                                                      data-order="{{$order->id}}">همین الان پرداخت کن</span>
                                                            </div>

                                                        </div>
                                                    @else
                                                        <div class="row mt-3 justify-content-end">
                                                            <div class="col-7 col-md-4 ">
                                                <span class="payFalse font-m50-p90">
                                                    مهلت پرداخت دوباره به اتمام رسیده است
                                                </span>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endif


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            @endforeach
                            <input type="hidden" name="order_id" value="">
                        </form>
                        <!--/////////////////////////////////////////////////////-->

                        <?php
                            }else{
                        ?>
                            <div class="row mt-4 fontssm jumbotron justify-content-center">
                                تا کنون هیچ سفارش ثبت شده ای ندارید
                            </div>

                        <?php
                            }
                         ?>

                    </div>


                    <div class="col-11 mt-4 mb-4" id="my_favorite">
                        <div class="row fontsssm justify-content-center justify-content-sm-center jumbotron" id="fav_list">
                            این قسمت بعدا به فروشگاه اضافه خواهد شد

                            <!--////////////////////////////////////////////////////////////-->
                            {{--<div class="col-5 col-sm-2 p-3 ml-sm-3 border">--}}
                             {{----}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-12">--}}
                                        {{--<span class="delete_icon"></span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 text-center">--}}
                                        {{--<img src="">--}}
                                    {{--</div>--}}
                                    {{--<div class="col-12 text-center">--}}
                                         {{--<span>--}}
                                {{--بیگانه--}}
                            {{--</span>--}}
                                        {{--<span>--}}
                                {{--آلبر کامو--}}
                            {{--</span>--}}
                                        {{--<span>--}}
                                {{--انتشارات نیلوفر--}}
                            {{--</span>--}}
                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</div>--}}
                            <!--//////////////////////////////////////////////////////////////-->


                        </div>
                    </div>


                    <div class="col-11 mt-4 mb-4" id="my_opinion">

                        <div class="row fontsm justify-content-end mb-3">
                            <div class="col-7 col-md-3 pl-0">
                                <span class="addBtn addaddress pl-2 pr-2">
                                        افزودن آدرس جدید
                                </span>
                            </div>
                        </div>
                        <script>
                            $('.addBtn.addaddress').click(function () {
                                window.setInterval(function () {
                                    addressSub();
                                }, '1000');
                                $('#dark').fadeIn(100);
                                $('.AddAddressContainer').fadeIn(100);
                                $('#add_address').fadeIn(100);


                            });
                        </script>
                        {{csrf_field()}}
                        <style>


                            .editendelete > table {
                                width: 100%;
                                height: 160px;
                            }

                            .editendelete table tr {
                                width: 100%;
                                height: 100%;
                            }

                            .editendelete table tr td {
                                width: 100%;
                                height: 100%;
                            }

                            .editendelete table tr:first-child td {
                                background: rgba(103, 191, 176, 0.35);
                            }

                            .editendelete table tr:last-child td {
                                background: rgba(229, 74, 134, 0.35)
                            }

                            .delete_add {
                                display: block;
                                width: 32px;
                                height: 32px;
                                margin: auto;
                                cursor: pointer;
                            }


                            .delete_add {
                                background: url(/img/x-button.png) no-repeat center;
                            }

                            .value_add {
                                margin-right: 5px;
                            }
                            .address_table{
                                width: 100%;
                                border: 1px solid #cccccc73;
                                box-shadow: 0 0 15px #ccccccb3;
                            }

                        </style>
                        <?php
                        if (sizeof($addresses) > 0){
                        ?>
                        @foreach($addresses as $address)

                            <div class="row  fontsm mb-3">
                                <table class="address_table" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td rowspan="3" width="50px">
                                            <span data-address="{{$address->id}}" class="select_but "></span>
                                        </td>
                                        <td colspan="2">
                                            <span class="title_add">
                                                گیرنده:
                                            </span>
                                            <span class="value_add" >
                                            {{ $address->name }}
                                            </span>
                                        </td>
                                        <td class="editendelete" rowspan="3" width="50px">
                                            <table cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td>
                                                        <a onclick="deleteAddress({{$address->id}})">
                                                        <span class="delete_add"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                            <span class="title_add">
                                شماره تماس:
                            </span>
                                            <span class="value_add">
                              {{ $address->mobile }}
                            </span>
                                        </td>
                                        <td>
                            <span class="title_add">
                                کد پستی:
                            </span>
                                            <span class="value_add">
                              {{ $address->post }}
                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="vertical-align: top">

                                <span class="ostan_name">
                                    <span>
                                        استان
                                    </span>
                                    <span>
                                        {{ $address->ostan }}
                                    </span>
                                </span>
                                            ،
                                            <span class="shahr_name">
                                    <span>
                                        شهر
                                    </span>
                                    <span>
                                        {{ $address->shahr }}
                                    </span>
                                </span>
                                            ،
                                            <span class="posti_address">
                                    {{ $address->address }}
                                </span>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        @endforeach

                        <?php
                        }else{
                        ?>
                        <div class="row mt-4 fontssm jumbotron justify-content-center">
                            تا کنون هیچ آدرس ثبت شده ای ندارید
                        </div>

                        <?php
                        }
                        ?>

                    </div>


                </div>


            </div>


        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#tab_part .col-3').click(function () {
            $('#tab_part .col-3').removeClass('activeTab');
            $(this).addClass('activeTab');
            $('#tab_content > .col-11 ').fadeOut(0);
            var tabNum = $(this).index();

            $('#tab_content > .col-11').eq(tabNum).fadeIn(200);
        });
        $('#tab_part .col-3:first ').addClass('activeTab');
        $('#tab_content > .col-11 ').fadeOut(0);
        $('#tab_content > .col-11:eq(0) ').fadeIn(0);


        $('.more_detail').click(function () {
            $(this).toggleClass('close_detail');
            var parent = $(this).parents(" div .row ");
            var moreDetail = parent.next();
            moreDetail.slideToggle(100);
        });

        $('.payAgainBtn').click(function () {
            let orderId = $(this).attr('data-order');
            $('input[name="order_id"]').val(orderId);
            $('.payAgain').submit();
        });

        function deleteAddress(AddressId) {
            startLoader();
            let address_id = AddressId;
            let callback = 'panel';
            let _token = $('input[name="_token"]').val();
            let formData = new FormData();
            formData.append('address_id', address_id);
            formData.append('callback', callback);
            $.ajax({
                method: 'POST',
                url: '/deleteAddress',
                data: formData,
                contentType: false,
                processData: false,
                headers: {'X-CSRF-TOKEN': _token}
            }).done(function (msg) {
                console.log(msg);
                endLoader();
                location.reload();
            });
        }

    </script>
@endsection

{{--@section('modal')--}}
    {{--<script src="/js/bootstrap-select.js"></script>--}}
    {{--<link href="/css/bootstrap-select.css" rel="stylesheet">--}}
    {{--<style>--}}
        {{--#add_address {--}}
            {{--/* width: 800px; */--}}

            {{--/* margin-left: 275px; */--}}
            {{--background: white;--}}
            {{--position: fixed;--}}
            {{--top: 20px;--}}
            {{--z-index: 15;--}}
            {{--display: none;--}}
        {{--}--}}

        {{--#title_adding {--}}
            {{--display: block;--}}
            {{--/* float: right; */--}}
            {{--color: #6f6f6f;--}}
            {{--font-family: IranSans;--}}
            {{--font-size: 16pt;--}}
            {{--/* width: 100%; */--}}
            {{--height: 100%;--}}

            {{--/* margin-right: 30px; */--}}
            {{--/* margin-top: 30px; */--}}
            {{--/* padding-right: 10px; */--}}
        {{--}--}}

        {{--#close_page {--}}
            {{--display: inline-block;--}}
            {{--float: left;--}}
            {{--width: 45px;--}}
            {{--height: 45px;--}}
            {{--/* margin-left: 30px; */--}}
            {{--/* margin-top: 30px; */--}}
            {{--border: 1px solid #d7d7d7;--}}
            {{--border-radius: 100%;--}}
            {{--background: url(/img/x-button2.png) no-repeat center;--}}
            {{--cursor: pointer;--}}
        {{--}--}}

        {{--/*.roww_right, .roww_left {*/--}}
        {{--/*width: 350px;*/--}}
        {{--/*height: 100%;*/--}}
        {{--/*float: right;*/--}}
        {{--/*margin-right: 30px;*/--}}
        {{--/*}*/--}}

        {{--.roww p {--}}
            {{--font-family: IranSans;--}}
            {{--font-size: 14pt;--}}
            {{--font-weight: normal;--}}
            {{--color: #6f6f6f;--}}
            {{--margin-bottom: 0;--}}
        {{--}--}}

        {{--.roww_right input, .roww_left input {--}}
            {{--/*width: 320px;*/--}}
            {{--height: 45px;--}}
            {{--border: 1px solid #d7d7d7;--}}
            {{--border-radius: 4px;--}}
            {{--padding-right: 8px;--}}
            {{--font-family: IranSans;--}}
            {{--font-size: 13pt;--}}
            {{--color: #9c9c9c;--}}
        {{--}--}}

        {{--.roww_left input {--}}
            {{--direction: ltr;--}}
            {{--padding-right: 0;--}}
            {{--padding-left: 8px;--}}
        {{--}--}}

        {{--.roww textarea {--}}
            {{--width: 91%;--}}
            {{--height: 100px;--}}
            {{--border: 1px solid #d7d7d7;--}}
            {{--border-radius: 4px;--}}
            {{--padding-right: 8px;--}}
            {{--padding-top: 8px;--}}
            {{--font-size: 12pt;--}}
        {{--}--}}

        {{--.roww > input {--}}
            {{--width: 91%;--}}
            {{--height: 45px;--}}
            {{--border: 1px solid #d7d7d7;--}}
            {{--border-radius: 4px;--}}
            {{--padding-right: 8px;--}}
            {{--font-family: IranSans;--}}
            {{--font-size: 13pt;--}}
            {{--color: #9c9c9c;--}}
        {{--}--}}

        {{--.roww .addBtn {--}}
            {{--width: 250px;--}}
            {{--float: right;--}}
            {{--margin-right: 30px;--}}
            {{--height: 50px;--}}
            {{--line-height: 50px;--}}
        {{--}--}}

        {{--.post_address {--}}
            {{--border: 1px solid #d7d7d7;--}}
            {{--border-radius: 4px;--}}
            {{--font-family: IranSans;--}}
            {{--font-size: 13pt;--}}
            {{--color: #9c9c9c;--}}
        {{--}--}}

        {{--.borderRed {--}}
            {{--border: 2px solid #ff386b !important;--}}
        {{--}--}}

        {{--.addBtn.noSub {--}}
            {{--background: #7ee5db42 !important;--}}
            {{--cursor: not-allowed;--}}
        {{--}--}}
    {{--</style>--}}
    {{--<div class="container justify-content-center AddAddressContainer"  style="display: none">--}}
        {{--<form class="AddAddress" action="{{route('addAddress',['callback'=>'panel'])}}" method="post">--}}
            {{--{{method_field('post')}}--}}
            {{--{{csrf_field()}}--}}
            {{--<div id="add_address" class="col-11 col-sm-8 pb-3">--}}
                {{--<div class="row" style="background: #f9f9f9;">--}}
                    {{--<div class="col-9 mt-2 mb-2 mt-sm-3 mb-sm-3">--}}
                        {{--<span id="title_adding">--}}
                            {{--افزودن آدرس جدید--}}
                        {{--</span>--}}
                    {{--</div>--}}
                    {{--<div class="col-3 mt-2 mb-2 mt-sm-3 mb--sm-3">--}}
                        {{--<span id="close_page"></span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="roww_right col-12 col-sm-6 mt-sm-3">--}}
                        {{--<div class="row">--}}
                            {{--<p class="col-12">--}}
                                {{--نام و نام خانوادگی تحویل گیرنده--}}
                            {{--</p>--}}
                            {{--<div class="col-12">--}}
                                {{--<input name="name" class="col-10" placeholder="نام تحویل گیرنده را وارد نمایید">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="roww_left col-12 col-sm-6 mt-sm-3">--}}
                        {{--<div class="row">--}}
                            {{--<p class="col-12">--}}
                                {{--شماره موبایل--}}
                            {{--</p>--}}
                            {{--<div class="col-12">--}}
                                {{--<input name="mobile" class="col-10" placeholder="09xxxxxxxxx">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row">--}}
                    {{--<div class="roww_right col-12 col-sm-6 mt-sm-3">--}}
                        {{--<p style="display: inline-block;">--}}
                            {{--استان--}}
                        {{--</p>--}}
                        {{--<select id="ostanSelect" class="form-control" onchange="Ostan(this)" title="انتخاب استان"--}}
                                {{--style="display: inline-block !important;width: 75% !important;">--}}
                            {{--<option value="">--}}
                                {{--انتخاب استان--}}
                            {{--</option>--}}
                            {{--<option data-val="1" value="آذربایجان شرقی">--}}
                                {{--آذربایجان شرقی--}}
                            {{--</option>--}}
                            {{--<option data-val="2" value="آذربایجان غربی">--}}
                                {{--آذربایجان غربی--}}
                            {{--</option>--}}
                            {{--<option data-val="3" value="اردبیل">--}}
                                {{--اردبیل--}}
                            {{--</option>--}}
                            {{--<option data-val="4" value="اصفهان">--}}
                                {{--اصفهان--}}
                            {{--</option>--}}
                            {{--<option data-val="5" value="ایلام">--}}
                                {{--ایلام--}}
                            {{--</option>--}}
                            {{--<option data-val="6" value="بوشهر">--}}
                                {{--بوشهر--}}
                            {{--</option>--}}
                            {{--<option data-val="7" value="تهران">--}}
                                {{--تهران--}}
                            {{--</option>--}}
                            {{--<option data-val="8" value="چهارمحال و بختیاری">--}}
                                {{--چهارمحال و بختیاری--}}
                            {{--</option>--}}
                            {{--<option data-val="9" value="خراسان جنوبی">--}}
                                {{--خراسان جنوبی--}}
                            {{--</option>--}}
                            {{--<option data-val="10" value="خراسان رضوی">--}}
                                {{--خراسان رضوی--}}
                            {{--</option>--}}
                            {{--<option data-val="11" value="خراسان شمالی">--}}
                                {{--خراسان شمالی--}}
                            {{--</option>--}}
                            {{--<option data-val="12" value="خوزستان">--}}
                                {{--خوزستان--}}
                            {{--</option>--}}
                            {{--<option data-val="13" value="زنجان">--}}
                                {{--زنجان--}}
                            {{--</option>--}}
                            {{--<option data-val="14" value="سمنان">--}}
                                {{--سمنان--}}
                            {{--</option>--}}
                            {{--<option data-val="15" value="سیستان و بلوچستان">--}}
                                {{--سیستان و بلوچستان--}}
                            {{--</option>--}}
                            {{--<option data-val="16" value="فارس">--}}
                                {{--فارس--}}
                            {{--</option>--}}
                            {{--<option data-val="17" value="قزوین">--}}
                                {{--قزوین--}}
                            {{--</option>--}}
                            {{--<option data-val="18" value="قم">--}}
                                {{--قم--}}
                            {{--</option>--}}
                            {{--<option data-val="19" value="کردستان">--}}
                                {{--کردستان--}}
                            {{--</option>--}}
                            {{--<option data-val="20" value="کرمان">--}}
                                {{--کرمان--}}
                            {{--</option>--}}
                            {{--<option data-val="21" value="کرمانشاه">--}}
                                {{--کرمانشاه--}}
                            {{--</option>--}}
                            {{--<option data-val="22" value="کهگیلویه و بویراحمد">--}}
                                {{--کهگیلویه و بویراحمد--}}
                            {{--</option>--}}
                            {{--<option data-val="23" value="گلستان">--}}
                                {{--گلستان--}}
                            {{--</option>--}}
                            {{--<option data-val="24" value="گیلان">--}}
                                {{--گیلان--}}
                            {{--</option>--}}
                            {{--<option data-val="25" value="لرستان">--}}
                                {{--لرستان--}}
                            {{--</option>--}}
                            {{--<option data-val="26" value="مازندران">--}}
                                {{--مازندران--}}
                            {{--</option>--}}
                            {{--<option data-val="27" value="مرکزی">--}}
                                {{--مرکزی--}}
                            {{--</option>--}}
                            {{--<option data-val="28" value="هرمزگان">--}}
                                {{--هرمزگان--}}
                            {{--</option>--}}
                            {{--<option data-val="29" value="همدان">--}}
                                {{--همدان--}}
                            {{--</option>--}}
                            {{--<option data-val="30" value="یزد">--}}
                                {{--یزد--}}
                            {{--</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                    {{--<input type="hidden" name="ostan" value="0">--}}

                    {{--<div class="roww_left col-12 col-sm-6 mt-sm-3">--}}
                        {{--<p style="display: inline-block;">--}}
                            {{--شهر--}}
                        {{--</p>--}}
                        {{--<span class="shahr">--}}
                            {{--<select id="shahr" onclick="Shahr(this)" class="form-control" title="انتخاب شهر"--}}
                                    {{--style="display: inline-block !important;width: 75% !important;">--}}
                                {{--<option value="">--}}
                                {{--انتخاب شهر--}}
                                {{--</option>--}}
                            {{--</select>--}}

                    {{--</span>--}}
                    {{--</div>--}}
                    {{--<input type="hidden" name="shahr" value="">--}}
                {{--</div>--}}
                {{--<div class="row mt-2 mt-sm-3 mb-2 mb-sm-3">--}}
                    {{--<p class="col-2">--}}
                        {{--آدرس پستی--}}
                    {{--</p>--}}
                    {{--<textarea name="address" class="post_address col-8 p-2 p-sm-3" rows="3"--}}
                              {{--placeholder="آدرس تحویل گیرنده را وارد نمایید"></textarea>--}}
                {{--</div>--}}
                {{--<div class="row mt-2 mt-sm-3 mb-2 mb-sm-3">--}}
                    {{--<p class="col-2">--}}
                        {{--کد پستی--}}
                    {{--</p>--}}
                    {{--<input name="post" class="col-5" placeholder="کد پستی را بدون خط تیره بنویسید">--}}
                {{--</div>--}}
                {{--<div class="row justify-content-end pl-2 pl-sm-4">--}}
                    {{--<div class="col-3">--}}
                            {{--<span class="addBtn addaddressBtn pr-3 pl-3">--}}
                            {{--ثبت اطلاعات وارد شده--}}
                        {{--</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</div>--}}
    {{--<script>--}}
        {{--// $('.selectpicker1').selectpicker();--}}

        {{--function Ostan(tag) {--}}
            {{--var id = $(tag).find('option:selected').attr('data-val');--}}
            {{--var text = $(tag).find('option:selected').val();--}}
            {{--var arr = new Array();--}}
            {{--if (id == 1) {--}}
                {{--arr = ['انتخاب شهر', 'آذرشهر', 'اسکو', 'اهر', 'بستان‌آباد', 'بناب', 'تبریز', 'جلفا', 'چاراویماق', 'سراب', 'شبستر', 'عجب‌شیر', 'کلیبر', 'مراغه', 'مرند', 'ملکان', 'میانه', 'ورزقان', 'هریس', 'هشترود'];--}}
            {{--}//if--}}
            {{--if (id == 2) {--}}
                {{--arr = ['انتخاب شهر', 'ارومیه', 'اشنویه', 'بوکان', 'پیرانشهر', 'تکاب', 'چالدران', 'خوی', 'سردشت', 'سلماس', 'شاهین‌دژ', 'ماکو', 'مهاباد', 'میاندوآب', 'نقده'];--}}
            {{--}//if--}}
            {{--if (id == 3) {--}}
                {{--arr = ['انتخاب شهر', 'اردبیل', 'بیله‌سوار', 'پارس‌آباد', 'خلخال', 'کوثر', 'گِرمی', 'مِشگین‌شهر', 'نَمین', 'نیر'];--}}
            {{--}//if--}}
            {{--if (id == 4) {--}}
                {{--arr = ['انتخاب شهر', 'آران و بیدگل', 'اردستان', 'اصفهان', 'برخوار و میمه', 'تیران و کرون', 'چادگان', 'خمینی‌شهر', 'خوانسار', 'سمیرم', 'شهرضا', 'سمیرم سفلی', 'فریدن', 'فریدون‌شهر', 'فلاورجان', 'کاشان', 'گلپایگان', 'لنجان', 'مبارکه', 'نائین', 'نجف‌آباد', 'نطنز']--}}
            {{--}--}}
            {{--if (id == 5) {--}}
                {{--arr = ['انتخاب شهر', 'آبدانان', 'ایلام', 'ایوان', 'دره‌شهر', 'دهلران', 'شیروان و چرداول', 'مهران']--}}
            {{--}--}}
            {{--if (id == 6) {--}}
                {{--arr = ['انتخاب شهر', 'بوشهر', 'تنگستان', 'جم', 'دشتستان', 'دشتی', 'دیر', 'دیلم', 'کنگان', 'گناوه']--}}
            {{--}--}}
            {{--if (id == 7) {--}}
                {{--arr = ['انتخاب شهر', 'اسلام‌شهر', 'پاکدشت', 'تهران', 'دماوند', 'رباط‌کریم', 'ری', 'ساوجبلاغ', 'شمیرانات', 'شهریار', 'فیروزکوه', 'کرج', 'نظرآباد', 'ورامین']--}}
            {{--}--}}
            {{--if (id == 8) {--}}
                {{--arr = ['انتخاب شهر', 'اردل', 'بروجن', 'شهرکرد', 'فارسان', 'کوهرنگ', 'لردگان']--}}
            {{--}--}}
            {{--if (id == 9) {--}}
                {{--arr = ['انتخاب شهر', 'بیرجند', 'درمیان', 'سرایان', 'سربیشه', 'فردوس', 'قائنات', 'نهبندان']--}}
            {{--}--}}
            {{--if (id == 10) {--}}
                {{--arr = ['انتخاب شهر', 'بردسکن', 'تایباد', 'تربت جام', 'تربت حیدریه', 'چناران', 'خلیل‌آباد', 'خواف', 'درگز', 'رشتخوار', 'سبزوار', 'سرخس', 'فریمان', 'قوچان', 'کاشمر', 'کلات', 'گناباد', 'مشهد', 'مه ولات', 'نیشابور']--}}
            {{--}--}}
            {{--if (id == 11) {--}}
                {{--arr = ['انتخاب شهر', 'اسفراین', 'بجنورد', 'جاجرم', 'شیروان', 'فاروج', 'مانه و سملقان']--}}
            {{--}--}}
            {{--if (id == 12) {--}}
                {{--arr = ['انتخاب شهر', 'آبادان', 'امیدیه', 'اندیمشک', 'اهواز', 'ایذه', 'باغ‌ملک', 'بندر ماهشهر', 'بهبهان', 'خرمشهر', 'دزفول', 'دشت آزادگان', 'رامشیر', 'رامهرمز', 'شادگان', 'شوش', 'شوشتر', 'گتوند', 'لالی', 'مسجد سلیمان', 'هندیجان']--}}
            {{--}--}}
            {{--if (id == 13) {--}}
                {{--arr = ['انتخاب شهر', 'ابهر', 'ایجرود', 'خدابنده', 'خرمدره', 'زنجان', 'طارم', 'ماه‌نشان']--}}
            {{--}--}}
            {{--if (id == 14) {--}}
                {{--arr = ['انتخاب شهر', 'دامغان', 'سمنان', 'شاهرود', 'گرمسار', 'مهدی‌شهر']--}}
            {{--}--}}
            {{--if (id == 15) {--}}
                {{--arr = ['انتخاب شهر', 'ایرانشهر', 'چابهار', 'خاش', 'دلگان', 'زابل', 'زاهدان', 'زهک', 'سراوان', 'سرباز', 'کنارک', 'نیک‌شهر']--}}
            {{--}--}}
            {{--if (id == 16) {--}}
                {{--arr = ['انتخاب شهر', 'آباده', 'ارسنجان', 'استهبان', 'اقلید', 'بوانات', 'پاسارگاد', 'جهرم', 'خرم‌بید', 'خنج', 'داراب', 'زرین‌دشت', 'سپیدان', 'شیراز', 'فراشبند', 'فسا', 'فیروزآباد', 'قیر و کارزین', 'کازرون', 'لارستان', 'لامِرد', 'مرودشت', 'ممسنی', 'مهر', 'نی‌ریز']--}}
            {{--}--}}
            {{--if (id == 17) {--}}
                {{--arr = ['انتخاب شهر', 'آبیک', 'البرز', 'بوئین‌زهرا', 'تاکستان', 'قزوین']--}}
            {{--}--}}
            {{--if (id == 18) {--}}
                {{--arr = ['انتخاب شهر', 'قم']--}}
            {{--}--}}
            {{--if (id == 19) {--}}
                {{--arr = ['انتخاب شهر', 'بانه', 'بیجار', 'دیواندره', 'سروآباد', 'سقز', 'سنندج', 'قروه', 'کامیاران', 'مریوان']--}}
            {{--}--}}
            {{--if (id == 20) {--}}
                {{--arr = ['انتخاب شهر', 'بافت', 'بردسیر', 'بم', 'جیرفت', 'راور', 'رفسنجان', 'رودبار جنوب', 'زرند', 'سیرجان', 'شهر بابک', 'عنبرآباد', 'قلعه گنج', 'کرمان', 'کوهبنان', 'کهنوج', 'منوجان']--}}
            {{--}--}}
            {{--if (id == 21) {--}}
                {{--arr = ['انتخاب شهر', 'اسلام‌آباد غرب', 'پاوه', 'ثلاث باباجانی', 'جوانرود', 'دالاهو', 'روانسر', 'سرپل ذهاب', 'سنقر', 'صحنه', 'قصر شیرین', 'کرمانشاه', 'کنگاور', 'گیلان غرب', 'هرسین']--}}
            {{--}--}}
            {{--if (id == 22) {--}}
                {{--arr = ['انتخاب شهر', 'بویراحمد', 'بهمئی', 'دنا', 'کهگیلویه', 'گچساران']--}}
            {{--}--}}
            {{--if (id == 23) {--}}
                {{--arr = ['انتخاب شهر', 'آزادشهر', 'آق‌قلا', 'بندر گز', 'ترکمن', 'رامیان', 'علی‌آباد', 'کردکوی', 'کلاله', 'گرگان', 'گنبد کاووس', 'مراوه‌تپه', 'مینودشت']--}}
            {{--}--}}
            {{--if (id == 24) {--}}
                {{--arr = ['انتخاب شهر', 'آستارا', 'آستانه اشرفیه', 'اَملَش', 'بندر انزلی', 'رشت', 'رضوانشهر', 'رودبار', 'رودسر', 'سیاهکل', 'شَفت', 'صومعه‌سرا', 'طوالش', 'فومَن', 'لاهیجان', 'لنگرود', 'ماسال']--}}
            {{--}--}}
            {{--if (id == 25) {--}}
                {{--arr = ['انتخاب شهر', 'ازنا', 'الیگودرز', 'بروجرد', 'پل‌دختر', 'خرم‌آباد', 'دورود', 'دلفان', 'سلسله', 'کوهدشت']--}}
            {{--}--}}
            {{--if (id == 26) {--}}
                {{--arr = ['انتخاب شهر', 'آمل', 'بابل', 'بابلسر', 'بهشهر', 'تنکابن', 'جویبار', 'چالوس', 'رامسر', 'ساری', 'سوادکوه', 'v', 'گلوگاه', 'محمودآباد', 'نکا', 'نور', 'نوشهر']--}}
            {{--}--}}
            {{--if (id == 27) {--}}
                {{--arr = ['انتخاب شهر', 'آشتیان', 'اراک', 'تفرش', 'خمین', 'دلیجان', 'زرندیه', 'ساوه', 'شازند', 'کمیجان', 'محلات']--}}
            {{--}--}}
            {{--if (id == 28) {--}}
                {{--arr = ['انتخاب شهر', 'ابوموسی', 'بستک', 'بندر عباس', 'بندر لنگه', 'جاسک', 'حاجی‌آباد', 'شهرستان خمیر', 'رودان', 'قشم', 'گاوبندی', 'میناب']--}}
            {{--}--}}
            {{--if (id == 29) {--}}
                {{--arr = ['انتخاب شهر', 'اسدآباد', 'بهار', 'تویسرکان', 'رزن', 'کبودرآهنگ', 'ملایر', 'نهاوند', 'همدان']--}}
            {{--}--}}
            {{--if (id == 30) {--}}
                {{--arr = ['انتخاب شهر', 'ابرکوه', 'اردکان', 'بافق', 'تفت', 'خاتم', 'صدوق', 'طبس', 'مهریز', 'مِیبُد', 'یزد']--}}
            {{--}--}}
            {{--$('.shahr').find('select option').remove();--}}
            {{--var k = 0;--}}
            {{--if (arr.length > 0) {--}}
                {{--for (k = 0; k < arr.length; k++) {--}}
                    {{--$('.shahr').find('select').append($('<option>', {id: k, text: arr[k], value: arr[k]}));--}}
                {{--}//for--}}
            {{--}//if--}}
            {{--$('input[name="ostan"]').val(text);--}}
            {{--Shahr2();--}}
        {{--}//function ostan--}}


        {{--$('#close_page').click(function () {--}}
            {{--$('#dark').fadeOut(100);--}}
            {{--$('.AddAddressContainer').fadeOut(100);--}}
            {{--$(this).parents('#add_address').fadeOut(100);--}}

        {{--});--}}

        {{--function Shahr(tag) {--}}
            {{--var index = $(tag).find('option:selected').val();--}}
            {{--$('input[name="shahr"]').val(index);--}}
        {{--}--}}

        {{--function Shahr2() {--}}
            {{--var index = $('#shahr').find('option:first-child').val();--}}
            {{--var id = $('#shahr').find('option:first-child').attr('id');--}}
            {{--if (id == 0) {--}}
                {{--$('input[name="shahr"]').val('انتخاب شهر');--}}
            {{--} else {--}}
                {{--$('input[name="shahr"]').val(index);--}}
            {{--}--}}
        {{--}--}}

        {{--function addressSub() {--}}
            {{--var name = $('input[name="name"]').val();--}}
            {{--var mobile = $('input[name="mobile"]').val();--}}
            {{--var ostan = $('input[name="ostan"]').val();--}}
            {{--var shahr = $('input[name="shahr"]').val();--}}
            {{--var address = $('textarea[name="address"]').val();--}}
            {{--var post = $('input[name="post"]').val();--}}

            {{--if (name == '' || mobile == '' || ostan == 0 || shahr == 0 || shahr == 'انتخاب شهر' || address == '' || address.length < 10 || post == '' || post.length < 10) {--}}
                {{--$('.addaddressBtn').addClass('noSub');--}}
                {{--$('.addaddressBtn').attr('onClick', '');--}}
                {{--if (name.length < 2) {--}}
                    {{--$('input[name="name"]').addClass('borderRed');--}}
                {{--} else {--}}
                    {{--$('input[name="name"]').removeClass('borderRed');--}}
                {{--}//--}}
                {{--if (mobile.length < 10) {--}}
                    {{--$('input[name="mobile"]').addClass('borderRed');--}}
                {{--} else {--}}
                    {{--$('input[name="mobile"]').removeClass('borderRed');--}}
                {{--}//--}}
                {{--if (ostan == 0) {--}}
                    {{--$('select[id="ostanSelect"]').addClass('borderRed');--}}
                {{--} else {--}}
                    {{--$('select[id="ostanSelect"]').removeClass('borderRed');--}}
                {{--}//--}}
                {{--if (shahr == 0 || shahr == 'انتخاب شهر') {--}}
                    {{--$('select[id="shahr"]').addClass('borderRed');--}}
                {{--} else {--}}
                    {{--$('select[id="shahr"]').removeClass('borderRed');--}}
                {{--}//--}}
                {{--if (address.length < 10) {--}}
                    {{--$('textarea[name="address"]').addClass('borderRed');--}}
                {{--} else {--}}
                    {{--$('textarea[name="address"]').removeClass('borderRed');--}}
                {{--}//--}}
                {{--if (post == '' || post.length < 10) {--}}
                    {{--$('input[name="post"]').addClass('borderRed');--}}
                {{--} else {--}}
                    {{--$('input[name="post"]').removeClass('borderRed');--}}
                {{--}//--}}
                {{--console.log('n');--}}
            {{--} else {--}}

                {{--$('input[name="post"]').removeClass('borderRed');--}}
                {{--$('.addaddressBtn').removeClass('noSub');--}}
                {{--$('.addaddressBtn').attr('onClick', 'Addresssubmit()');--}}
                {{--console.log('y');--}}
            {{--}--}}
        {{--}--}}

        {{--function Addresssubmit() {--}}
            {{--$('.AddAddress').submit();--}}
        {{--}--}}

    {{--</script>--}}
    {{--<style>--}}
        {{--#dark {--}}
            {{--width: 100%;--}}
            {{--height: 100%;--}}
            {{--float: right;--}}
            {{--background: rgba(147, 147, 147, 0.46);--}}
            {{--position: fixed;--}}
            {{--top: 0;--}}
            {{--display: none;--}}
            {{--z-index: 10;--}}
        {{--}--}}
    {{--</style>--}}
    {{--<div id="dark">--}}

    {{--</div>--}}
{{--@endsection--}}
@section('modal')
    {{--<script src="/js/bootstrap-select.js"></script>--}}
    {{--<link href="/css/bootstrap-select.css" rel="stylesheet">--}}
    <style>
        #add_address {
            /* width: 800px; */

            /* margin-left: 275px; */
            background: white;
            position: fixed;
            top: 20px;
            z-index: 15;
            display: none;
        }

        #title_adding {
            display: block;
            /* float: right; */
            color: #6f6f6f;
            /* width: 100%; */
            height: 100%;

            /* margin-right: 30px; */
            /* margin-top: 30px; */
            /* padding-right: 10px; */
        }

        #close_page {
            display: inline-block;
            float: left;
            width: 45px;
            height: 45px;
            /* margin-left: 30px; */
            /* margin-top: 30px; */
            border: 1px solid #d7d7d7;
            border-radius: 100%;
            background: url(/img/x-button2.png) no-repeat center;
            cursor: pointer;
        }

        /*.roww_right, .roww_left {*/
        /*width: 350px;*/
        /*height: 100%;*/
        /*float: right;*/
        /*margin-right: 30px;*/
        /*}*/

        .roww p {
            font-weight: normal;
            color: #6f6f6f;
            margin-bottom: 0;
        }

        .roww_right input, .roww_left input {
            /*width: 320px;*/
            height: 45px;
            border: 1px solid #d7d7d7;
            border-radius: 4px;
            padding-right: 8px;
            color: #9c9c9c;
        }

        .roww_left input {
            direction: ltr;
            padding-right: 0;
            padding-left: 8px;
        }

        .roww textarea {
            width: 91%;
            height: 100px;
            border: 1px solid #d7d7d7;
            border-radius: 4px;
            padding-right: 8px;
            padding-top: 8px;
            font-size: 12pt;
        }

        .roww > input {
            width: 91%;
            height: 45px;
            border: 1px solid #d7d7d7;
            border-radius: 4px;
            padding-right: 8px;
            color: #9c9c9c;
        }

        .roww .addBtn {
            width: 250px;
            float: right;
            margin-right: 30px;
            height: 50px;
            line-height: 50px;
            font-size: 16pt;
        }

        .post_address {
            border: 1px solid #d7d7d7;
            border-radius: 4px;
            color: #9c9c9c;
        }
        .addBtn.noSub {
            background: #7ee5db42 !important;
            cursor: not-allowed;
        }

        .borderRed {
            border: 2px solid #ff386b !important;
        }
    </style>
    <div class="container AddAddressContainer justify-content-center" style="display: none">
        <form class="AddAddress" action="{{route('addAddress',['callback'=>'panel'])}}" method="post">
            {{method_field('post')}}
            {{csrf_field()}}
            <div id="add_address" class="col-11 col-sm-8 pb-3 font-m65-p120">

                <div class="row" style="background: #f9f9f9;">
                    <div class="col-9 mt-2 mb-2 mt-sm-3 mb-sm-3">
                        <span id="title_adding" class="fontlg">
                            افزودن آدرس جدید
                        </span>
                    </div>
                    <div class="col-3 mt-2 mb-2 mt-sm-3 mb--sm-3">
                        <span id="close_page"></span>
                    </div>
                </div>

                <div class="row pb-1 ">
                    <div class="roww_right col-12 col-sm-6 mt-sm-3">
                        <div class="row">
                            <p class="col-12 mt-2" style="margin-bottom: 0;">
                                نام و نام خانوادگی تحویل گیرنده
                            </p>
                            <div class="col-12">
                                <input name="fullname" class="col-10" placeholder="مثال: علی راد">
                            </div>
                        </div>
                    </div>
                    <div class="roww_left col-12 col-sm-6 mt-sm-3">
                        <div class="row">
                            <p class="col-12 mt-2" style="margin-bottom: 0;">
                                شماره موبایل
                            </p>
                            <div class="col-12">
                                <input name="usermobile" class="col-10" placeholder="09xxxxxxxxx">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="roww_right col-12 col-sm-6 mt-sm-3">
                        <div class="row">
                            <p class="col-12 mt-2" style="margin-bottom: 0;">
                                استان
                            </p>
                            <div class="col-12">
                                <select id="ostanSelect" class="form-control col-10 fontsm" onchange="Ostan(this)"

                                        title="انتخاب استان"
                                        style="display: inline-block !important;width: 75% !important;height: 100%">
                                    <option value="">
                                        انتخاب استان
                                    </option>
                                    <option data-val="1" value="آذربایجان شرقی">
                                        آذربایجان شرقی
                                    </option>
                                    <option data-val="2" value="آذربایجان غربی">
                                        آذربایجان غربی
                                    </option>
                                    <option data-val="3" value="اردبیل">
                                        اردبیل
                                    </option>
                                    <option data-val="4" value="اصفهان">
                                        اصفهان
                                    </option>
                                    <option data-val="5" value="ایلام">
                                        ایلام
                                    </option>
                                    <option data-val="6" value="بوشهر">
                                        بوشهر
                                    </option>
                                    <option data-val="7" value="تهران">
                                        تهران
                                    </option>
                                    <option data-val="8" value="چهارمحال و بختیاری">
                                        چهارمحال و بختیاری
                                    </option>
                                    <option data-val="9" value="خراسان جنوبی">
                                        خراسان جنوبی
                                    </option>
                                    <option data-val="10" value="خراسان رضوی">
                                        خراسان رضوی
                                    </option>
                                    <option data-val="11" value="خراسان شمالی">
                                        خراسان شمالی
                                    </option>
                                    <option data-val="12" value="خوزستان">
                                        خوزستان
                                    </option>
                                    <option data-val="13" value="زنجان">
                                        زنجان
                                    </option>
                                    <option data-val="14" value="سمنان">
                                        سمنان
                                    </option>
                                    <option data-val="15" value="سیستان و بلوچستان">
                                        سیستان و بلوچستان
                                    </option>
                                    <option data-val="16" value="فارس">
                                        فارس
                                    </option>
                                    <option data-val="17" value="قزوین">
                                        قزوین
                                    </option>
                                    <option data-val="18" value="قم">
                                        قم
                                    </option>
                                    <option data-val="19" value="کردستان">
                                        کردستان
                                    </option>
                                    <option data-val="20" value="کرمان">
                                        کرمان
                                    </option>
                                    <option data-val="21" value="کرمانشاه">
                                        کرمانشاه
                                    </option>
                                    <option data-val="22" value="کهگیلویه و بویراحمد">
                                        کهگیلویه و بویراحمد
                                    </option>
                                    <option data-val="23" value="گلستان">
                                        گلستان
                                    </option>
                                    <option data-val="24" value="گیلان">
                                        گیلان
                                    </option>
                                    <option data-val="25" value="لرستان">
                                        لرستان
                                    </option>
                                    <option data-val="26" value="مازندران">
                                        مازندران
                                    </option>
                                    <option data-val="27" value="مرکزی">
                                        مرکزی
                                    </option>
                                    <option data-val="28" value="هرمزگان">
                                        هرمزگان
                                    </option>
                                    <option data-val="29" value="همدان">
                                        همدان
                                    </option>
                                    <option data-val="30" value="یزد">
                                        یزد
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="ostan" value="0">

                    <div class="roww_left col-12 col-sm-6 mt-sm-3">
                        <div class="row">
                            <p class="col-12 mt-2 " style="margin-bottom: 0;">
                                شهر
                            </p>
                            {{--<div class="col-12">--}}
                            <span class="shahr col-12">
                            <select id="shahr" onclick="Shahr(this)" class="form-control  col-10 fontsm"
                                    title="انتخاب شهر"
                                    style="display: inline-block !important;width: 75% !important;height: 100%">
                                <option value="">
                                انتخاب شهر
                                </option>
                            </select>

                         </span>
                            {{--</div>--}}
                        </div>
                    </div>
                    <input type="hidden" name="shahr" value="">
                </div>
                <div class="row mt-2 mt-sm-3 mb-2 mb-sm-3">
                    <p class="col-2">
                        آدرس پستی
                    </p>
                    <textarea name="address" class="post_address col-8 p-2 p-sm-3" rows="3"
                              placeholder="آدرس تحویل گیرنده را وارد نمایید"></textarea>
                </div>
                <div class="row mt-2 mt-sm-3 mb-2 mb-sm-3">
                    <p class="col-2">
                        کد پستی
                    </p>
                    <input name="post" class="col-7 col-md-5" placeholder="کد پستی را بدون خط تیره بنویسید">
                </div>
                <div class="row justify-content-end pl-2 pl-sm-4">
                    <span class="addBtn addaddressBtn pr-3 pl-3 noSub">
                        ثبت اطلاعات وارد شده
                    </span>
                </div>
            </div>
        </form>
    </div>
    <script>
        // $('.selectpicker1').selectpicker();

        function Ostan(tag) {
            var id = $(tag).find('option:selected').attr('data-val');
            var text = $(tag).find('option:selected').val();
            var arr = new Array();
            if (id == 1) {
                arr = ['انتخاب شهر', 'آذرشهر', 'اسکو', 'اهر', 'بستان‌آباد', 'بناب', 'تبریز', 'جلفا', 'چاراویماق', 'سراب', 'شبستر', 'عجب‌شیر', 'کلیبر', 'مراغه', 'مرند', 'ملکان', 'میانه', 'ورزقان', 'هریس', 'هشترود'];
            }//if
            if (id == 2) {
                arr = ['انتخاب شهر', 'ارومیه', 'اشنویه', 'بوکان', 'پیرانشهر', 'تکاب', 'چالدران', 'خوی', 'سردشت', 'سلماس', 'شاهین‌دژ', 'ماکو', 'مهاباد', 'میاندوآب', 'نقده'];
            }//if
            if (id == 3) {
                arr = ['انتخاب شهر', 'اردبیل', 'بیله‌سوار', 'پارس‌آباد', 'خلخال', 'کوثر', 'گِرمی', 'مِشگین‌شهر', 'نَمین', 'نیر'];
            }//if
            if (id == 4) {
                arr = ['انتخاب شهر', 'آران و بیدگل', 'اردستان', 'اصفهان', 'برخوار و میمه', 'تیران و کرون', 'چادگان', 'خمینی‌شهر', 'خوانسار', 'سمیرم', 'شهرضا', 'سمیرم سفلی', 'فریدن', 'فریدون‌شهر', 'فلاورجان', 'کاشان', 'گلپایگان', 'لنجان', 'مبارکه', 'نائین', 'نجف‌آباد', 'نطنز']
            }
            if (id == 5) {
                arr = ['انتخاب شهر', 'آبدانان', 'ایلام', 'ایوان', 'دره‌شهر', 'دهلران', 'شیروان و چرداول', 'مهران']
            }
            if (id == 6) {
                arr = ['انتخاب شهر', 'بوشهر', 'تنگستان', 'جم', 'دشتستان', 'دشتی', 'دیر', 'دیلم', 'کنگان', 'گناوه']
            }
            if (id == 7) {
                arr = ['انتخاب شهر', 'اسلام‌شهر', 'پاکدشت', 'تهران', 'دماوند', 'رباط‌کریم', 'ری', 'ساوجبلاغ', 'شمیرانات', 'شهریار', 'فیروزکوه', 'کرج', 'نظرآباد', 'ورامین']
            }
            if (id == 8) {
                arr = ['انتخاب شهر', 'اردل', 'بروجن', 'شهرکرد', 'فارسان', 'کوهرنگ', 'لردگان']
            }
            if (id == 9) {
                arr = ['انتخاب شهر', 'بیرجند', 'درمیان', 'سرایان', 'سربیشه', 'فردوس', 'قائنات', 'نهبندان']
            }
            if (id == 10) {
                arr = ['انتخاب شهر', 'بردسکن', 'تایباد', 'تربت جام', 'تربت حیدریه', 'چناران', 'خلیل‌آباد', 'خواف', 'درگز', 'رشتخوار', 'سبزوار', 'سرخس', 'فریمان', 'قوچان', 'کاشمر', 'کلات', 'گناباد', 'مشهد', 'مه ولات', 'نیشابور']
            }
            if (id == 11) {
                arr = ['انتخاب شهر', 'اسفراین', 'بجنورد', 'جاجرم', 'شیروان', 'فاروج', 'مانه و سملقان']
            }
            if (id == 12) {
                arr = ['انتخاب شهر', 'آبادان', 'امیدیه', 'اندیمشک', 'اهواز', 'ایذه', 'باغ‌ملک', 'بندر ماهشهر', 'بهبهان', 'خرمشهر', 'دزفول', 'دشت آزادگان', 'رامشیر', 'رامهرمز', 'شادگان', 'شوش', 'شوشتر', 'گتوند', 'لالی', 'مسجد سلیمان', 'هندیجان']
            }
            if (id == 13) {
                arr = ['انتخاب شهر', 'ابهر', 'ایجرود', 'خدابنده', 'خرمدره', 'زنجان', 'طارم', 'ماه‌نشان']
            }
            if (id == 14) {
                arr = ['انتخاب شهر', 'دامغان', 'سمنان', 'شاهرود', 'گرمسار', 'مهدی‌شهر']
            }
            if (id == 15) {
                arr = ['انتخاب شهر', 'ایرانشهر', 'چابهار', 'خاش', 'دلگان', 'زابل', 'زاهدان', 'زهک', 'سراوان', 'سرباز', 'کنارک', 'نیک‌شهر']
            }
            if (id == 16) {
                arr = ['انتخاب شهر', 'آباده', 'ارسنجان', 'استهبان', 'اقلید', 'بوانات', 'پاسارگاد', 'جهرم', 'خرم‌بید', 'خنج', 'داراب', 'زرین‌دشت', 'سپیدان', 'شیراز', 'فراشبند', 'فسا', 'فیروزآباد', 'قیر و کارزین', 'کازرون', 'لارستان', 'لامِرد', 'مرودشت', 'ممسنی', 'مهر', 'نی‌ریز']
            }
            if (id == 17) {
                arr = ['انتخاب شهر', 'آبیک', 'البرز', 'بوئین‌زهرا', 'تاکستان', 'قزوین']
            }
            if (id == 18) {
                arr = ['انتخاب شهر', 'قم']
            }
            if (id == 19) {
                arr = ['انتخاب شهر', 'بانه', 'بیجار', 'دیواندره', 'سروآباد', 'سقز', 'سنندج', 'قروه', 'کامیاران', 'مریوان']
            }
            if (id == 20) {
                arr = ['انتخاب شهر', 'بافت', 'بردسیر', 'بم', 'جیرفت', 'راور', 'رفسنجان', 'رودبار جنوب', 'زرند', 'سیرجان', 'شهر بابک', 'عنبرآباد', 'قلعه گنج', 'کرمان', 'کوهبنان', 'کهنوج', 'منوجان']
            }
            if (id == 21) {
                arr = ['انتخاب شهر', 'اسلام‌آباد غرب', 'پاوه', 'ثلاث باباجانی', 'جوانرود', 'دالاهو', 'روانسر', 'سرپل ذهاب', 'سنقر', 'صحنه', 'قصر شیرین', 'کرمانشاه', 'کنگاور', 'گیلان غرب', 'هرسین']
            }
            if (id == 22) {
                arr = ['انتخاب شهر', 'بویراحمد', 'بهمئی', 'دنا', 'کهگیلویه', 'گچساران']
            }
            if (id == 23) {
                arr = ['انتخاب شهر', 'آزادشهر', 'آق‌قلا', 'بندر گز', 'ترکمن', 'رامیان', 'علی‌آباد', 'کردکوی', 'کلاله', 'گرگان', 'گنبد کاووس', 'مراوه‌تپه', 'مینودشت']
            }
            if (id == 24) {
                arr = ['انتخاب شهر', 'آستارا', 'آستانه اشرفیه', 'اَملَش', 'بندر انزلی', 'رشت', 'رضوانشهر', 'رودبار', 'رودسر', 'سیاهکل', 'شَفت', 'صومعه‌سرا', 'طوالش', 'فومَن', 'لاهیجان', 'لنگرود', 'ماسال']
            }
            if (id == 25) {
                arr = ['انتخاب شهر', 'ازنا', 'الیگودرز', 'بروجرد', 'پل‌دختر', 'خرم‌آباد', 'دورود', 'دلفان', 'سلسله', 'کوهدشت']
            }
            if (id == 26) {
                arr = ['انتخاب شهر', 'آمل', 'بابل', 'بابلسر', 'بهشهر', 'تنکابن', 'جویبار', 'چالوس', 'رامسر', 'ساری', 'سوادکوه', 'v', 'گلوگاه', 'محمودآباد', 'نکا', 'نور', 'نوشهر']
            }
            if (id == 27) {
                arr = ['انتخاب شهر', 'آشتیان', 'اراک', 'تفرش', 'خمین', 'دلیجان', 'زرندیه', 'ساوه', 'شازند', 'کمیجان', 'محلات']
            }
            if (id == 28) {
                arr = ['انتخاب شهر', 'ابوموسی', 'بستک', 'بندر عباس', 'بندر لنگه', 'جاسک', 'حاجی‌آباد', 'شهرستان خمیر', 'رودان', 'قشم', 'گاوبندی', 'میناب']
            }
            if (id == 29) {
                arr = ['انتخاب شهر', 'اسدآباد', 'بهار', 'تویسرکان', 'رزن', 'کبودرآهنگ', 'ملایر', 'نهاوند', 'همدان']
            }
            if (id == 30) {
                arr = ['انتخاب شهر', 'ابرکوه', 'اردکان', 'بافق', 'تفت', 'خاتم', 'صدوق', 'طبس', 'مهریز', 'مِیبُد', 'یزد']
            }
            $('.shahr').find('select option').remove();
            $('input[name="ostan"]').val(text);
            var k = 0;
            if (arr.length > 0) {
                for (k = 0; k < arr.length; k++) {
                    $('.shahr').find('select').append($('<option>', {id: k, text: arr[k], value: arr[k]}));
                }//for
            }//if

            // Shahr2();
        }//function ostan


        $('#close_page').click(function () {
            $('#dark').fadeOut(100);
            $('.AddAddressContainer').fadeOut(100);
            $(this).parents('#add_address').fadeOut(100);

        });

        function Shahr(tag) {
            var index = $(tag).find('option:selected').val();
            $('input[name="shahr"]').val(index);
        }

        function Shahr2() {
            var index = $('#shahr').find('option:first-child').val();
            var id = $('#shahr').find('option:first-child').attr('id');
            if (id == 0) {
                $('input[name="shahr"]').val('انتخاب شهر');
            } else {
                $('input[name="shahr"]').val(index);
            }
        }

        function addressSub() {
           var fullname  = $('input[name="fullname"]').val();
            // console.log(fullname );
            var mobile = $('input[name="usermobile"]').val();
            console.log(mobile.length);
            var ostan = $('input[name="ostan"]').val();
            var shahr = $('input[name="shahr"]').val();
            var address = $('textarea[name="address"]').val();
            var post = $('input[name="post"]').val();

            if (
                fullname  == '' || fullname  == ' ' || fullname .length <=1 ||
                mobile == '' || mobile.length < 11 ||
                ostan == 0 ||
                shahr == 0 || shahr == 'انتخاب شهر' ||
                address == '' || address.length < 10 ||
                post == '' || post.length != 10
            ) {
                $('.addaddressBtn').addClass('noSub');
                $('.addaddressBtn').attr('onClick', '');
                if (fullname  == '' || fullname  == ' ' || fullname .length <=1) {
                    $('input[name="fullname"]').addClass('borderRed');
                    // console.log('fullname');
                } else {
                    $('input[name="fullname"]').removeClass('borderRed');
                }//
                if (mobile == '' || mobile.length < 11) {
                    $('input[name="usermobile"]').addClass('borderRed');
                    // console.log('mobile');
                } else {
                    $('input[name="usermobile"]').removeClass('borderRed');
                }//
                if (ostan == 0) {
                    $('select[id="ostanSelect"]').addClass('borderRed');
                } else {
                    $('select[id="ostanSelect"]').removeClass('borderRed');
                }//
                if (shahr == 0 || shahr == 'انتخاب شهر') {
                    $('select[id="shahr"]').addClass('borderRed');
                } else {
                    $('select[id="shahr"]').removeClass('borderRed');
                }//
                if (address == '' || address.length < 10) {
                    $('textarea[name="address"]').addClass('borderRed');
                } else {
                    $('textarea[name="address"]').removeClass('borderRed');
                }//
                if (post == '' || post.length != 10) {
                    $('input[name="post"]').addClass('borderRed');
                } else {
                    $('input[name="post"]').removeClass('borderRed');
                }//
                console.log('n');
            } else {
                $('.AddAddress input').removeClass('borderRed');
                $('.AddAddress textarea').removeClass('borderRed');
                $('.AddAddress select').removeClass('borderRed');
                $('.addaddressBtn').removeClass('noSub');
                $('.addaddressBtn').attr('onClick', 'Addresssubmit()');
                console.log('y');
            }
        }

        function Addresssubmit() {
            $('.AddAddress').submit();
        }

    </script>
    <style>
        #dark {
            width: 100%;
            height: 100%;
            float: right;
            background: rgba(147, 147, 147, 0.46);
            position: fixed;
            top: 0;
            display: none;
            z-index: 10;
        }
    </style>
    <div id="dark">

    </div>
@endsection