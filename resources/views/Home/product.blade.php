@extends('Home.master')

@section('content')
    <link rel="stylesheet" href="/css/star-rating-svg.css">
    <script src="/js/jquery.star-rating-svg.js"></script>
<style>

    /*#pics {*/
        /*width: 570px;*/
        /*float: right;*/
        /*border-left: 1px solid #e9e9e9;*/
        /*background: white;*/
    /*}*/

    /*#lovenshare {*/
        /*width: 100%;*/
        /*float: right;*/
    /*}*/

    /*#love {*/
        /*display: block;*/
        /*float: left;*/
        /*margin: 20px 0 0 20px;*/
        /*width: 32px;*/
        /*height: 32px;*/
        /*background: url(/img/nolove.png) no-repeat center;*/
        /*cursor: pointer;*/
    /*}*/

    /*#share {*/
        /*display: block;*/
        /*float: left;*/
        /*margin: 20px;*/
        /*width: 32px;*/
        /*height: 32px;*/
        /*background: url(/img/share.png) no-repeat center;*/
        /*cursor: pointer;*/
    /*}*/

    #big_pic {
        width: 100%;
        float: right;
        text-align: center;
    }

    #big_pic img {
        vertical-align: middle;
        margin: 20px auto;
        max-width: 250px;
        max-height: 375px;
        border-radius: 4px;
    }

    #entesharat {
        width: 100%;
        float: right;
        text-align: center;
        margin: 30px 0;
    }

    #entesharat ul {
        padding: 0;
        /*width: 100%;*/
        /*float: right;*/
        /*text-align: center;*/
    }

    #entesharat ul li {
        /*float: right;*/
        /*width: 100%;*/
        /*height: 100%;*/
        border: 1px solid #e9e9e9;
        border-radius: 10px;
        margin: 10px;
        cursor: pointer;
        /*text-align: center;*/
    }

    #entesharat img {
        /*margin-top: 10px;*/
        max-width: 100%;
        max-height: 150%;
        border-radius: 4px;
    }

    .activeEnteshar {
        border: 1px solid #e54a86 !important;
    }

    .loved {
        background: url(/img/love.png) no-repeat center !important;
    }

    #entesharat p {

        color: #6f6f6f;
        margin: 0 10px;
    }

    #just_book {

        border: 1px solid #dcdcdc;
        box-shadow: 2px 2px 5px #cbcbcb;
    }
