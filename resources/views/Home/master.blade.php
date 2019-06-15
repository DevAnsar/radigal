<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    <link rel="alternate" type="application/rss+xml" title="محصولات رادیگال" href="/feed/product">


    <!--bootstrap 4 stylesheet-->
    <link rel="stylesheet" href="/css/home.css">
{{--<link rel="stylesheet" href="/css/font.css">--}}
{{--<link rel="stylesheet" href="/css/bootstrap-rtl.css">--}}
{{--<link rel="stylesheet" href="/css/bootstrap-reboot.css">--}}
{{--<link rel="stylesheet" href="css/style.css">--}}
{{--<link rel="stylesheet" href="/css/jquery.mmenu.all.css">--}}
{{--<link rel="stylesheet" href="/css/hamburger.css">--}}


<!--bootstrap 4 javascript-->
    <script src="/js/home.js"></script>
    {{--<script src="/js/jquery-3.3.1.js"></script>--}}
    {{--<script src="/js/bootstrap.js"></script>--}}
    {{--<script src="/js/custom-js.js"></script>--}}
    <script src="/js/jquery.mmenu.all.js"></script>
    <script src="/js/jquery.mmenu.fa.js"></script>

    <script src="/js/sweetalert.min.js"></script>

    <script src="/js/loader.js"></script>


</head>
<body style="min-height: 700px!important;">
<!-- Loading by www.1abzar.com --->
{{--<script src="http://www.1abzar.ir/abzar/tools/loading/loading.php?txt=&pic=1/s%20(24)"></script><div style="display:none;position: fixed;width: 100%;height: 100%;"><h3 style="position: fixed;width: 100%;height: 100%"><a href="http://www.1abzar.com/abzar/loading.php">&#1575;&#1576;&#1586;&#1575;&#1585; &#1585;&#1575;&#1740;&#1711;&#1575;&#1606; &#1608;&#1576;&#1604;&#1575;&#1711;</a></h3></div>--}}
<!-- Loading by www.1abzar.com --->
<!-- Loading by www.1abzar.com --->
<style>
    #abzar-loading{
        width: 100% !important;
        height: 100%!important;
        position: relative;
        top: 0;
    }
    #abzar-loading .ali-rahimi{

        position: absolute !important;
        top: 150px;
        min-width: 45%!important;
        left: 30% !important;
    }
</style>
<div style="display:none;">
    <h3 style="position:absolute;top:100px;display: inline-block;width: 100%">
    </h3>
</div>
<script src="http://www.1abzar.ir/abzar/tools/loading/loading.php?txt=&pic=1/s%20(17)"></script>
<!-- Loading by www.1abzar.com --->

{{--<style>--}}
{{--#loader .loader {--}}
{{--position: fixed;--}}
{{--z-index: 100;--}}
{{--top: 0;--}}
{{--width: 100%;--}}
{{--height: 100%;--}}
{{--background: rgba(139, 139, 177, 0.53)--}}
{{--}--}}

{{--#loader .loader img {--}}
{{--margin: 20% auto;--}}
{{--display: inherit;--}}
{{--}--}}
{{--</style>--}}
<div id="loader">
    {{--<div class="loader">--}}
    {{--<img src="/img/loader/loader.gif"/>--}}
    {{--</div>--}}
</div>


<!--header-->
@include('Home.layouts.header')


@yield('css')

<!--main-->
@yield('content')


@include('Home.layouts.addtobasket')
@include('Home.layouts.basketCount')

@yield('modal')
<!--footer-->
@include('Home.layouts.footer')
@include('Home.layouts.about')

@yield('js')


{{--<script src="js/sweetalert.min.js"></script>--}}

<!-- Include this after the sweet alert js file -->
@include('sweet::alert')


</body>
</html>