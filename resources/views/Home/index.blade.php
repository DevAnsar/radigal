@extends('Home.master')

@section('content')
    <style>
        .slider1_item > img {
            width: 100%;
        }
    </style>
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-2 order-1 order-sm-0 pr-sm-0 pl-sm-0" id="content_right">
                <div class="row options_good mt-3 mt-md-0">

                    @php
                        $showcases=\App\Showcase::all();
                    @endphp
                    @foreach($showcases as $showcase)
                        <div class="col-6 col-sm-12 mb-3">
                            <a href="{{route('showpage',['page'=>$showcase->page_id])}}">
                                <span class="option_title">{{$showcase->title}}</span>
                                <img class="option_img sc1" src="/storage/{{$showcase->img}}" style="overflow: hidden">
                                <span class="parde"></span>
                            </a>
                        </div>
                    @endforeach

                </div>

                <div class="row">
                    <div class="col-sm-12 text-center fontsm" id="naghdbook">
                        <div class="row mr-sm-1 ml-sm-1 bg-white sc1">
                            @php
                                $showcases2=\App\Showcase2::all();
                            @endphp
                            @foreach($showcases2 as $showcase2)
                                <div class="col-6 col-sm-12 mt-4  mb-4 mb-md-2 pr-0 pl-0">
                                    <a class="pic_circle sc1"
                                       href="{{route('showpage',['page'=>$showcase2->page_id])}}">
                                        <img style="width: 100%;height: 100%" src="/storage/{{$showcase2->img}}">
                                    </a>
                                    <span class="title font_gray sans">
                                {{$showcase2->title}}
                                </span>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-sm-10 order-0 order-sm-2 content_left">
                {{--//////////////////////////////////////////slider main/////////////////////////////////////////////////////--}}
                <div class="row">
                    <div class="col-sm-12">
                        <div class="swiper-container a" style="box-shadow:  2px 2px 7px #b2b2b2;">
                            <div class="swiper-wrapper ">
                                @foreach($slider as $slide)
                                    <div class="swiper-slide">
                                        <a class="slider1_item " href="{{$slide->link}}" style="width: 100%;height: 100%;display: inline-block;">
                                            <img src="/storage/{{$slide->image}}" class="">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable "></div>
                        </div>

                    </div>
                </div>

                {{--///////////////////////////////////////////////////////////////////////////////////////--}}
                <div class="row mb-md-4">
                    <div class="d-none d-md-inline-block col-md-12 mt-md-3 fontmd pr-5 pb-2">
                        جدیدترین ها
                    </div>
                    <div class="col-12 d-md-none mt-3  pr-3 pb-1 font85">
                        جدیدترین ها
                    </div>
                    <div class="col-12 mt-1 mt-sm-0 col-sm-12 scroll_slider">
                        <div class="swiper-container sc1 pb-2">

                            <div class="swiper-wrapper">
                                @foreach($news as $new)
                                    <div class="swiper-slide">
                                        <a href="{{route('productShow',['productSlug'=>$new->slug])}}">
                                            <img src="/storage/{{$new->images[0]['url']}}" class="swiper-lazy">
                                            <div class="fontmd mt-md-4 w-100 d-none d-md-inline-block"
                                                 style="color: rgba(135, 42, 97, 0.75)">{{$new->title}}</div>
                                            <div class="fontsm w-100 d-none d-md-inline-block"
                                                 style="color: #e54a86">{{$new->price/1000}} هزار تومان
                                            </div>

                                            <div class="fontsssm w-100 d-md-none mt-2"
                                                 style="color: rgba(135, 42, 97, 0.75)">{{$new->title}}</div>
                                            <div class="fontxs w-100  d-md-none"
                                                 style="color: #e54a86">{{$new->price/1000}} هزار تومان
                                            </div>

                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination d-none d-sm-block"></div>
                            <!--&lt;!&ndash; Add Arrows &ndash;&gt;-->
                            <!--<div class="swiper-button-next d-none d-sm-block"></div>-->
                            <!--<div class="swiper-button-prev d-none d-sm-block"></div>-->
                        </div>

                    </div>
                </div>

                {{--/////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                <div class="row mb-md-4">
                    <div class="d-none d-md-inline-block col-md-12 mt-md-3 fontmd pr-5 pb-2">
                        پرفروش ترین ها
                    </div>
                    <div class="col-12 d-md-none mt-3 pr-3 pb-1 font85">
                        پرفروش ترین ها
                    </div>

                    <div class="col-12 mt-1 mt-sm-0 col-sm-12 scroll_slider">
                        <div class="swiper-container sc1 pb-2">

                            <div class="swiper-wrapper">
                                @foreach($sales as $sale)
                                    <div class="swiper-slide">
                                        <a href="{{route('productShow',['productSlug'=>$sale->slug])}}">
                                            <img src="/storage/{{$sale->images[0]['url']}}" class="swiper-lazy">
                                            <div class="fontmd mt-md-4 w-100 d-none d-md-inline-block"
                                                 style="color: rgba(135, 42, 97, 0.75)">{{$sale->title}}</div>
                                            <div class="fontsm w-100 d-none d-md-inline-block"
                                                 style="color: #e54a86"> {{$sale->price/1000}} هزار تومان
                                            </div>

                                            <div class="fontsssm w-100 d-md-none mt-2"
                                                 style="color: rgba(135, 42, 97, 0.75)">{{$sale->title}}</div>
                                            <div class="fontxs w-100  d-md-none"
                                                 style="color: #e54a86">{{$sale->price/1000}} هزار تومان
                                            </div>

                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination d-none d-sm-block"></div>
                            <!--&lt;!&ndash; Add Arrows &ndash;&gt;-->
                            <!--<div class="swiper-button-next d-none d-sm-block"></div>-->
                            <!--<div class="swiper-button-prev d-none d-sm-block"></div>-->
                        </div>

                    </div>
                </div>
                {{--//////////////////////////////////////////////////////////////////////////////////////////////////////////--}}
                <div class="row mb-md-4">
                    <div class="d-none d-md-inline-block col-md-12 mt-md-3 fontmd pr-5 pb-2">
                        پربازدید ترین ها
                    </div>
                    <div class="col-12 d-md-none mt-3 pr-3 pb-1 font85">
                        پربازدید ترین ها
                    </div>

                    <div class="col-12 mt-1 mt-sm-0 col-sm-12 scroll_slider">
                        <div class="swiper-container sc1 pb-2">

                            <div class="swiper-wrapper">
                                @foreach($views as $view)
                                    <div class="swiper-slide">
                                        <a href="{{route('productShow',['productSlug'=>$view->slug])}}">
                                            <img src="/storage/{{$view->images[0]['url']}}" class="swiper-lazy">
                                            <div class="fontmd mt-md-4 w-100 d-none d-md-inline-block"
                                                 style="color: rgba(135, 42, 97, 0.75)">{{$view->title}}</div>
                                            <div class="fontsm w-100 d-none d-md-inline-block"
                                                 style="color: #e54a86"> {{$view->price/1000}} هزار تومان
                                            </div>

                                            <div class="fontsssm w-100 d-md-none mt-2"
                                                 style="color: rgba(135, 42, 97, 0.75)">{{$view->title}}</div>
                                            <div class="fontxs w-100  d-md-none"
                                                 style="color: #e54a86">{{$view->price/1000}} هزار تومان
                                            </div>

                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination d-none d-sm-block"></div>
                            <!--&lt;!&ndash; Add Arrows &ndash;&gt;-->
                            <!--<div class="swiper-button-next d-none d-sm-block"></div>-->
                            <!--<div class="swiper-button-prev d-none d-sm-block"></div>-->
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>

@endsection

@section('css')
    <!--flipTimer-->
    <script src="/js/jquery.flipTimer.js"></script>
    <link href="/css/flipTimer.css" rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/css/swiper.min.css">


    <style>
        /*.scroll_slider{*/
        /*height: 265px;*/
        /*}*/
        /*.swiper-container.a .swiper-slide  a {*/

        /*width: 100%;*/
        /*height: 100%;*/

        /*}*/

        /*.swiper-container.a .swiper-slide img {*/

        /*height: 65%;*/
        /*width: 85%;*/
        /*float: left;*/
        /*}*/

        #naghdbook {
            margin: 20px 0;
            border-radius: 5px;
        }

        #naghdbook .pic_circle {
            display: block;
            width: 64px;
            height: 64px;
            /*float: right;*/
            border-radius: 100%;
            overflow: hidden;
            margin: 0 auto;
        }

        #naghdbook .title {
            width: 132px;
            margin-top: 15px;
        }

        .options_good a {
            float: right;
            position: relative;
        }

        .options_good .option_img {
            width: 100%;
            /*height: 308px;*/
            border-radius: 5px;
        }

        .options_good .option_title {
            position: absolute;
            width: 100%;
            text-align: center;
            top: 50px;
            font-family: IranSans;
            font-size: 25pt;
            color: #ff0042;
            font-weight: bold;
        }

        .parde {
            position: absolute;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.3);
            display: block;
            width: 100%;
            height: 100%;
            border-radius: 5px;
            cursor: pointer;
        }

        .parde {
            transition: all 500ms ease;
        }

        .parde:hover {
            background: rgba(0, 0, 0, 0);
        }

        .slider2 {
            width: 100%;
            /*height: 430px;*/
            float: left;
            border-radius: 5px;
            overflow: hidden;
            background: white;
            margin: 15px 0;
            font-family: IranSans;
            color: #6f6f6f;
            position: relative;
            box-shadow: 2px 2px 5px #cbcbcb;
        }

        .flipTimer, .flipTimer div {
            direction: ltr !important;
        }

        .flipTimer {
            position: absolute;
            transform: scale(0.3);
            bottom: 15px;
            right: -50px;
        }

        .finished {
            width: 90px;
            height: 50px;
            border: 4px solid #cccccc;
            border-radius: 8px;
            position: absolute;
            text-align: center;
            line-height: 50px;
            font-size: 16pt;
            right: 370px;
            top: 190px;
            display: none;
        }

        .slider2_content {
            float: right;
            width: 80%;
            height: 100%;
        }

        .slider2_item {
            display: block;
            width: 100%;
            height: 100%;
        }

        .slider2_content_right {
            float: right;
            width: 60%;
            height: 100%;
        }

        .slider2_content_left {
            float: left;
            width: 40%;
            height: 100%;
        }

        .special_off {
            color: #e54a86;
            font-size: 14pt;
            margin: 60px 0 0 0;
            padding-right: 30px;
        }

        .item_price {
            float: right;
            margin-right: 15px;
            width: 250px;
            height: 33px;
            border-radius: 24px;
            overflow: hidden;
            position: relative;
        }

        .old_price {
            display: block;
            height: 100%;
            width: 96px;
            background: #e54a86;
            color: white;
            text-align: center;
            line-height: 33px;
            float: right;
        }

        .old_price::before {
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 9.5px 15px 9.5px 0;
            border-color: transparent #e54a85 transparent transparent;
            position: absolute;
            right: 96px;
            top: 8px;
            z-index: 3;
        }

        .new_price {
            display: block;
            float: left;
            height: 100%;
            width: 150px;
            background: #67bfb0;
            text-align: center;
            line-height: 33px;
            color: white;
        }

        .new_price::before {
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 9.5px 15px 9.5px 0;
            border-color: transparent #ffffff transparent transparent;
            position: absolute;
            right: 100px;
            top: 8px;
        }

        .item_price div {
            width: 80px;
            height: 2px;
            background: #6f6f6f;
            transform: rotate(-18deg);
            position: absolute;
            top: 15px;
            right: 10px;
        }

        .descript {
            float: right;
            width: 100%;
            margin: 30px 20px 0 0;
        }

        .descript p {
            margin: 10px 0;
        }

        .item_title {
            text-align: center;
            font-size: 16pt;
        }

        .slider2_content_left img {
            max-width: 230px;
            max-height: 301px;
            border-radius: 5px;
            /*margin-right: 90px;*/
        }

        .slider2_nav {
            float: left;
            width: 20%;
            height: 100%;
        }

        .slider2_nav ul {
            padding: 0;
            width: 100%;
            height: 100%;
        }

        .slider2_nav ul li {
            width: 100%;
            height: 43px;
            background: #f0f0f0;
            position: relative;
            cursor: pointer;
            color: #6f6f6f;
        }

        .slider2_nav ul li.activeSlide2 {
            background: #e54a85;
            color: white !important;
        }

        .slider2_nav ul li.activeSlide2::before {
            content: '';
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 21px 0 21px 25px;
            border-color: transparent transparent transparent #e54a85;
            position: absolute;
            right: -25px;
        }

        .slider2_nav ul li a {
            width: 100%;
            height: 100%;
            display: block;
            line-height: 42px;
            text-align: center;
        }

        .swiper-container.sc1 {
            width: 100%;
            height: 100%;
            background: #fff;
        }

        .sc1 {
            box-shadow: 2px 2px 7px #b2b2b2;
        }

        .swiper-container.sc1 .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            width: 60px;
            /*margin-bottom: 20px;*/
            /*margin-left: 30px;*/
            /*margin-bottom: 30px;*/
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-container.sc1 .swiper-slide a {
            width: 100%;
            height: 100%;
            display: block;
            float: right;
            text-align: center;
        }

        .swiper-container.sc1 .swiper-slide img {
            /*height: 80%;*/
            width: 85%;
            /* margin: 20px 0 15px 0; */
            border-radius: 4px;
            padding-top: 20px;
        }

        .swiper-container.sc1 .swiper-slide p {
            text-align: center;
            margin: 0;
            color: #6f6f6f;
            font-size: 10.5pt;
        }
    </style>
@endsection

@section('js')

    <!--</script>-->
    <script>

        // $('.flipTimer').flipTimer({
        //     direction: 'down',
        //     date: 'February 18,2019 22:31:00 ',
        //     callback: function () {
        //         $('.slider2_content').css('opacity', 0.2);
        //         $('.finished').fadeIn(100);
        //     }
        // });
        //
        //
        // var slider2tag = $('.slider2');
        // var slider2items = slider2tag.find('.slider2_item');
        // var numitems2 = slider2items.length;
        // var nextslide2 = 1;
        // var timeOut2 = 3000;
        // var slider2nav = slider2tag.find('.slider2_nav ul li');
        //
        // function slider2() {
        //     if (nextslide2 > numitems2) {
        //         nextslide2 = 1;
        //     }
        //     if (nextslide2 < 1) {
        //         nextslide2 = numitems2;
        //     }
        //
        //     slider2items.hide();
        //     slider2items.eq(nextslide2 - 1).fadeIn(100);
        //     slider2nav.removeClass('activeSlide2');
        //     slider2nav.eq(nextslide2 - 1).addClass('activeSlide2');
        //     nextslide2++;
        // }
        //
        // slider2();
        // var sliderstop2 = setInterval(slider2, timeOut2);
        // slider2tag.mouseleave(function () {
        //     clearInterval(sliderstop2);
        //     sliderstop2 = setInterval(slider2, timeOut2);
        // });
        //
        //
        // $('.slider2 .slider2_nav ul li').click(function () {
        //     clearInterval(sliderstop2);
        //     var index2 = $(this).index();
        //     gotoslide_2(index2);
        // });
        //
        // function gotoslide_2(index2) {
        //     nextslide2 = index2 + 1;
        //     slider2();
        // }
    </script>

    <!-- Swiper JS -->
    <script src="/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('div.swiper-container.a', {
            spaceBetween: 20,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container.sc1', {
            slidesPerView: 3.5,
            spaceBetween: 0,
            slidesPerGroup: 1,
            loop: false,
            loopFillGroupWithBlank: false,
            lazy: true,
            parallax: true,
            // pagination: {
            //     el: '.swiper-pagination',
            //     clickable: true,
            // },
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
        });
    </script>
@endsection
