<style>
    #header {
        background: #fff;
    }

    .shopbasket {
        float: left;
        /*width: 150px;*/
        height: 41px;
        border: 1px solid #67bfb0;
        border-radius: 5px;
        margin: 20px 0 0 0;
        cursor: pointer;
    }

    .basket_icon {
        display: block;
        width: 32px;
        height: 32px;
        float: right;
        background: url(/img/shopping-cart.png) no-repeat center;
        margin-right: 9px;
        margin-top: 4px;
    }

    .basket_count {
        display: block;
        float: left;
        margin-left: 8px;
        margin-top: 6px;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        color: white;
        background: #67bfb0;
        text-align: center;
        line-height: 30px;
    }

    #basket_title {
        color: #67bfb0;
        font-size: 12pt;
        float: right;
        margin-right: 2px;
        line-height: 41px;
    }

    #login, #register {
        color: #6f6f6f;
        font-size: 0.9em;
    }

    #open_login_menu {
        float: left;
        width: 220px;
        text-align: center;
        height: 145px;
        position: absolute;
        background: white;
        border-top: 4px solid #e54a86;
        top: 60px;
        left: 0;
        z-index: 5;
        border-radius: 4px;
        box-shadow: 2px 2px 5px #cbcbcb;
        display: none;
    }

    #open_login_menu::before {
        content: '';
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 9px 12px 9px;
        border-color: transparent transparent #e54a86 transparent;

        position: relative;
        top: -40px;
        left: -55px;
    }

    .btn_main {
        display: block;
        width: 100px;
        height: 42px;
        border-radius: 6px;
        background: #67bfb0;
        text-align: center;
        color: white;
        /*font-size: 16pt;*/
        cursor: pointer;
    }

    .font_gray {
        color: #6f6f6f;
    }

    .font_blue {
        color: #67bfb0;
    }

    #profile_icon {
        display: inline-block;
        width: 32px;
        height: 32px;
        background: url(/img/users.png) no-repeat center;
        float: right;
        margin-right: 20px;
        /* margin-top: 20px; */
    }

    #logo_span {
        display: block;
        /*background: url(/img/757cda6d9ac2a7f0db09c41b83931b53.jpg) no-repeat center;*/
        background: url(/img/radigalSM.png) no-repeat center;
        /*width: 180px;*/
        height: 75px;
    }

    #search_input {

        height: 44px;
        float: left;
        vertical-align: middle;
        border: 1px solid #d5d5d5;
        border-radius: 8px;
        font-size: 12pt;
        color: #969696;
        padding: 0 8px;
        margin-top: 17px;
        background: #e8e8e8;
    }

    #search_icon_back {
        display: block;
        width: 60px;
        height: 44px;
        background: #e54a86;
        position: absolute;
        left: 0;
        margin-top: 17px;
        border-radius: 8px 0 0 8px;
        cursor: pointer;
    }

    #search_icon {
        display: block;
        width: 32px;
        height: 32px;
        background: url(/img/magnifying-glass.png) no-repeat center;
        position: absolute;
        top: 6px;
        left: 14px;
    }

    .nav {
        /*width: 100%;*/
        height: 45px;
        /*background: rgba(135, 42, 97, 0.75);*/
        background: linear-gradient(135deg, rgba(212, 63, 160, 0.75), rgba(123, 40, 87, 0.75) 80%);
        border-bottom: 4px solid rgba(135, 42, 97, 0.91); /*d7e2eb*/

        z-index: 4;
    }

    ul {
        margin: 0;
    }

    li {
        list-style: none
    }

    #menu_level1 {
        float: right;
        width: 96%;
        position: relative;
        padding: 0;
    }

    #menu_level1 > li {
        float: right;
        line-height: 42px;
        width: 145px;
        color: white;
        cursor: pointer;
        text-align: center;
    }

    .border_transition {
        position: absolute;
        display: block;
        margin: auto;
        width: 10px;
        height: 4px;
        bottom: 0;

    }

    #menu_level1 > li.activeMenu {

    }

    /*#menu_level1 > li:hover {
        border-bottom: 4px solid #874356;
        box-shadow: 0 0 2px #874356;
    }*/

    .level2_content {
        /*width: 1300px;*/
        height: 400px;
        background: white;
        margin-top: 4px;
        box-shadow: 2px 2px 5px #cbcbcb;
        position: absolute;
        right: 0;
        display: none;
        z-index: 4;
    }

    .level2_content div:last-child {
        border-left: unset;
    }

    .sub_content {
        width: 311px;
        height: 100%;
        border-left: 1px solid rgba(235, 235, 235, 0.7);
        float: right;
    }

    .sub_content img {
        width: 220px;
        height: 293px;
        float: right;
        position: absolute;
        left: 20px;
        bottom: 20px;
        border-radius: 7px;
        overflow: hidden;
    }

    .menu_level2 {
        color: #6f6f6f;
        padding: unset;
        font-size: 11pt;
    }

    .menu_level2 li {
        color: #6f6f6f;
        padding-right: 20px;
        height: 35px;
        float: right;
        width: 100%;
        text-align: right;
    }

    .login_prop {
        float: right;
        /* margin-right: 8px; */
        /* margin-top: 23px; */
        width: 50%;
        cursor: pointer;
    }
    #enter_site{

    }
