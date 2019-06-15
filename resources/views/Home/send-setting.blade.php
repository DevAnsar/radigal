@extends('Home.master')

@section('content')
    <script>
        function orderPriceRefresh(orderId,postId) {
            $('#loader').html('<div class="loader" style="position: absolute;z-index:100;top:0;width: 100%;height: 100%;background: rgba(139,139,177,0.53)">'+'<img style="margin: 20% auto;display: inherit;" src="/img/loader/loader.gif" />' + '</div>');
            let post_id = postId;
            let order_id = orderId;
            let formData = new FormData();
            formData.append('post_id', post_id);
            formData.append('order_id', order_id);
            $.ajax({
                method: 'POST',
                url: '/orderPriceRefresh',
                data: formData,
                contentType: false,
                processData: false,
            }).done(function (msg) {
                $('.orderPrice').text(msg);
                // console.log(msg);
                $('#loader').html('');

            });
        }


    </script>
    <div class="container">
        <form action="{{route('orderPay')}}" method="post">
            {{method_field('POST')}}
            {{csrf_field()}}
        <style>
            /*.rahgiri {*/
            /*width: 91.55%;*/
            /*padding: 50px;*/
            /*float: right;*/
            /*font-family: IranSans;*/
            /*}*/

            /*.rahgiri > div {*/
            /*margin: auto;*/
            /*}*/

            /*.dashed {*/
            /*width: 65px;*/
            /*height: 2px;*/
            /*float: right;*/
            /*}*/

            /*.dashed span {*/
            /*display: block;*/
            /*width: 10px;*/
            /*height: 2px;*/
            /*margin-left: 5px;*/
            /*float: right;*/
            /*background: #67bfb0;*/
            /*}*/

            /*.dashed span:last-child {*/
            /*margin-left: 10px;*/
            /*}*/

            .steps {
                float: right;
                /*width: 345px;*/
                padding: 0;
            }

            .steps li {
                /*width: 150px;*/

                float: right;
                position: relative;
            }

            .steps li .circle {
                display: inline-block;
                width: 25px;
                height: 25px;
                border-radius: 100%;
                border: 5px solid #e9e9e9;
                position: relative;
                top: 0;
            }

            .steps li.done .circle {
                background: #67bfb0 url(/img/tick1.png) no-repeat center !important;
                border: 5px solid #67bfb0 !important;
            }

            .steps li.doing .circle {
                border: 5px solid #67bfb0 !important;
            }

            .steps .line{
                display: block;
                float: left;
                margin: 0 15px 0 8px;

                height: 2px;
                background: #e9e9e9;
                position: relative;
                top: -15px;
                width: 50px;
            }
            @media (max-width: 575px) {
                .steps .line{

                    width: 40px;
                }
            }

            @media (min-width: 576px) {
                .steps .line{
                    width: 100px;
                }
            }

            .steps li.done .line {
                background: #67bfb0;
            }

            .steps .step_title {
                position: absolute;
                right: -23px;
                top: 31px;
                font-size: 10.5pt;
                color: #6f6f6f;
                width: 100px;
            }

            .steps li.done .step_title {
                color: #67bfb0;
            }

            .steps li.doing .step_title {
                color: #67bfb0;
            }

            .editendelete > table {
                width: 100%;
                height: 160px;
            }

            .editendelete table tr {
                width: 100%;
                height: 50%;
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

            .edit_add, .delete_add {
                display: block;
                width: 32px;
                height: 32px;
                margin: auto;
                cursor: pointer;
            }

            .edit_add {
                background: url(/img/edit.png) no-repeat center;
            }

            .delete_add {
                background: url(/img/x-button.png) no-repeat center;
            }

            .value_add {
                margin-right: 5px;
            }

            .right_side {
                width: 75%;
                float: right;
            }
            .addBtn{
                /* width: 140px; */
                height: 40px;
                /*float: left;*/
                line-height: 40px;
                margin-bottom: 15px;
                /* margin-left: 325px; */
                font-size: 14pt;
            }
        </style>
        <div class=" row mt-5 mb-5 pb-sm-5 justify-content-center">
            <div class="col-auto rahgiri">

                <!--<div class="dashed" style="margin-right: 360px">-->
                <!--<span></span>-->
                <!--<span></span>-->
                <!--<span></span>-->
                <!--<span></span>-->
                <!--</div>-->
                <ul class="steps">
                    <li class="doing mt-4">

                        <span class="line"></span>

                    </li>

                    <li class="doing">
                        <span class="circle"></span>
                        <span class="line mt-4"></span>
                        <span class="step_title">
                                                     اطلاعات ارسال
                                                </span>
                    </li>
                    <li>
                        <span class="circle"></span>
                        <span class="line mt-4"></span>
                        <span class="step_title" style="right: 0">
                                                     پرداخت
                                                </span>
                    </li>

                    <li>
                        <span class="circle"></span>
                        <span class="line mt-4"></span>
                        <span class="step_title">
                                                     اتمام خرید و ارسال
                                                </span>

                    </li>

                </ul>
                <!--<div class="dashed">-->
                <!--<span></span>-->
                <!--<span></span>-->
                <!--<span></span>-->
                <!--<span></span>-->
                <!--</div>-->


            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-12" id="sabade_kharid_title">
                انتخاب آدرس تحویل سفارش

                <span class="addBtn pr-3 pl-3" style="float: left">
            افزودن آدرس جدید
        </span>


            </div>
            <script>
                $('#sabade_kharid_title .addBtn').click(function () {
                    $('#dark').fadeIn(100);
                    $('#add_address').fadeIn(100);
                });
            </script>
        </div>

        <div class=" row mt-sm-4 justify-content-between">

            <style>
                #sabade_kharid_title {
                    width: 100%;
                    color: #6f6f6f;
                    font-size: 16pt;
                    float: right;
                    font-family: IranSans;
                }

                #sabad {
                    width: 100%;
                    float: right;
                    /*border: 1px solid #e9e9e9;*/
                    font-family: IranSans;
                    color: #6f6f6f;
                }

                #sabad > table {
                    background: white;
                    width: 96%;
                    margin: auto;
                    border: 1px solid #e9e9e9;
                    margin-bottom: 10px;
                }

                #sabad > table td {
                    height: 40px;
                }

                .select_but {
                    display: block;
                    width: 50px;
                    height: 50px;
                    margin: auto;
                    position: relative;
                    right: -25px;
                    border: 3px solid #dadada;
                    border-radius: 50%;
                    background: white;
                    cursor: pointer;
                }

                #sabad .select_but.activeAddress {
                    border: 3px solid #67bfb0 !important;
                    background: white url(/img/check-mark1.png) no-repeat center;
                }

                #send_type .select_but.activeAddress {
                    border: 3px solid #67bfb0 !important;
                    background: white url(/img/check-mark1.png) no-repeat center;
                }

            </style>
            <div class=" col-12 col-sm-9" id="sabad">


                @if(sizeof($addresses)>0)
                    @foreach($addresses as $address)


                <table cellspacing="0" cellpadding="0">
                    <tr>
                                <td rowspan="3" width="50px">
                                    <span data-address="{{$address->id}}" class="select_but <?php if ($NewOrder->address !='null'){
                                        if ($NewOrder->address['id'] == $address->id){
                                            echo 'activeAddress';
                                        }
                                    } ?>"></span>
                                </td>
                                <td colspan="2">
                            <span class="title_add" style="font-size: 14pt;">
                                گیرنده:
                            </span>
                                    <span class="value_add" style="font-size: 14pt;">
                            {{ $address->name }}
                            </span>
                                </td>
                                <td class="editendelete" rowspan="3" width="50px">
                                    <table cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td>
                                                <span class="edit_add"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="delete_add"></span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                    </tr>
                    <tr>
                                <td style="width: 220px">
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
                                <td colspan="2" style="height: 60px;vertical-align: top">

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

                    @endforeach
                @endif
                    <input type="hidden" name="address_id" value="<?php
                    if($NewOrder->address!='null'){
                        echo $NewOrder->address['id'];
                    }
                    ?>">



            </div>


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
                    /*width: 300px;*/
                    float: left;
                    /*background: white;*/
                    /*border: 1px solid #e9e9e9;*/
                    font-family: IranSans;
                }

                /*.row_s {*/
                /*width: 100%;*/
                /*float: right;*/
                /*font-size: 16pt;*/

                /*}*/

                .row_s p {
                    text-align: center;
                    margin: 0;
                }

                .row_s .addBtn {
                    /* width: 245px; */
                    height: 48px;
                    /* margin: auto; */
                    line-height: 48px;
                    margin-bottom: 20px;
                    /* font-size: 16pt; */
                    border-radius: 6px;
                }

            </style>
            <div class="col-12 col-sm-2 h-auto d-none d-sm-inline-block goto_next" >

                <div class="row bg-white border border-bottom-0 ">
                    <div class="col-12 text-center">
                        <p style="color: #6f6f6f;margin-top: 20px">
                            مبلغ قابل پرداخت
                        </p>
                        <div style="color:#e54a86;margin-bottom: 20px">
                            <p class="orderPrice">
                            {{$NewOrder->price}}
                            </p>
                            تومان
                        </div>
                    </div>
                </div>
                <div class="row bg-white border border-top-0">
                    <div class="col-12 text-center">
                    <span class="addBtn" onclick="submit()">
                    تایید و ادامه
                </span>
                    </div>
                </div>

            </div>
        </div>

        <style>
            #send_type_title {
                width: 100%;
                float: right;
                margin-top: 50px;
                margin-bottom: 10px;
                font-family: IranSans;
                font-size: 16pt;
                color: #6f6f6f;
            }
            #send_type {
                width: 100%;
                float: right;
                font-family: IranSans;
                color: #6f6f6f;
            }

            #send_type table {
                width: 96%;
                margin: auto;
                background: white;
                border: 1px solid #e9e9e9;
                margin-bottom: 10px;
            }

            #send_type table tr {
                width: 100%;
                height: 100px;
            }

            #send_type span {
                display: block;
                text-align: center;
            }



            #send_type i {
                display: block;
                float: right;
                width: 64px;
                margin-left: 15px;
                height: 64px;
                background: url(/img/mailbox.png) no-repeat center;
            }
        </style>
        <div class=" row mt-sm-4 ">
            <div class="col-sm-12" id="send_type_title">

                شیوه ارسال سفارش

            </div>
        </div>

        @foreach($sends as $send)
        <div class=" row mt-sm-4 ">
            <div class="col-sm-12" id="send_type">
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="50px">
                            <span data-post="{{$send->id}}" data-order="{{$NewOrder->id}}" class="select_but <?php
                            if($NewOrder->send!='null'){
                            if( $NewOrder->send['id'] == $send->id) {
                                echo 'activeAddress';
                            }
                            }
                            ?>"></span>
                        </td>
                        <td>
                            <i></i>
                            <p>
                                {{$send->title}}
                            </p>
                            <p>
                                {{$send->body}}
                            </p>
                        </td>
                        <td width="150px" style="border-right: 1px solid #e9e9e9">
                    <span>
                        هزینه ارسال
                    </span>
                            <span>
                        {{$send->price}}
                        هزار تومان
                    </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
            @endforeach

            <input type="hidden" name="post_id" value="<?php if ($NewOrder->post!='null'){
                echo $NewOrder->post['price'];
            } ?>">
            <input type="hidden" name="order_id" value="{{$NewOrder->id}}">

        <div class=" row mt-sm-4 ">
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

                #goto_next {
                    /*width: 300px;*/
                    float: left;
                    /*background: white;*/
                    /*border: 1px solid #e9e9e9;*/
                    font-family: IranSans;
                }

                /*.row_s {*/
                /*width: 100%;*/
                /*float: right;*/
                /*font-size: 16pt;*/

                /*}*/

                .row_s p {
                    text-align: center;
                    margin: 0;
                }

                .row_s .addBtn {
                    /* width: 245px; */
                    height: 48px;
                    /* margin: auto; */
                    line-height: 48px;
                    margin-bottom: 20px;
                    /* font-size: 16pt; */
                    border-radius: 6px;
                }

            </style>
            <div class="col-12 d-sm-none goto_next" >

                <div class="row bg-white border border-bottom-0 ">
                    <div class="col-12 text-center">
                        <p style="color: #6f6f6f;margin-top: 20px">
                            مبلغ قابل پرداخت
                        </p>
                        <div style="color:#e54a86;margin-bottom: 20px">
                            <p class="orderPrice">
                            {{$NewOrder->price}}
                            </p>
                            تومان
                        </div>
                    </div>
                </div>
                <div class="row bg-white border border-top-0">
                    <div class="col-12 text-center">
                    <span class="addBtn" onclick="submit()">
                    تایید و ادامه
                </span>
                    </div>
                </div>

            </div>
        </div>

        </form>
    </div>

@endsection


@section('js')
    <script>
        $('#sabad .select_but').click(function () {
            $('#sabad .select_but').removeClass('activeAddress');
            tag=$(this);
            tag.addClass('activeAddress');
            address_id=tag.attr('data-address');
            $('input[name=address_id]').val(address_id);
        });
        $('#send_type .select_but').click(function () {
            $('#send_type .select_but').removeClass('activeAddress');
            tag=$(this);
            tag.addClass('activeAddress');
            post_id=tag.attr('data-post');
            order_id=tag.attr('data-order');
            $('input[name=post_id]').val(post_id);
            orderPriceRefresh(order_id,post_id);
        });
        function submit() {
            $('form').submit();
        }

        // window.onload = function() {
        //     if(!window.location.hash) {
        //         window.location = window.location + '#loaded';
        //         window.location.reload();
        //     }
        // }

    </script>
@endsection