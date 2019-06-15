{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row justify-content-center">--}}
{{--<div class="col-md-8">--}}
{{--<div class="card">--}}
{{--<div class="card-header">{{ __('Login') }}</div>--}}

{{--<div class="card-body">--}}
{{--<form method="POST" action="{{ route('login') }}">--}}
{{--@csrf--}}

{{--<div class="form-group row">--}}
{{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

{{--@if ($errors->has('password'))--}}
{{--<span class="invalid-feedback" role="alert">--}}
{{--<strong>{{ $errors->first('password') }}</strong>--}}
{{--</span>--}}
{{--@endif--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row">--}}
{{--<div class="col-md-6 offset-md-4">--}}
{{--<div class="form-check">--}}
{{--<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--<label class="form-check-label" for="remember">--}}
{{--{{ __('Remember Me') }}--}}
{{--</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="form-group row mb-0">--}}
{{--<div class="col-md-8 offset-md-4">--}}
{{--<button type="submit" class="btn btn-primary">--}}
{{--{{ __('Login') }}--}}
{{--</button>--}}

{{--@if (Route::has('password.request'))--}}
{{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--{{ __('Forgot Your Password?') }}--}}
{{--</a>--}}
{{--@endif--}}
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
    {{--<link rel="stylesheet" href="../assets/css/bootstrap-rtl.css">--}}
    {{--<link rel="stylesheet" href="../assets/css/bootstrap-reboot.css">--}}
    {{--<link rel="stylesheet" href="../assets/css/style.css">--}}

    <link rel="stylesheet" href="/css/home.css">
    <!--bootstrap 4 javascript-->
    {{--<script src="../assets/js/jquery-3.3.1.js"></script>--}}
    {{--<script src="../assets/js/bootstrap.js"></script>--}}
    {{--<script src="../assets/js/custom-js.js"></script>--}}
    <script src="/js/home.js"></script>
    <script src="/js/sweetalert.min.js"></script>
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
        /*height: 545px;*/
        /*margin: auto;*/
        /*margin-top: 80px;*/
        border: 1px solid #dcdcdc;
        background: white;
        font-family: IranSans;
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
        /*border: 1px solid #c7c7c7;*/
        border-radius: 5px;
        /*width: 265px;*/
        /*height: 42px;*/
        /*margin-right: 30px;*/
        color: #9f9f9f;
        padding-right: 50px;
    }

    /*.emialOrTel input[type=text]:focus {*/
    /*    border: 1px solid rgba(0, 0, 0, 0.66);*/
    /*}*/

    /*.emialOrTel input[type=password]:focus {*/
    /*    border: 1px solid rgba(0, 0, 0, 0.66);*/
    /*}*/

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

    .btnGoogle {
        display: block;
        border-radius: 8px;
        width: 90%;
        height: 52px;
        margin:0 auto;
        background: #ff0042;
        text-align: center;
        color: white !important;
        border: 1px solid #8f0804;
        line-height: 52px;
        font-size: 16pt;
        cursor: pointer;
        transition: background-color 300ms ease-in;
    }

    .btnGoogle:hover {
        background-color: #cf0035;
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
        right: 76px;
        top: 15px;
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
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="title_div">
                        <p class="title">
                            ورود به رادیگال
                        </p>
                    </div>
                    {{--<div class="emialOrTel">--}}
                    {{--@if(count($errors) > 0)--}}
                    {{--<div class="alert alert-danger">--}}
                    {{--<ul>--}}
                    {{--@foreach($errors->all() as $error)--}}
                    {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    {{--</div>--}}
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
                            <span class="invalid-feedback" role="alert" style="width: 90%;margin: 0 auto;">
                             <strong>{{ $errors->first('email') }}</strong>
                         </span>
                        @endif

                        <i class="email_icon" ></i>
                    </div>
                    <div class="emialOrTel">
                        <label>
                            رمز
                        </label>
                        <input id="password"
                               type="password" class="inputstyle
                    form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert" style="width: 90%;margin: 0 auto;">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <i class="pass_icon" ></i>
                    </div>
                    <div id="emialOrTel"  style="height: 105px">
                        <span class="btnMain" onclick="submit()">
                            ورود به رادیگال
                        </span>

                        <div class="row mt-2">
                            <div class="col-6">
                                <input class="real_checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span id="instead_check"></span>
                                <p class="font-m60-p95">
                                    مرا به خاطر داشته باش
                                </p>
                            </div>
                            <div class="col-6 mt-2">
                                @if (Route::has('password.request'))
                                    <a  class="btn btn-link font-m60-p95" href="{{ route('password.request') }}">
                                        رمز خود را فراموش کرده اید؟
                                    </a>
                                @endif
                            </div>
                        </div>


                    </div>
                    {{--@if (Route::has('password.request'))--}}
                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                    {{--فراموشی رمز--}}
                    {{--</a>--}}
                    {{--@endif--}}

                    <div id="emialOrTel"  style="height: 105px">
                        <a class="btnGoogle" href="{{url('login/google')}}">
                            ورود  با گوگل
                        </a>
                    </div>

                    <div id="newyou">
                        <p>
                            کاربر جدید هستید؟
                        </p>
                        <a href="{{route('register')}}">
                            ثبت نام در رادیگال
                        </a>


                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.real_checkbox').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents('#emialOrTel').find('#instead_check').addClass('checked');
        }
        else {
            $(this).parents('#emialOrTel').find('#instead_check').removeClass('checked');
        }
    });

    function submit() {
        $('form').submit();
    }
</script>

@include('sweet::alert')
</body>
</html>