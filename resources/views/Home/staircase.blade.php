@extends('Home.master')

@section('content')
    <div class="container">

        <form id="main" action="{{route('orderPay')}}" method="POST">
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

                .steps li.done span.line {
                    background: #67bfb0 url(/img/tick1.png) no-repeat center !important;
                    border: 5px solid #67bfb0 !important;
                }

                .steps li.doing .circle {
                    border: 5px solid #67bfb0 !important;
                }

                .steps .line {
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
                    .steps .line {

                        width: 40px;
                    }
                }

                @media (min-width: 576px) {
                    .steps .line {
                        width: 100px;
                    }
                }

                .steps li.doing .line {
                    background: #67bfb0;
                }

                .steps .step_title {
                    position: absolute;
                    right: -20px;
                    top: 31px;
                    color: #6f6f6f7a;
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

                .addBtn {
                    display: block;
                    height: 40px;
                    line-height: 32px;
                    border-radius: 8px;
                    background: #67bfb0;
                    text-align: center;
                    color: white;
                    border: 1px solid #4d8f84;
                    cursor: pointer;
                    transition: background-color 300ms ease-in;
                }
            </style>
            <div class=" row mt-5 mb-5 pb-sm-5 justify-content-center">
                <div class="col-auto rahgiri fontssm">

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

                        <li class="sendlevel">
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

            <script>
                function orderPriceRefresh(postId) {
                    startLoader();
                    let post_id = postId;
                    let formData = new FormData();
                    formData.append('post_id', post_id);
                    $.ajax({
                        method: 'POST',
                        url: '/orderPriceRefresh',
                        data: formData,
                        contentType: false,
                        processData: false,
                    }).done(function (msg) {
                        $('.orderPrice').text(msg);
                        // console.log(msg);
                        endLoader();

                    });
                }
            </script>
            <section class="level1" data-section="1">
                <div class="row mt-5 mb-3">
                    <div class="col-7 col-md-9 font-m65-p120 pr-4 pr-md-5" id="sabade_kharid_title">
                        انتخاب آدرس تحویل سفارش
                    </div>
                    <div class="col-5 col-md-3">

                    <span class="addBtn addaddress font-m65-p120">
                          افزودن آدرس جدید
                    </span>
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
                </div>

                <div class=" row mt-sm-4 justify-content-between">

                    <style>
                        #sabade_kharid_title {
                            width: 100%;
                            color: #6f6f6f;
                            float: right;
                            line-height: 35px;
                        }

                        #sabad {
                            width: 100%;
                            float: right;
                            /*border: 1px solid #e9e9e9;*/
                            color: #6f6f6f;
                        }

                        #sabad > table {
                            background: white;
                            width: 96%;
                            margin: auto;
                            border: 1px solid #e9e9e9;
                            margin-bottom: 10px;
                        }

                        /*#sabad > table td {*/
                        /*height: 40px;*/
                        /*}*/

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

                        .select_but.activeAddress {
                            border: 3px solid #67bfb0 !important;
                            background: white url(/img/check-mark1.png) no-repeat center;
                        }

                        .select_but.noneAddress {
                            border: 3px solid #ff6f83 !important;
                        }

                        /*#send_type .select_but.activeAddress {*/
                        /*border: 3px solid #67bfb0 !important;*/
                        /*background: white url(/img/check-mark1.png) no-repeat center;*/
                        /*}*/

                    </style>
                    <div class=" col-12 col-sm-9 address font-m60-p95" id="sabad">


                        @if(sizeof($addresses)>0)
                            @foreach($addresses as $address)

                                <table cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td rowspan="3" width="50px">
                                            <span data-address="{{$address->id}}" class="select_but "></span>
                                        </td>
                                        <td colspan="2">
                                            <span class="title_add">
                                                گیرنده:
                                            </span>
                                            <span class="value_add">
                                            {{ $address->name }}
                                            </span>
                                        </td>
                                        <td class="editendelete" rowspan="3" width="50px">
                                            <table cellpadding="0" cellspacing="0">
                                                <tr>
                                                    <td>
                                                        <span class="delete_add"></span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
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

                            @endforeach
                        @else
                            <div class="row mt-4 fontsm  justify-content-center">
                                <div class="col-11 jumbotron">
                                    <div class="row justify-content-center text-center">
                                        تا کنون هیچ آدرس ثبت شده ای ندارید
                                        <br>
                                        یک آدرس جدید اضافه  کنید
                                    </div>
                                </div>
                            </div>
                            @endif
                        <input type="hidden" name="address_id" value="">


                    </div>


                    <style>
                        /*.addBtn {*/
                        /*display: block;*/
                        /*border-radius: 8px;*/
                        /*!*width: 150px;*/
                        /*height: 42px;*!*/
                        /*background: #67bfb0;*/
                        /*text-align: center;*/
                        /*color: white;*/
                        /*border: 1px solid #4d8f84;*/
                        /*font-size: 12.5pt;*/
                        /*cursor: pointer;*/
                        /*transition: background-color 300ms ease-in;*/
                        /*}*/

                        /*.addBtn:hover {*/
                        /*background-color: #4d8f84;*/
                        /*}*/

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
                    <div class="col-12 col-sm-3 h-auto d-none d-sm-inline-block goto_next">

                        <div class="row bg-white border border-bottom-0 ">
                            <div class="col-12 text-center">
                                <p style="color: #6f6f6f;margin-top: 20px" class="fontlg">
                                    هزینه ی سفارش
                                </p>
                                <div style="color:#e54a86;margin-bottom: 20px">
                                    <p class="orderPrice mb-0">
                                        {{$baskets['priceTotal']}}
                                    </p>
                                    هزار تومان
                                </div>
                            </div>
                        </div>
                        <div class="row bg-white border border-top-0">
                            <div class="col-12 text-center">
                    <span class="addBtn toLevel2 noSub mb-3">
                    ادامه
                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <style>
                    #send_type_title {
                        width: 100%;
                        float: right;
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

                    }
                </style>
                <div class=" row mt-sm-4 font-m65-p120">
                    <div class="col-sm-12 pr-4 pr-md-5" id="send_type_title">

                        شیوه ارسال سفارش

                    </div>
                </div>

                @foreach($sends as $send)
                    <div class=" row mt-sm-4 justify-content-end">
                        <div class="col-sm-12 font-m60-p95 pl-0" id="send_type">
                            <table cellspacing="0" cellpadding="0" class="ml-md-0">
                                <tr>
                                    <td width="50px">
                                        <span data-post="{{$send->id}}" class="select_but"></span>
                                    </td>
                                    <td>
                                        <i style="background: url(/storage/{{$send->img}}) no-repeat center;"></i>
                                        <p>
                                            {{$send->title}}
                                        </p>
                                        <p>
                                            {{$send->body}}
                                        </p>
                                    </td>
                                    <td width="20%" style="border-right: 1px solid #e9e9e9">
                                            <span>
                                                هزینه ارسال
                                            </span>
                                        <span>
                                                {{$send->price/1000}}
                                            هزار تومان
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                @endforeach

                <input type="hidden" name="post_id" value="">
                {{--<input type="hidden" name="order_id" value="{{$NewOrder->id}}">--}}

                <div class=" row mt-sm-4 ">
                    <style>
                        /*.addBtn {*/
                        /*display: block;*/
                        /*border-radius: 8px;*/
                        /*!*width: 150px;*/
                        /*height: 42px;*!*/
                        /*background: #67bfb0;*/
                        /*text-align: center;*/
                        /*color: white;*/
                        /*border: 1px solid #4d8f84;*/
                        /*font-size: 12.5pt;*/
                        /*cursor: pointer;*/
                        /*transition: background-color 300ms ease-in;*/
                        /*}*/

                        /*.addBtn:hover {*/
                        /*background-color: #4d8f84;*/
                        /*}*/

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
                    <div class="col-12 d-sm-none goto_next">

                        <div class="row bg-white border border-bottom-0 ">
                            <div class="col-12 text-center">
                                <p style="color: #6f6f6f;margin-top: 20px" class="fontlg">
                                    مبلغ قابل پرداخت
                                </p>
                                <div style="color:#e54a86;margin-bottom: 15px">
                                    <p class="orderPrice mb-0">
                                        {{$baskets['priceTotal']}}
                                    </p>
                                    هزار تومان
                                </div>
                            </div>
                        </div>
                        <div class="row bg-white border border-top-0 pb-3">
                            <div class="col-12 text-center">
                                <span class="addBtn toLevel2 noSub">
                                ادامه
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <script>
                $('.address .select_but').click(function () {
                    $('.address .select_but').removeClass('activeAddress');
                    $('.address .select_but').removeClass('noneAddress');
                    tag = $(this);
                    tag.addClass('activeAddress');
                    address_id = tag.attr('data-address');
                    $('input[name=address_id]').val(address_id);


                    post_id = $('input[name=post_id]').val();
                    if (post_id != '') {
                        $('.toLevel2').removeClass('noSub');
                        $('.toLevel2').attr('onClick', 'toLevel2()');
                    }


                });
                $('#send_type .select_but').click(function () {
                    $('input[name="discount"]').val('');
                    $('.discountRes').html('');

                    $('#send_type .select_but').removeClass('activeAddress');
                    $('#send_type .select_but').removeClass('noneAddress');
                    tag = $(this);
                    tag.addClass('activeAddress');
                    post_id = tag.attr('data-post');

                    $('input[name=post_id]').val(post_id);
                    orderPriceRefresh(post_id);
                    address_id = $('input[name=address_id]').val();
                    if (address_id != '') {
                        $('.toLevel2').removeClass('noSub');
                        $('.toLevel2').attr('onClick', 'toLevel2()');
                    }
                });

                function toLevel2() {
                    var address_id = $('input[name=address_id]').val();
                    var post_id = $('input[name=post_id]').val();
                    if (address_id == '') {
                        $('.address table .select_but').addClass('noneAddress');
                    }
                    if (post_id == '') {
                        $('#send_type table .select_but').addClass('noneAddress');
                    }
                    if (address_id == '' || post_id == '') {
                        console.log('note selected');
                    } else {
                        $('section.level1').hide();
                        $('.address table .select_but').removeClass('noneAddress');
                        $('#send_type table .select_but').removeClass('noneAddress');
                        $('.sendlevel').addClass('doing')
                        $('section.level2').show();
                    }
                }

                $('.toLevel2.noSub').click(function () {
                    $('.address table .select_but').addClass('noneAddress');
                    $('#send_type table .select_but').addClass('noneAddress');

                });

            </script>

            <section class="level2" data-section="2">

                <div class="row mt-5 mb-2 font-m65-p120">
                    <div class="col-8 col-md-9" id="sabade_kharid_title">
                        انتخاب شیوه پرداخت

                    </div>
                    <div class="col-4 col-md-3 font-m65-p120">
                     <span class="addBtn" onclick="toLevel1()">
                    مرحله ی قبل
                </span>

                    </div>
                </div>

                <div class=" row mt-sm-4 justify-content-between">

                    <style>
                        #sabade_kharid_title {
                            width: 100%;
                            color: #6f6f6f;
                            float: right;
                        }

                        #sabad {
                            width: 100%;
                            float: right;
                            /*border: 1px solid #e9e9e9;*/
                            color: #6f6f6f;
                        }

                        #sabad > table {
                            background: white;
                            width: 97%;
                            float: left;

                            border: 1px solid #e9e9e9;
                            margin-bottom: 10px;
                        }

                        /*#sabad > table td {*/
                        /*height: 70px;*/
                        /*}*/

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

                        #sabad i {
                            display: block;
                            width: 32px;
                            height: 32px;
                            float: right;

                        }

                    </style>
                    <div class=" col-12 col-sm-9 pay" id="sabad">


                        @foreach($pays as $pay)
                            <table cellspacing="0" cellpadding="0" style="min-height: 70px;">
                                <tr>
                                    <td width="50px">
                                        <span data-pay="{{$pay->id}}" class="select_but"></span>
                                    </td>
                                    <td width="60px">
                                        <i style="background: url(/img/credit-card.png) no-repeat center;"></i>
                                    </td>
                                    <td class="editendelete">
                                        {{$pay->title}}
                                    </td>
                                </tr>

                            </table>
                        @endforeach

                        <input type="hidden" name="pay_id" value="">

                        <style>
                            .off_coding {
                                display: block;
                                width: 100%;
                                float: right;
                                background: white;
                                border: 1px solid #e9e9e9;
                                /*padding-bottom: 30px;*/
                                /*margin-top: 50px;*/
                            }

                            .off_coding p {
                                color: #6f6f6f;
                                /*margin-right: 30px;*/
                                margin-bottom: 0;
                            }

                            .off_coding span {
                                /*margin-right: 30px;*/
                                color: #4b4b4b;
                            }

                            .off_coding input {
                                /*width: 220px;*/
                                height: 35px;
                                border: 1px solid #e9e9e9;
                                border-radius: 4px;
                                /*margin-right: 25px;*/
                                /*padding-right: 8px;*/
                                color: #6f6f6f;
                            }

                            .off_coding .addBtn {
                                /*width: 150px;*/

                                height: 36px;
                                line-height: 36px;
                                color: white;
                                float: left;
                                /*margin-right: 0;*/
                                margin-right: 15px;

                            }
                        </style>
                        <div class="off_coding p-3 col-12">
                            <p class="row pr-3 pl-3 fontmd">
                                استفاده از کد تخفیف
                            </p>
                            <span class="row pr-3 pl-3 fontssm">
                     با ثبت کد تخفیف، مبلغ کد تخفیف از “مبلغ قابل پرداخت” کسر می‌شود.این مبلغ شامل هزینه ی ارسال نمیباشد.
                            </span>
                            {{csrf_field()}}
                            <div class="row pr-3 pl-3">
                                <input name="discount" class="form-control mt-3"
                                       style="display: inline-block;width:55%">
                                <span class="addBtn discountBtn pr-3 pl-3 mt-3 fontsm">
                                  ثبت کد
                               </span>
                            </div>
                            <div class="row discountRes pr-3 pl-3 mt-4">

                            </div>
                        </div>


                    </div>


                    <style>

                        .goto_next {
                            /*width: 300px;*/
                            float: left;
                            /*background: white;*/
                            /*border: 1px solid #e9e9e9;*/
                        }

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

                        .addBtn.noSub {
                            background: #7ee5db42 !important;
                            cursor: not-allowed;
                        }

                    </style>
                    <div class="col-12 col-sm-3 h-auto d-none d-sm-inline-block goto_next">

                        <div class="row bg-white border border-bottom-0 ">
                            <div class="col-12 text-center">
                                <p style="color: #6f6f6f;margin-top: 20px" class="fontlg">
                                    مبلغ قابل پرداخت
                                </p>
                                <div style="color:#e54a86;margin-bottom: 20px" class="fontmd">
                                    <p class="orderPrice mb-0">
                                        {{$baskets['priceTotal']}}
                                    </p>
                                    هزار تومان
                                </div>
                            </div>
                        </div>
                        <div class="row bg-white border border-top-0">
                            <div class="col-12 text-center">
                    <span class="addBtn payBtn noSub mb-3">
                    پرداخت نهایی
                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=" row mt-sm-4 ">
                    <style>
                        /*.addBtn {*/
                        /*display: block;*/
                        /*border-radius: 8px;*/
                        /*!*width: 150px;*/
                        /*height: 42px;*!*/
                        /*background: #67bfb0;*/
                        /*text-align: center;*/
                        /*color: white;*/
                        /*border: 1px solid #4d8f84;*/
                        /*font-size: 12.5pt;*/
                        /*cursor: pointer;*/
                        /*transition: background-color 300ms ease-in;*/
                        /*}*/

                        /*.addBtn:hover {*/
                        /*background-color: #4d8f84;*/
                        /*}*/

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
                    <div class="col-12 d-sm-none goto_next mt-3">

                        <div class="row bg-white border border-bottom-0 ">
                            <div class="col-12 text-center">
                                <p style="color: #6f6f6f;margin-top: 20px" class="fontlg">
                                    مبلغ قابل پرداخت
                                </p>

                                <div style="color:#e54a86;margin-bottom: 20px" class="fontsm">
                                    <p class="orderPrice mb-0">
                                        {{$baskets['priceTotal']}}
                                    </p>
                                    هزار تومان
                                </div>

                            </div>
                        </div>
                        <div class="row bg-white border border-top-0">
                            <div class="col-12 text-center">
                    <span class="addBtn payBtn noSub mb-3" onclick="submit()">
                    پرداخت نهایی
                </span>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <script>

                $('.pay .select_but').click(function () {
                    $('.pay .select_but').removeClass('activeAddress');
                    $('.pay .select_but').removeClass('noneAddress');
                    $('.payBtn').removeClass('noSub');
                    $('.payBtn').attr('onClick', 'submit()');
                    tag = $(this);
                    tag.addClass('activeAddress');
                    pay_id = tag.attr('data-pay');
                    $('input[name=pay_id]').val(pay_id);
                });

                function toLevel1() {
                    $('section.level2').hide();
                    $('.sendlevel').removeClass('doing')
                    $('section.level1').show();
                }

                $('.payBtn.noSub').click(function () {
                    pay_id = $('input[name=pay_id]').val();
                    if (pay_id == '') {
                        $('.pay table .select_but').addClass('noneAddress');
                    }
                });

                $('.discountBtn').click(function () {

                    startLoader();
                    let discount = $('input[name="discount"]').val();
                    let post_id = $('input[name=post_id]').val();
                    let _token = $(this).parents('.off_coding').find('input[name="_token"]').val();
                    let formData = new FormData();
                    formData.append('discount', discount);
                    formData.append('post_id', post_id);

                    $.ajax({
                        method: 'POST',
                        url: '/discount',
                        data: formData,
                        contentType: false,
                        processData: false,
                        headers: {'X-CSRF-TOKEN': _token}
                    }).done(function (msg) {
                        // $('.orderPrice').text(msg);
                        // console.log(msg);
                        if (msg[1] == 1) {
                            $('input[name="discount"]').val('');
                            swal({
                                text: "{!! 'کد تخفیف در سیستم ثبت نشده است ' !!}",
                                title: "{!! '' !!}",
                                timer: "{!! '5000' !!}",
                                icon: "{!! '/img/error1.png' !!}",
                                buttons: "{!! 'باشه' !!}",
                                // more options
                            });
                        } else if (msg[1] == 2) {
                            $('input[name="discount"]').val('');
                            swal({
                                text: "{!! 'شما از این کد تخفیف قبلا استفاده کرده اید ' !!}",
                                title: "{!! '' !!}",
                                timer: "{!! '5000' !!}",
                                icon: "{!! '/img/error1.png' !!}",
                                buttons: "{!! 'باشه' !!}",
                                // more options
                            });
                        } else if (msg[1] == 3) {
                            $('input[name="discount"]').val('');
                            swal({
                                text: "{!! 'زمان شروع کد تخفیف فرا نرسیده است ' !!}",
                                title: "{!! '' !!}",
                                timer: "{!! '5000' !!}",
                                icon: "{!! '/img/error1.png' !!}",
                                buttons: "{!! 'باشه' !!}",
                                // more options
                            });
                        } else if (msg[1] == 4) {
                            $('input[name="discount"]').val('');
                            swal({
                                text: "{!! 'مدت اعتبار کد تخفیف پایان یافته است ' !!}",
                                title: "{!! '' !!}",
                                timer: "{!! '5000' !!}",
                                icon: "{!! '/img/error1.png' !!}",
                                buttons: "{!! 'باشه' !!}",
                                // more options
                            });
                        } else if (msg[1] == 5) {
                            // $('input[name="discount"]').val('');
                            $('.discountRes').html('<span class="p-3 " style="background: rgba(255,28,127,0.05);color: #ff2e72;border-radius: 10px">' + msg[2] + '</span>');
                            $('.orderPrice').text(msg[0]);
                            swal({
                                text: "{!! 'به مقدار کد تخفیف از هزینه ی سفارش کم شد.این اولین تحربه ی کد تخفیف شما بود ' !!}",
                                title: "{!! '' !!}",
                                timer: "{!! '7000' !!}",
                                icon: "{!! '/img/success2.png' !!}",
                                buttons: "{!! 'باشه' !!}",
                                // more options
                            });
                        } else if (msg[1] == 6) {
                            // $('input[name="discount"]').val('');
                            $('.discountRes').html('<span class="p-3 " style="background: rgba(255,28,127,0.05);color: #ff2e72;border-radius: 10px">' + msg[2] + '</span>');
                            $('.orderPrice').text(msg[0]);
                            swal({
                                text: "{!! 'به مقدار کد تخفیف از هزینه ی سفارش کم شد ' !!}",
                                title: "{!! '' !!}",
                                timer: "{!! '7000' !!}",
                                icon: "{!! '/img/success2.png' !!}",
                                buttons: "{!! 'باشه' !!}",
                                // more options
                            });
                        }
                        endLoader();

                    });

                });


            </script>


        </form>
    </div>
@endsection


@section('js')
    <script>
        $('section.level2').hide();

        function submit() {
            $('#main').submit();
        }
    </script>

@endsection

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
        <form class="AddAddress" action="{{route('addAddress',['callback'=>'orderShow'])}}" method="post">
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