</style>
<style>


    #detail {
        width: 679px;
        float: left;
        padding: 25px;
        background: white;
        height: 716px;
    }



    #bookanme {
        display: inline-block;
        margin: 0;
        color: #6f6f6f;

    }

    #writername {
        margin: 0 0 20px 0;
        color: #919191;
        font-size: 13pt;
        display: inline-block;
    }

    .star_rating {
        display: block;
        float: left;
        width: 120px;
        height: 24px;
        background: url(/img/stargray.png) repeat;
        margin-right: 20px;
        position: relative;
    }

    .gray_star {
        display: block;
        float: left;
        width: 100%;
        height: 100%;
        background: url(/img/stargray.png) repeat;
    }

    .red_star {
        display: block;
        float: left;
        width: 68%;
        height: 100%;
        background: url(./img/starred.png) repeat;
        position: absolute;
        left: 0;
    }

    .choose_option {
        /*width: 300px;*/
        height: 48px;
        border-radius: 8px;
        border: 1px solid #e9e9e9;
        margin-bottom: 50px;
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
        background: url(/img/correct-symbol.png) no-repeat center;
        top: 15px;
        right: 10px;
        position: absolute;
    }

    .choose_option::before {
        content: '';
        display: block;
        width: 16px;
        height: 16px;
        background: url(/img/chevron-arrow-down.png) no-repeat center;
        top: 18px;
        left: 10px;
        position: absolute;
    }

    .choose_option .option_selected {
        color: #6f6f6f;
        font-size: 12pt;
        line-height: 48px;
    }

    .choose_option .nashers {
        border-radius: 5px;
        border: 1px solid #e9e9e9;
        background: #f9f9f9;
        margin-top: 4px;
        display: none;
        position: relative; /* remember this trick!:position relative + z-index */
        z-index: 4;
    }

    .choose_option .nashers li {
        padding-right: 10px;
        color: #6f6f6f;
        font-size: 11pt;
        cursor: pointer;
    }

    .item_price {
        float: right;
        width: 250px;
        height: 33px;
        border-radius: 24px;
        overflow: hidden;
        position: relative;
        margin: 10px 0 0 0;
    }

    .old_price {
        display: block;
        height: 100%;
        width: 98px;
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

    .discount {
        width: 100%;
        float: right;
        /*margin: 50px 15px 20px 0;*/
    }

    .discount_amount {
        width: 70px;
        height: 36px;
        border-radius: 24px 0 24px 24px;
        background: #e54a86;

        color: white;
        font-size: 16pt;
        text-align: center;
        line-height: 36px;
    }

    .btnMain {
        display: block;
        border-radius: 8px;
        width: 323px;
        height: 52px;
        /*margin-right: 15px;*/
        /*margin-bottom: 50px;*/
        background: #67bfb0;
        text-align: center;
        color: white;
        border: 1px solid #4d8f84;
        line-height: 52px;
        font-size: 16pt;
        cursor: pointer;
        transition: background-color 300ms ease-in;
        float: right;
    }


    .btnMain:hover {
        background-color: #4d8f84;
    }
    .btnMain.zeroStock {
        background: #ffb5a8;
        color: white;
        border: 1px solid #ff0077;
    }.btnMain.zeroStock {
             background-color: #e59e91;
         }

    /*#detail .row:last-child {*/
    /*border-bottom: unset;*/
    /*}*/
</style>
<style>
    /*#tab_part {*/
    /*width: 100%;*/
    /*float: right;*/
    /*}*/

    #tab_part ul {
        width: 100%;
        height: 100%;
        padding: 0;
        /*float: right;*/
        /*background: #f9f9f9;*/
        /*border: 1px solid #dcdcdc;*/
        /*border-right: unset;*/
    }

    #tab_part ul li {
        float: right;
        width: 33%;
        height: 100%;
        color: #6f6f6f;
        text-align: center;
        line-height: 50px;
        /*border-left: 1px solid #dcdcdc;*/
        cursor: pointer;
    }
    #tab_part ul li:first-child {
        /*border-right: 1px solid #dcdcdc;*/

    }

    #tab_part ul li.activeTab {
        box-shadow: 0 -4px 1px #67bfb0;
        background: white;
        height: 101% !important;
    }

    #tabs {
        /*width: 100%;*/
        /*float: right;*/
        margin-top: 20px;
        background: white;
        box-shadow: 2px 2px 5px #cbcbcb;
    }
</style>
<style>
    #tab_content {
        /*width: 95%;*/
        /*float: right;*/
        background: white;
        /*padding: 30px;*/
    }

    #property {
        width: 100%;
        float: right;
    }

    #border_stretch {
        width: 100%;
        float: left;
    }

    #border_stretch ul {
        width: 100%;
        float: right;
        border-right: 2px solid #6f6f6f;
    }

    #border_stretch ul li {
        width: 100%;
        float: right;
        color: #6f6f6f;
        margin: 25px 0;
    }

    #border_stretch ul li:first-child {
        margin-top: unset !important;
    }

    #border_stretch ul li:last-child {
        margin-bottom: unset !important;
    }

    #border_stretch i {
        display: block;
        width: 32px;
        height: 32px;
        float: right;
        position: relative;
        right: -17px;
        background: white url(/img/addition-button.png) no-repeat center;
        cursor: pointer;
    }

    .description {
        width: 100%;
        float: right;
        /*font-size: 10.5pt;*/
        padding: 10px 15px;
        margin-top: 3%;
        display: none;
    }

    .less {
        background: white url(/img/minus-sign-in-filled-circle.png) no-repeat center !important;
    }

    #tab_content section {
        display: none;
    }
