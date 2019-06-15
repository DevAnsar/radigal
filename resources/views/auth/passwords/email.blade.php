{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Reset Password') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form method="POST" action="{{ route('password.email') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Send Password Reset Link') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--bootstrap 4 stylesheet-->
    <link rel="stylesheet" href="../assets/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="/css/home.css">
    <!--bootstrap 4 javascript-->
    <script src="../assets/js/jquery-3.3.1.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/custom-js.js"></script>
    <script src="/js/home.js"></script>
</head>

<body style="background: #f5f5f5;margin: 0;">

<style>


    div, a, p, span, ul, li {
        text-align: right;
        direction: rtl;
    }

    a {
        text-decoration: unset;
    }


    #reg_win {
        /*width: 385px;*/
        /*height: 487px;*/
        /*margin: auto;*/
        /*margin-top: 80px;*/
        border: 1px solid #dcdcdc;
        background: white;
        box-shadow: 2px 2px 5px #cbcbcb;
    }

    #reg_win:after {
        content: '';
        clear: both;
        display: block;
    }

    #reg_win .title_div {
        width: 100%;
        height: 56px;
        float: right;
    }

    #reg_win .title {
        margin: 0;
        font-size: 16pt;
        color: #595959;
        padding-right: 35px;
        line-height: 56px;
        border-bottom: 1px solid #e2e2e2;
    }

    .emialOrTel, #emialOrTel {
        width: 100%;
        height: 87px;
        float: right;
        margin-top: 10px;
        position: relative;
    }

    label {
        font-size: 13pt;
        color: #6f6f6f;
        margin-right: 30px;
        margin-bottom: 10px;
        float: right;
    }

    .emialOrTel input[type=text], .emialOrTel input[type=password] {
        direction: rtl;
        padding-left: 8px;
        border: 1px solid #c7c7c7;
        border-radius: 5px;
        /*width: 265px;*/
        height: 42px;
        /*margin-right: 30px;*/
        color: #9f9f9f;
        font-family: IranSans;
        font-size: 9.5pt;
        padding-right: 50px;
    }

    .emialOrTel input[type=text]:focus {
        border: 1px solid rgba(0, 0, 0, 0.66);
    }

    .emialOrTel input[type=password]:focus {
        border: 1px solid rgba(0, 0, 0, 0.66);
    }

    .email_icon {
        display: block;
        width: 46px;
        height: 46px;
        position: absolute;
        background: url(/img/avatar.png) no-repeat center;
        right: 22px;
        top: 33px;
    }
    .pass_icon {
        display: block;
        width: 46px;
        height: 46px;
        position: absolute;
        background: url(/img/password.png) no-repeat center;
        right: 22px;
        top: 33px;
    }

    .btnMain {
        display: block;
        border-radius: 8px;
        width: 90%;
        height: 52px;
        margin:0 auto;
        background: #67bfb0;
        text-align: center;
        color: white;
        border: 1px solid #4d8f84;
        line-height: 52px;
        font-size: 16pt;
        cursor: pointer;
        transition: background-color 300ms ease-in;
    }

    .btnMain:hover {
        background-color: #4d8f84;
    }

    #emialOrTel input[type=checkbox] {
        float: right;
        margin-right: 30px;
        margin-top: 10px;
        width: 25px;
        height: 25px;
        cursor: pointer;
        opacity: 0;
    }

    #instead_check {
        display: block;
        width: 25px;
        height: 25px;
        border-radius: 7px;
        border: 1px solid #4d8f84;
        margin-right: 30px;
        margin-top: 10px;
    }

    .checked {
        background: #67bfb0 url(/img/check-mark.png) no-repeat center !important;
    }

    #emialOrTel {
        position: relative;
        border-bottom: 1px solid #e2e2e2;
    }

    #emialOrTel p {
        float: right;
        margin: 0;
        position: absolute;
        right: 65px;
        top: 64px;
        color: #6f6f6f;
    }

    #newyou {
        height: 84px;
        background: #f5f5f5;
        float: right;
        width: 100%;
        text-align: center;
    }

    #newyou p {
        margin: 0;
        display: inline-block;
        color: #6f6f6f;
        margin-top: 28px;
        font-size: 14pt;
    }

    #newyou a {
        color: #67bfb0;
        cursor: pointer;
        font-size: 14pt;
    }
    #email,#password{
        padding-right: 25px !important;
        text-align: center !important;
    }
    .inputstyle{
        width: 90%;
        margin: 8px auto;
        height: 60%;
    }
</style>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-sm-5">
            {{--<div class="card-header">{{ __('Login') }}</div>--}}
            <div id="reg_win">
                <form method="POST" action="{{route('password.email')}}">
                    @csrf
                    <div class="title_div">
                        <p class="title">
                            تغییر رمز
                        </p>
                    </div>
                    <div class="emialOrTel">
                        <label>
                            ایمیل
                        </label>
                        <input
                                id="email"
                                placeholder="پست الکترونیکی خود را وارد نمایید"

                                type="email"
                                class="inputstyle form-control
{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email"
                                value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                        <i class="email_icon" ></i>
                    </div>
                    <div id="emialOrTel"  style="height: 105px">
        <span class="btnMain" onclick="submit()">
            تغییر رمز
        </span>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>


    function submit() {
        $('form').submit();
    }
</script>


</body>
</html>

