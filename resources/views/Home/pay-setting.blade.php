@extends('Home.master')

@section('content')
    <div class="container">


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
                background: #67bfb0 url(/img/tick1.png) no-repeat -3px -6px !important;
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

            .addBtn {
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
                    <li class="done mt-4">

                        <span class="line"></span>

                    </li>

                    <li class="done">
                        <span class="circle"></span>
                        <span class="line mt-4"></span>
                        <span class="step_title">
                                                     اطلاعات ارسال
                                                </span>
                    </li>
                    <li class="done">
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
                انتخاب شیوه پرداخت

            </div>
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
                    width: 97%;
                    float: left;

                    border: 1px solid #e9e9e9;
                    margin-bottom: 10px;
                }

                #sabad > table td {
                    height: 70px;
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

                #sabad i {
                    display: block;
                    width: 32px;
                    height: 32px;
                    float: right;

                }

            </style>
            <div class=" col-12 col-sm-9" id="sabad">


                @foreach($pays as $pay)
                <table cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="50px">
                            <span data-pay="{{$pay->id}}" class="select_but @if($order->pay!='null') @if( $order->pay['id'] == $pay->id){{'activeAddress'}}@endif @endif"></span>
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


                    <form  action="{{route('orderPayment')}}" method="POST">
                        {{method_field('POST')}}
                        {{csrf_field()}}

                        <input type="hidden" name="pay_id" value="@if($order->pay!='null')
                        {{$order->pay['id']}}
                        @endif">
                        <input type="hidden" name="order_id" value="{{$order->id}}">


                    </form>

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
                        font-size: 16pt;
                        font-family: IranSans;
                        color: #6f6f6f;
                        /*margin-right: 30px;*/
                        margin-bottom: 0;
                    }

                    .off_coding span {
                        font-family: IranSans;
                        font-size: 12pt;
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
                        font-size: 12.5pt;
                        float: left;
                        /*margin-right: 0;*/
                        margin-left: 15px;

                    }
                </style>
                <div class="off_coding p-3">
                    <p>
                        استفاده از کد تخفیف
                    </p>
                    <span>
                     با ثبت کد تخفیف، مبلغ کد تخفیف از “مبلغ قابل پرداخت” کسر می‌شود.این مبلغ شامل هزینه ی ارسال نمیباشد.
                   </span>
                    <input class="form-control " style="display: inline-block;width: auto">
                    <span class="addBtn pr-3 pl-3">
                ثبت کد
            </span>
                </div>


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
            <div class="col-12 col-sm-3 h-auto d-none d-sm-inline-block goto_next">

                <div class="row bg-white border border-bottom-0 ">
                    <div class="col-12 text-center">
                        <p style="color: #6f6f6f;margin-top: 20px">
                            مبلغ قابل پرداخت
                        </p>
                        <div style="color:#e54a86;margin-bottom: 20px">
                            <p class="order_price">
                                {{$order->price+$send->price}}
                            </p>
                            تومان
                        </div>
                    </div>
                </div>
                <div class="row bg-white border border-top-0">
                    <div class="col-12 text-center">
                    <span class="addBtn" onclick="submit()">
                    پرداخت
                </span>
                    </div>
                </div>

            </div>
        </div>

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
            <div class="col-12 d-sm-none goto_next mt-3">

                <div class="row bg-white border border-bottom-0 ">
                    <div class="col-12 text-center">
                        <p style="color: #6f6f6f;margin-top: 20px">
                            مبلغ قابل پرداخت
                        </p>

                        <div style="color:#e54a86;margin-bottom: 20px">
                            <p class="order_price">
                                {{$order->price+$send->price}}
                            </p>
                            تومان
                        </div>

                    </div>
                </div>
                <div class="row bg-white border border-top-0">
                    <div class="col-12 text-center">
                    <span class="addBtn" onclick="submit()">
                    پرداخت
                </span>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection


@section('js')
    <script>

        $('#sabad .select_but').click(function () {
            $('#sabad .select_but').removeClass('activeAddress');
            tag=$(this);
            tag.addClass('activeAddress');
            pay_id=tag.attr('data-pay');
            $('input[name=pay_id]').val(pay_id);
        });

        function submit() {
            $('form').submit();
        }
    </script>
@endsection