</style>
<style>
    #nazar {
        width: 100%;
        float: right;
    }

    #add_comment {
        width: 100%;
        float: right;
        height: 80px;
        border-bottom: 1px solid #e9e9e9;

    }

    .addBtn {
        display: block;
        border-radius: 8px;
        width: 28%;
        height: 42px;
        background: #67bfb0;
        text-align: center;
        color: white;
        border: 1px solid #4d8f84;
        line-height: 42px;
        cursor: pointer;
        transition: background-color 300ms ease-in;
        float: left;
    }

    .addBtn:hover {
        background-color: #4d8f84;
    }

    .all_comments {
        /*width: 1234px;*/
        float: right;
    }

    .comments {
        width: 100%;
        float: right;
        margin: 20px auto;
        height: 300px;
        border: 1px solid #f5f5f5;
        background: #fafafa;
        border-radius: 8px;
    }

    #add_comment h4 {
        color: #6f6f6f;
        font-weight: normal;
        font-size: 16pt;
        line-height: 75px;
    }

    .commenter {
        width: 95%;
        height: 70px;
        margin: auto;
        border-bottom: 1px solid #e9e9e9;
    }

    .by_who_when {
        color: #b6b6b6;
        line-height: 70px;
        font-size: 13.5pt;
    }

    .likeOrNot {
        width: 350px;
        height: 100%;
        float: left;
    }

    .like, .dislike {
        display: block;
        width: 70px;
        height: 36px;
        border-radius: 5px;
        border: 1px solid #e9e9e9;
        background: white;
        float: left;
        margin-right: 10px;
        margin-top: 17px;
    }

    .dislike_icon, .like_icon {
        display: block;
        width: 32px;
        height: 32px;
        float: right;
        margin-right: 2px;
        margin-top: 2px;
        cursor: pointer;
    }

    .dislike_icon {
        background: url(/img/thumb-down.png) no-repeat center;
    }

    .like_icon {
        background: url(/img/thumbs-up.png) no-repeat center;
    }

    .dislike_count, .like_count {
        display: block;
        width: 34px;
        text-align: center;
        float: left;
        color: #6f6f6f;
        line-height: 36px;

    }

    .do_you_likeOrNot {
        color: #6f6f6f;
        float: left;
        margin-top: 24px;
    }

    .comment_text {
        width: 92%;
        height: 190px;
        padding: 20px;
        margin: auto;
        color: #6f6f6f;
    }

</style>
<style>
    #question_ask {

    }

    #question_ask h4 {
        color: #6f6f6f;
        font-weight: normal;
    }

    #question_ask textarea {

        width: 100%;
        border-radius: 5px;
        border: 1px solid #e9e9e9;
    }

    #all_questions {

    }

    .question {

        border: 1px solid #f5f5f5;
        background: #eaeaea;
        border-radius: 8px;
    }

    .asker {

        /*height: 70px;*/

        border-bottom: 1px solid #e9e9e9;
    }

    .ask_by {
        color: #b6b6b6;
        line-height: 70px;
    }

    .the_question {

        /*width: 100%;*/
        /* height: 50px; */
    }

    .ques_text {

        color: #6f6f6f;
    }