</style>
<div id="header" class="container-fluid pb-3 pb-sm-0">
    <div class="row justify-content-center justify-content-sm-between">

        <div class="col-sm-7 col-12">
            <div class="row ">
                <div id="logo" class="col-sm-3">
                    <a style="position: absolute" href="#menu" class="hamburger hamburger--collapse d-sm-none">
                    <span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
                    </a>

                    <a href="{{route('index')}}">
                        <span id="logo_span"></span>
                    </a>
                </div>
                <div id="search" class="col-sm-9 ">
                    <form id="searchMain" method="post" action="{{route('searchMain')}}">
                        {{method_field('post')}}
                        {{csrf_field()}}
                        <div class="row mr-2 ml-0 ">
                            <input name="searchMain" id="search_input" class="form-control  "
                                   placeholder="دنبال چی هستی ...">
                            <span id="search_icon_back" class="ml-3" onclick="">
                                    <span id="search_icon">
                            </span>
                       </span>
                        </div>
                    </form>
                    <script>
                        $('#search_icon_back').click(function () {
                            $('#searchMain').submit();
                        });
                    </script>

                    {{--/////////////////////////////mob////////////////////////////////////--}}
                    <div class="row d-md-none justify-content-end">
                        <div class="col-4">
                            @if(! Auth::check())
                                <div class="row text-center" style="margin-top: 25px">
                                    <div id="enter_site" class="col-12" onclick="openLoginMenu(this)">

                                        <a id="login" class=" ">ورود</a>
                                        <span class=" " style="color: #6f6f6f;font-size: 9pt">/</span>
                                        <a id="register" class=" ">ثبت نام</a>

                                    </div>

                                    <div id="open_login_menu" style="width: 190px;height: 125px">

                                        <a class="btn_main pt-1 font" href="{{route('login')}}"
                                           style="color:#ffffff ;margin-right: 5%;width: 90%;height: 40px">
                                            ورود به رادیگال
                                        </a>

                                        <div style="width: 100%;margin-top: 20px;text-align: center;height: 42px;">
                                            <span class="  font_gray fontmd">
                                            کاربر جدید هستید؟
                                            </span>
                                            <a href="{{route('register')}}" class=" "
                                               style="color:#67bfb0 ;margin-right: 4px">
                                                ثبت نام
                                            </a>
                                        </div>
                                        {{--<span id="profile_icon"></span>--}}
                                        {{--<a href="/" class="  font_gray fontlg"--}}
                                        {{--style="float: right;margin-right: 8px;margin-top: 23px;">پروفایل</a>--}}
                                    </div>
                                </div>
                            @else
                                <div class="row text-center" style="margin-top: 25px">
                                    <div id="enter_site" class="col-sm-12" onclick="openLoginMenu(this)" >
                                        <a id="login" class=" ">پروفایل</a>
                                        <span class=" " style="color: #6f6f6f;font-size: 9pt">/</span>
                                        <a id="register" class=" ">خروج</a>
                                    </div>
                                    <div id="open_login_menu" style="width: 160px;height: 120px">
                                        <div class="row">
                                            <div class="col-12">
                                                <span id="profile_icon"></span>
                                                <a href="{{route('panel')}}" class="login_prop   font_gray fontlg">پروفایل</a>
                                            </div>
                                        </div>
                                        <form class="logout" action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <span id="profile_icon"></span>
                                                    <a class="login_prop   font_gray fontlg" onclick="logout()">خروج</a>
                                                </div>
                                            </div>
                                        </form>
                                        <script>
                                            function logout() {
                                                $('form.logout').submit();
                                            }
                                        </script>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="col-4">
                            <a href="{{route('basketShow')}}">
                            <span class="shopbasket">
                                <span class="basket_icon"></span>
                                <span class="  basket_count"></span>
                            </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        {{--///////////////////////pc////////////////////////////////////////////////////////--}}
        <div class="col-sm-4 d-none d-md-block">
            <div class="row justify-content-between">
                <div class=" col-sm-5 ">
                    @if(! Auth::check())
                        <div class="row text-center" style="margin-top: 25px">
                            <div id="enter_site" class="col-sm-12" onclick="openLoginMenu(this)" style="cursor: pointer">

                                <a id="login" class=" ">ورود</a>
                                <span class=" " style="color: #6f6f6f;font-size: 9pt">/</span>
                                <a id="register" class=" ">ثبت نام</a>

                            </div>

                            <div id="open_login_menu">

                                <a class="btn_main  pt-1 fontmd" href="{{route('login')}}"
                                   style="color:#ffffff ;margin-right: 4%;width: 92%">
                                    ورود به رادیگال
                                </a>

                                <div style="width: 100%;margin-top: 20px;text-align: center;height: 42px;">
                                    <span class="  font_gray fontmd">
                                    کاربر جدید هستید؟
                                    </span>
                                    <a href="{{route('register')}}" class=" "
                                       style="color:#67bfb0 ;margin-right: 4px">
                                        ثبت نام
                                    </a>
                                </div>
                                {{--<span id="profile_icon"></span>--}}
                                {{--<a href="/" class="  font_gray fontlg"--}}
                                {{--style="float: right;margin-right: 8px;margin-top: 23px;">پروفایل</a>--}}
                            </div>
                        </div>
                    @else
                        <div class="row text-center" style="margin-top: 25px">
                            <div id="enter_site" class="col-sm-12" onclick="openLoginMenu(this)" style="cursor: pointer">
                                <a id="login" class=" ">پروفایل</a>
                                <span class=" " style="color: #6f6f6f;font-size: 9pt">/</span>
                                <a id="register" class=" ">خروج</a>
                            </div>
                            <div id="open_login_menu">
                                <div class="row">
                                    <div class="col-12">
                                        <span id="profile_icon"></span>
                                        <a href="{{route('panel')}}" class="login_prop   font_gray fontlg">پروفایل</a>
                                    </div>
                                </div>
                                <form class="logout" action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <span id="profile_icon"></span>
                                            <a class="login_prop   font_gray fontlg" onclick="logout()">خروج</a>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                    function logout() {
                                        $('form.logout').submit();
                                    }
                                </script>
                            </div>
                        </div>
                    @endif
                </div>

                <div class=" col-md-7">
                    <a href="{{route('basketShow')}}">
                            <span class="shopbasket">
                                <span class="basket_icon"></span>
                                <div class=" d-md-none d-lg-inline-block">
                                    <span id="basket_title" class=" ">سبد خرید</span>
                                </div>
                                <span class="  basket_count">

                                </span>
                            </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row d-none d-sm-block nav justify-content-center">
        <div class="col-sm-12 pr-sm-5">

            <?php
            $categories = \App\Category::all();
            $i = 0;
            $categories_main = [];
            foreach ($categories as $key => $category) {
                if ($category->parent == 0) {
                    $categories_main[$i]['l1'] = $category;
                    $categories_main[$i]['l2']=[];
                    foreach ($categories as $key2 => $cat) {
                        if ($cat->parent == $category->id) {
                            $categories_main[$i]['l2'][$key2] = $cat;
                        }
                    }
                    $i++;
                }


            }
            ?>
            <ul id="menu_level1" class="mr-sm-5">
                @foreach($categories_main as $key=>$category)
                    <li data-time="{{$key}}">
                        <a>
                            {{$category['l1']['title']}}
                        </a>
                        <span class="border_transition"></span>
                        <div class="level2_content col-sm-11">

                            <div class="sub_content">
                                <ul class="menu_level2">
                                    @foreach($category['l2'] as $cat)
                                        <li>
                                            <a href="{{route('search',['categorySlug'=>$cat->slug,'searchMain'=>' '])}}">{{$cat->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="sub_content"></div>
                            <div class="sub_content"></div>
                            <div class="sub_content">
                                <img src="/img/d2f1cd5e9bafed5e0e8218b29841b01f.jpg">
                            </div>

                        </div>

                    </li>
                @endforeach
            </ul>

        </div>
    </div>

</div>
<script>
    function openLoginMenu(tag) {
        var divTag = $(tag);
        divTag.parents('div').find('#open_login_menu').fadeToggle();
    }

    var timer = {};

    $('#menu_level1 > li').hover(function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            tag.find('.level2_content').show();
            tag.css('border-bottom', '4px solid #e54a86');
            tag.css('box-shadow', '0 0 2px #581b40');
        }, 400);
    }, function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            tag.find('.level2_content').hide();
            tag.css('border-bottom', 'unset');
            tag.css('box-shadow', 'unset');
        }, 400);

    });
</script>


<script>
    jQuery(document).ready(function ($) {
        $("#menu").mmenu({
            "extensions": [
                "pagedim-black",
                "position-right"
            ]
        }, {
            language: "fa"
        });
    });
</script>
<nav id="menu" class="d-md-none">
    <ul>
        <li><a href="/">صفحه اصلی</a></li>
        @foreach($categories_main as $key=>$category)
            <li><a>{{$category['l1']['title']}}</a>
                <ul>
                    @foreach($category['l2'] as $cat)
                        <li><a href="{{route('search',['categorySlug'=>$cat->slug,'search'=>' '])}}">{{$cat->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</nav>