</style>
<!--main-->
<div class="container">
    <div class="row mt-3 pt-3 pt-md-0 pb-3 pb-md-0 mt-md-5 justify-content-center" id="just_book">


        <div class="col-11 d-md-none bg-white">
            <div class="row pt-3 pb-3  d-md-none" style="border-bottom: 1px solid #ededed;">
                <div class="col-7 ">
                    <p class="fontmd" >{{$product->title}}</p>
                </div>
                <div class="col-5" style="direction: ltr">
                    <div class="my-rating" style="float: left" data-rating="{{$ratingsNum}}"></div>
                </div>
                <script>
                    $(".my-rating").starRating({
                        totalStars: 5,
                        starShape: 'rounded',
                        // starSize: 30,
                        emptyColor: 'lightgray',
                        hoverColor: 'salmon',
                        activeColor: 'crimson',
                        useGradient: false,
                        readOnly: true
                    });
                </script>
                {{--<div class="col-4 mt-3">--}}
                {{--<span class="star_rating">--}}
                {{--<span class="gray_star"></span>--}}
                {{--<span class="red_star"></span>--}}
                {{--</span>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="col-11 col-sm-6 pics order-0 order-md-0 bg-white" style=" border-left: 1px solid #ededed;">

            <div class="row pt-md-4 pb-md-4" style="    border-bottom: 1px solid #ededed;">
                {{--<div id="lovenshare">--}}
                    {{--<span title="افزودن به علاقه مندی ها" id="love"></span>--}}
                    {{--<span id="share"></span>--}}
                {{--</div>--}}
                <div id="big_pic">
                    <img src="/storage/{{$product->images[0]['url']}}">
                </div>
            </div>
            <div class="row" id="entesharat">

                <div class="col-12">
                <p class="row fontsm">
                    گالری محصول :
                </p>
                <ul class="row">
                    @foreach($product->images as $key=>$images)

                    <li data-pic="/storage/{{$images['url']}}" class="<?php if ($key==0){echo 'activeEnteshar';} ?> col-3 pt-3 pb-3 ">
                        <img src="/storage/{{$images['url']}}">
                    </li>
                    @endforeach
                </ul>
                </div>

            </div>
        </div>
        <div class="col-11 col-sm-6 order-1 order-md-1 bg-white">
            <div class="row pt-3 pb-3 d-none d-md-flex" style="border-bottom: 1px solid #ededed;">
                <div class="col-7 ">
                    <p class="fontmd" >{{$product->title}}</p>
                </div>
                <div class="col-5" style="direction: ltr">
                    <div class="my-rating" style="float: left" data-rating="{{$ratingsNum}}"></div>
                </div>
                <script>
                    $(".my-rating").starRating({
                        totalStars: 5,
                        starShape: 'rounded',
                        // starSize: 30,
                        emptyColor: 'lightgray',
                        hoverColor: 'salmon',
                        activeColor: 'crimson',
                        useGradient: false,
                        readOnly: true
                    });
                </script>
                {{--<div class="col-4 mt-3">--}}
                             {{--<span class="star_rating">--}}
                                  {{--<span class="gray_star"></span>--}}
                                 {{--<span class="red_star"></span>--}}
                              {{--</span>--}}
                {{--</div>--}}
            </div>
            <div class="row pb-3 pt-2" style="    border-bottom: 1px solid #ededed;">
                <div class="col-12  fontsm">
                    <p style="color: #6f6f6f;margin: 0">
                         توضیح :
                    </p>
                        {!! $product->description !!}
                </div>
            </div>
            <div class="row fontsm">
                <div class="discount m-3">
                <span class="off_title" style="color: #6f6f6f">
                    تخفیف
                </span>
                    <div class="discount_amount">
                        {{$product->discount}}%
                    </div>
                    <div class="item_price">
                        <div></div>
                        <span class="old_price">
                            {{number_format($product->price/1000)}}
                            <span style="font-size: 6pt !important;">
                                هزار تومان
                                </span>

                    </span>
                        <span class="new_price">
                                {{$product->price*(1-$product->discount/100)/1000}}
                            <span >
                                هزار تومان
                                </span>

                    </span>
                    </div>
                </div>

                <div class="discount m-3">
                <span class="off_title" style="color: #6f6f6f">
                    موجودی
                </span>
                    <div class="discount_amount">
                        {{$product->stockCount}}
                    </div>
                </div>

                <div class="discount m-3">
                <span class="off_title" style="color: #6f6f6f">
                    امتیاز شما به این محصول:
                </span>
                    <?php
                        if (auth()->check()){
                          $rating=\App\Rating::whereUser_idAndProduct_id(auth()->user()->id,$product->id)->select('rating')->first()['rating'];

                    ?>
                    <div style="direction: ltr;display: inline-block" class="your-rating" data-rating="{{$rating}}"></div>
                    <?php
                    }else{
                    ?>
                    <div title="برای ثبت امتیاز باید وارد فروشگاه شوید"  style="direction: ltr;display: inline-block" class="login-rating" data-rating="0"></div>

                    <?php
                    }
                    ?>
                </div>



                @if($product->stockCount!=0)
                <span class="btnMain m-3" onclick="addtobasket({{$product->id}},1,1),basketCount()">
                اضافه کردن به سبد خرید
                </span>
                    @else
                    <span class="btnMain zeroStock m-3">
                اتمام موجودی
                </span>
                @endif


            </div>
        </div>
        <input type="hidden" name="product_id" value="{{$product->id}}">
    </div>

    {{--///////////////////////////////////////////////////////////////////////////////////////--}}
    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
            background: #fff;
        }

        .sc1 {
            box-shadow: 2px 2px 7px #b2b2b2;
        }

        .swiper-container .swiper-slide {
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

        .swiper-container .swiper-slide a {
            width: 100%;
            height: 100%;
            display: block;
            float: right;
            text-align: center;
        }

        .swiper-container .swiper-slide img {
            /*height: 80%;*/
            width: 85%;
            /* margin: 20px 0 15px 0; */
            border-radius: 4px;
            padding-top: 20px;
        }

        .swiper-container .swiper-slide p {
            text-align: center;
            margin: 0;
            color: #6f6f6f;
            font-size: 10.5pt;
        }

        @media (max-width: 768px) {
            .contentEditor2{
                font-size: 60% !important;
            }
            .contentEditor p{
                font-size: 60% !important;
            }
        }
        @media (min-width: 1200px) {
            .contentEditor2{
                font-size: 90% !important;
            }
            .contentEditor p{
                font-size: 90% !important;
            }
        }
    </style>
    <div class="row mb-md-4">
        <div class="d-none d-md-inline-block col-md-12 mt-md-3 fontmd pr-5 pb-2">
            محصولات مشابه
        </div>
        <div class="col-12 d-md-none mt-3  pr-3 pb-1 font85">
            محصولات مشابه
        </div>
        <div class="col-12 mt-1 mt-sm-0 col-sm-12 scroll_slider pr-0 pl-0">
            <div class="swiper-container sc1 pb-3">

                <div class="swiper-wrapper">
                    @foreach($products_cat as $cat)
                        <div class="swiper-slide">
                            <a href="{{route('productShow',['productSlug'=> $cat->slug])}}">
                                <img src="/storage/{{$cat->images[0]['url']}}" class="swiper-lazy">
                                <div class="fontmd mt-md-4 w-100 d-none d-md-inline-block"
                                     style="color: rgba(135, 42, 97, 0.75)">{{$cat->title}}</div>
                                <div class="fontsm w-100 d-none d-md-inline-block"
                                     style="color: #e54a86">{{$cat->price/1000}} هزار تومان
                                </div>

                                <div class="fontsssm w-100 d-md-none mt-2"
                                     style="color: rgba(135, 42, 97, 0.75)">
                                    {{$cat->title}}
                                </div>
                                <div class="fontxs w-100  d-md-none"
                                     style="color: #e54a86">{{$cat->price/1000}} هزار تومان
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

    <div class="row mt-5 fontsm" id="tabs" style="background: #f9f9f9; ">

        <div class="col-12" id="tab_part">
            <ul>
                <li>
                    مشخصات
                </li>
                <li class="commentLi">
                    پرسش و پاسخ
                </li>
            </ul>
        </div>

        <div class="col-12 p-5 p-sm-5" id="tab_content">
            <section id="property" class="">


                <div id="border_stretch">
                    <ul class="p-0">
                        <li class="font">
                            <i></i>
                            ویژگی ها و اطلاعات محصول
                            <div class="description contentEditor">
                                {!! $product->body !!}
                            </div>
                        </li>
                        <li class="font">
                            <i></i>
                            توضیحات تکمیلی
                            <div class="description contentEditor2">
                              {!! $product->cutoff !!}
                            </div>
                        </li>

                    </ul>
                </div>
            </section>

            <section id="question_ask" class="col-12">
                <form id="AddComment" method="post">
                    {{method_field('post')}}
                    <input type="hidden" name="AddCommentToken" value="{{csrf_token()}}">
                <h4 class="row fontlg">
                    پرسش خود را مطرح کنید
                </h4>
                <div class="row ">
                    <textarea name="commentBody" rows="5"></textarea>
                </div>
                <div class="row justify-content-end mt-2 mb-4">
                    <?php
                        if (auth()->check()){
                    ?>
                     <span class="addBtn fontmd" onclick="AddComment()">
                      ثبت پرسش
                     </span>
                    <?php
                        }else{
                    ?>
                        <a  class="btn btn-danger fontsm" href="{{route('login')}}">
برای ثبت پ‍رسش ابتدا باید وارد شوید
                        </a>
                    <?php
                        }
                            ?>
                </div>
                </form>

                <div id="all_questions " class="row justify-content-center fontComment">
                    @foreach($comments as $comment)
                    <div class="question  col-12 mb-2 mb-md-4" id="comment{{$comment->id}}">
                        <div class="asker row">
                            <span class="ask_by col-12 ">
                                    توسط
                                {{$comment->user->name}}
                                    در تاریخ
                                    {{Verta::instance($comment->created_at)->formatJalaliDate()}}
                            </span>
                        </div>
                        <div class="the_question row justify-content-center">
                            <span class="ques_text col-12 pt-3 pb-3">
                                {{$comment->comment}}
                            </span>
                            <div class="col-11">
                                {{--/////////////////////////////--}}
                                @foreach($comment->comments as $chiidComment)
                                <div class="row  mb-3 bg-white" style="border-radius: 8px">
                                        <span class=" col-12 pb-2 pt-2" style="border-bottom: 1px solid #f5f5f5">
                                            {{$chiidComment->user->name}}
                                        </span>

                                        <div class=" col-12  pt-3 pb-3">
                                            {{$chiidComment->comment}}
                                        </div>
                                </div>
                                @endforeach
                                {{--///////////////////////////////////--}}
                            </div>

                            <div class="col-11">
                                <div class="row ">
                                    <textarea class="p-2" name="replayComment" rows="2" placeholder="پاسخ..."></textarea>
                                </div>
                                <div class="row justify-content-end mt-2 mb-4">
                                    <?php
                                    if (auth()->check()){
                                    ?>
                                    <span class="addBtn fontmd" onclick="replay({{$comment->id}},this)">
                                               پاسخ
                                    </span>
                                    <?php
                                    }else{
                                    ?>
                                    <a  class="btn btn-danger fontssm" href="{{route('login')}}">
                                        برای ثبت پاسخ ابتدا باید وارد شوید
                                    </a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>

                    </div>
                    @endforeach
                </div>

            </section>
        </div>

    </div>
</div>


@endsection

@section('css')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/css/swiper.min.css">
@endsection
@section('js')
    <script src="/js/swiper.min.js"></script>
    <script>
        // $('#love').click(function () {
        //     if ($(this).hasClass('loved')) {
        //         $(this).removeClass('loved');
        //     } else {
        //         $(this).addClass('loved');
        //     }
        //
        // });




        var swiper = new Swiper('.swiper-container', {
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


    <!-- Initialize Swiper -->


        $('#entesharat ul li').click(function () {
            $('#entesharat li').removeClass('activeEnteshar');
            $(this).addClass('activeEnteshar');
            var picNum = $(this).attr('data-pic');
            var picUrl =  picNum; //badan id ketab az tbl_books gerefte mishavad
            $('#big_pic img').attr('src', picUrl);
        });


        $('.choose_option').click(function () {
            $(this).find('.nashers').slideToggle(100);
        });

        $('.nashers li').click(function () {
            var textOpt = $(this).text();
            $('.option_selected').text(textOpt);
        });


        $('#tab_content i').click(function () {
            $(this).next().slideToggle();
            $(this).toggleClass('less');
        });
        $('#tab_part li').click(function () {
            $('#tab_part li').removeClass('activeTab');
            $(this).addClass('activeTab');
            $('#tabs section').fadeOut(0);
            var tabNum = $(this).index();
            $('#tabs section').eq(tabNum).fadeIn(200);
        });
        $('#tab_part li.commentLi').addClass('activeTab');
        $('#tabs section#question_ask').fadeIn(200);



        function AddComment() {
            let comment=$('textarea[name="commentBody"]').val();
            if (comment == ''){
                swal({
                    text: "{!! 'متن کامنت خالی میباشد...' !!}",
                    title: "{!! '' !!}",
                    timer: "{!! '3000' !!}",
                    icon: "{!! '/img/error1.png' !!}",
                    buttons: "{!! 'باشه' !!}",
                    // more options
                });
            } else if (comment.length < 5) {
                swal({
                    text: "{!! 'متن کامنت کمتر از ۵ کاراکتر میباشد...' !!}",
                    title: "{!! '' !!}",
                    timer: "{!! '3000' !!}",
                    icon: "{!! '/img/error1.png' !!}",
                    buttons: "{!! 'باشه' !!}",
                    // more options
                });
            }else {
                startLoader();
                let product_id = $('input[name="product_id"]').val();
                // let parent = parent;
                let _token= $('input[name="AddCommentToken"]').val();
                let formData = new FormData();
                formData.append('product_id', product_id);
                formData.append('comment', comment);
                $.ajax({
                    method: 'POST',
                    url: '/addcomment',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers:{'X-CSRF-TOKEN':_token}
                }).done(function (msg) {
                    console.log(msg);
                    endLoader();
                    swal({
                        text: "{!! 'کامنت شما ثبت شد' !!}",
                        title: "{!! '' !!}",
                        timer: "{!! '3000' !!}",
                        icon: "{!! '/img/success2.png' !!}",
                        buttons: "{!! 'باشه' !!}",
                        // more options
                    });
                    location.reload('#comment1');

                });

            }
        }

        function replay(commentId,tag) {
            comment=$(tag).parents('.col-11').find('textarea[name="replayComment"]').val();
            if (comment == ''){
                swal({
                    text: "{!! 'متن پاسخ خالی میباشد...' !!}",
                    title: "{!! '' !!}",
                    timer: "{!! '3000' !!}",
                    icon: "{!! '/img/error1.png' !!}",
                    buttons: "{!! 'باشه' !!}",
                    // more options
                });
            } else if (comment.length < 5) {
                swal({
                    text: "{!! 'متن پاسخ کمتر از ۵ کاراکتر میباشد...' !!}",
                    title: "{!! '' !!}",
                    timer: "{!! '3000' !!}",
                    icon: "{!! '/img/error1.png' !!}",
                    buttons: "{!! 'باشه' !!}",
                    // more options
                });
            }else {
                startLoader();
                let product_id = $('input[name="product_id"]').val();
                // let parent = parent;
                let _token= $('input[name="AddCommentToken"]').val();
                let formData = new FormData();
                formData.append('product_id', product_id);
                formData.append('comment', comment);
                formData.append('parent', commentId);
                $.ajax({
                    method: 'POST',
                    url: '/commentreplay',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers:{'X-CSRF-TOKEN':_token}
                }).done(function (msg) {
                    // console.log(msg);
                    endLoader();
                    swal({
                        text: "{!! 'پاسخ شما ثبت شد' !!}",
                        title: "{!! '' !!}",
                        timer: "{!! '3000' !!}",
                        icon: "{!! '/img/success2.png' !!}",
                        buttons: "{!! 'باشه' !!}",
                        // more options
                    });
                    location.reload();

                });

            }
        }





    </script>
    <script>
        $(".your-rating").starRating({
            totalStars: 5,
            starShape: 'rounded',
            starSize: 30,
            emptyColor: 'lightgray',
            hoverColor: 'salmon',
            activeColor: 'crimson',
            useGradient: false,
            disableAfterRate: false,
            callback: function(currentRating, $el){
                startLoader();
                let product_id = $('input[name="product_id"]').val();
                let formData = new FormData();
                let _token = $('input[name="AddCommentToken"]').val();

                formData.append('product_id', product_id);
                formData.append('currentRating', currentRating);

                $.ajax({
                    method: 'POST',
                    url: '/rating',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {'X-CSRF-TOKEN': _token}
                }).done(function (msg) {
                    console.log(msg);
                    endLoader();

                    {{--swal({--}}
                    {{--text: "{!! 'بیشتر از موجودی محصول ، نمیتوان به سبد خرید اضافه کرد ' !!}",--}}
                    {{--title: "{!! '' !!}",--}}
                    {{--timer: "{!! '5000' !!}",--}}
                    {{--icon: "{!! '/img/error1.png' !!}",--}}
                    {{--buttons: "{!! 'باشه' !!}",--}}
                    {{--// more options--}}
                    {{--});--}}

                })
            }
        });

        $(".login-rating").starRating({
            totalStars: 5,
            starShape: 'rounded',
            starSize: 30,
            emptyColor: 'lightgray',
            hoverColor: 'salmon',
            activeColor: 'crimson',
            useGradient: false,
            readOnly: true
        });
    </script>
@endsection

