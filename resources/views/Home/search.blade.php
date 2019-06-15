@extends('Home.master')

@section('content')
    <style>
        #category_res, .by_cat {
            border: 1px solid #dcdcdc;
            width: 100%;
            float: right;
            background: white;
            color: #6f6f6f;
            /*margin-bottom: 15px;*/
        }

        #category_res p {
            /*border-bottom: 1px solid #e2e2e2;*/
            float: right;
            /* width: 235px; */
            margin: 0;
            height: 42px;
            line-height: 42px;
            /* padding-right: 15px; */
        }

        .by_cat p {
            /*border-bottom: 1px solid #e2e2e2;*/
            float: right;
            width: 235px;
            margin: 0;
            height: 42px;
            line-height: 42px;
            /*padding-right: 15px;*/
            font-size: 14pt;
        }

        .by_cat input[type=checkbox] {
            float: right;
            width: 25px;
            height: 25px;
            cursor: pointer;
            opacity: 0;
        }

        .instead_check {
            display: block;
            float: right;
            width: 25px;
            height: 25px;
            border-radius: 100%;
            border: 1px solid #4d8f84;
            margin-right: -30px;
        }

        .checked {
            background: #67bfb0 url(/img/check-mark.png) no-repeat center !important;
        }


    </style>
    <div class="container">

            <div class="col-sm-3 content_right pr-0 pl-0 mt-sm-4" style="float: right;">
                <div class="row justify-content-center justify-content-sm-start">

                    <!--/////////////////////////////////////////////////////////////////-->
                    <div class="col-11 mt-1 mb-1 " id="category_res">
                        <p class="fontssm">
                            دسته بندی نتایج:
                        </p>
                        <?php
                        if (sizeof($category) == 1) {
                            echo '<p class="fontssm" style="margin-right: 5px">' . \App\Category::find($category[0]->parent)->title . '</p><p class="fontssm">/</p><p class="fontssm">' . $category[0]->title . '</p>';
                        } else {
                            echo '<p class="fontssm">همه</p>';
                        }
                        ?>
                    </div>
                </div>

                <!--//////////////////////////////pc-start///////////////////////////////////-->
                <div class="row d-none d-sm-inline-block mb-sm-4 mt-sm-4">
                    <div class=" col-sm-11 mb-0  by_cat">
                        <p>
                            بر اساس دسته بندی
                        </p>
                    </div>

                    <a href="{{route('search',['categorySlug'=>'all','search'=>' '])}}">
                        <div class=" col-sm-11 pt-sm-2 pb-sm-1 border-bottom-0 border-top-0 by_cat">
                            <input class="real_checkbox" type="checkbox">
                            <?php

                            if (sizeof($category) > 1) {
                                echo '<input type="hidden" name="category_id"  value="0">';
                            }

                            ?>
                            <span class="instead_check <?php

                            if (sizeof($category) > 1) {
                                echo 'checked';
                            }

                            ?> "></span>
                            همه
                        </div>
                    </a>

                    <?php
                    $categories = \App\Category::where('parent', '!=', '0')->get();
                    ?>

                    @foreach($categories as $cat)
                        <a href="{{route('search',['categorySlug'=>$cat->slug,'search'=>' '])}}">
                            <div class=" col-sm-11 pt-sm-2 pb-sm-1 border-bottom-0 border-top-0 by_cat">

                                <input class="real_checkbox" type="checkbox">

                                <?php
                                if (sizeof($category) == 1) {
                                    if ($cat->id == $category[0]->id) {
                                        echo '<input type="hidden" name="category_id"  value="' . $cat->id . '">';
                                    }
                                }
                                ?>

                                <span class="instead_check  <?php
                                if (sizeof($category) == 1) {
                                    if ($cat->id == $category[0]->id) {
                                        echo 'checked';
                                    }
                                }

                                ?> "></span>
                                {{$cat->title}}
                            </div>
                        </a>

                    @endforeach

                </div>
                <!--////////////////////////////////pc-center/////////////////////////////////-->
            {{--<div class="row d-none d-sm-inline-block mb-sm-4 mt-sm-4">--}}
            {{--<div  class=" col-sm-11 mb-0  by_cat">--}}
            {{--<p>--}}
            {{--بر اساس ناشر--}}
            {{--</p>--}}
            {{--</div>--}}

            {{--<div class=" col-sm-11 pt-sm-2 pb-sm-1 border-bottom-0 border-top-0 by_cat">--}}
            {{--<input class="real_checkbox" type="checkbox">--}}
            {{--<span class="instead_check checked" ></span>--}}
            {{--همه--}}
            {{--</div>--}}
            {{--<div class=" col-sm-11 pt-sm-2 pb-sm-1 border-bottom-0 border-top-0 by_cat">--}}
            {{--<input class="real_checkbox" type="checkbox">--}}
            {{--<span class="instead_check"></span>--}}
            {{--نیلوفر--}}
            {{--</div>--}}
            {{--<div class="col-sm-11 pt-sm-1 pb-sm-1 border-bottom-0 border-top-0 by_cat">--}}
            {{--<input class="real_checkbox" type="checkbox">--}}
            {{--<span class="instead_check"></span>--}}
            {{--امیرکبیر--}}
            {{--</div>--}}
            {{--<div class=" col-sm-11 pt-sm-1 pb-sm-2 border-bottom-0 border-top-0 by_cat">--}}
            {{--<input class="real_checkbox" type="checkbox">--}}
            {{--<span class="instead_check"></span>--}}
            {{--چشمه--}}
            {{--</div>--}}
            {{--<div class=" col-sm-11 pt-sm-1 pb-sm-2 border-bottom-0 border-top-0 by_cat">--}}
            {{--<input class="real_checkbox" type="checkbox">--}}
            {{--<span class="instead_check"></span>--}}
            {{--ماهی--}}
            {{--</div>--}}
            {{--</div>--}}
            <!--///////////////////////////////pc-end//////////////////////////////////-->


                <!--///////////////////////////////mob-start//////////////////////////////////-->
            {{--<div class="row  d-sm-none mb-2 mt-2 justify-content-around">--}}
            {{--<div  class=" col-5 mb-0  ">--}}
            {{--<select name="" class="form-control" >--}}
            {{--<option value="" selected>--}}
            {{--بر اساس ناشر: همه--}}
            {{--</option>--}}
            {{--<option value="">--}}
            {{--نیلوفر--}}
            {{--</option>--}}
            {{--<option value="">--}}
            {{--امیرکبیر--}}
            {{--</option>--}}
            {{--<option value="">--}}
            {{--چشمه--}}
            {{--</option>--}}
            {{--<option value="">--}}
            {{--ماهی--}}
            {{--</option>--}}
            {{--</select>--}}
            {{--</div>--}}
            {{--<div  class=" col-5 mb-0  ">--}}
            {{--<select name="category" id="" class="form-control" >--}}
            {{--<option value="" selected>--}}
            {{--بر اساس دسته بندی: همه--}}
            {{--</option>--}}
            {{--@foreach($categories as $category)--}}
            {{--<option value="{{$category->id}}">--}}
            {{--{{$category->title}}--}}
            {{--</option>--}}
            {{--@endforeach--}}

            {{--</select>--}}
            {{--</div>--}}
            {{--</div>--}}
            <!--/////////////////////////mob-end/////////////////////////////////-->

            </div>
            {{--<script>--}}
            {{--$('.real_checkbox').click(function () {--}}
            {{--if ($(this).is(':checked')) {--}}
            {{--var id=$(this).parent('div').find('input[name="categories"]').attr('data-id');--}}
            {{--$(this).parent('div').find('input[name="categories"]').val(id);--}}
            {{--$(this).parent('div').find('.instead_check').addClass('checked');--}}
            {{--}--}}
            {{--else {--}}
            {{--$(this).parent('div').find('.instead_check').removeClass('checked');--}}
            {{--}--}}
            {{--});--}}
            {{--</script>--}}


            <style>
                .content_left {
                    background: white;
                    border: 1px solid #dcdcdc;
                }

                #filter_top {
                    /* width: 100%; */
                    /* float: right; */
                    padding: 20px 0;
                    border-bottom: 1px solid #e2e2e2;
                    /* position: relative; */
                }

                #search_word {
                    /* width: 300px; */
                    height: 40px;
                    border: 1px solid #dcdcdc;
                    border-radius: 13px;
                    /* margin-right: 20px; */
                    font-family: IranSans;
                    color: #a0a0a0;
                    /* padding-right: 8px; */
                    /* float: left; */
                }

                #search_word_icon {
                    display: block;
                    width: 32px;
                    height: 32px;
                    position: absolute;
                    left: 19px;
                    /* right: 295px; */
                    top: 5px;
                    background: url(/img/searchq.png) no-repeat center;
                    cursor: pointer;
                }

                #existBtn {
                    display: block;
                    position: relative;
                    float: right;
                    /*margin-right: 20px;*/
                    width: 32px;
                    height: 32px;
                    margin-top: 4px;
                    cursor: pointer;
                }

                #noExist {
                    display: block;
                    position: absolute;
                    float: right;
                    width: 32px;
                    height: 32px;
                    background: url(/img/switchno.png) no-repeat center;
                }

                .yesExist {
                    background: url(/img/switchyes.png) no-repeat center !important;
                }

                #show_mode {
                    float: left;
                    width: 200px;
                    padding: 0 20px;
                }

                #table_mode {
                    display: block;
                    float: left;
                    width: 32px;
                    height: 32px;
                    background: url(/img/tableact.png) no-repeat center;
                    margin-right: 8px;
                    margin-top: 5px;
                    cursor: pointer;
                }

                .deactiveTable {
                    background: url(/img/tabledeact.png) no-repeat center !important;
                }

                #row_mode {
                    display: block;
                    float: left;
                    width: 32px;
                    height: 32px;
                    background: url(/img/rowdeact.png) no-repeat center;
                    margin-right: 8px;
                    margin-top: 5px;
                    cursor: pointer;
                }

                .activeRow {
                    background: url(/img/rowact.png) no-repeat center !important;
                }

                #show_mode p {
                    margin-top: 10px;
                    color: #6f6f6f;
                    font-size: 10pt;
                    float: left;
                }

                #sort_by span {
                    /*margin-right: 20px;*/
                    color: #6f6f6f;
                }

                #sort_by select, #sort_by option {
                    font-family: IranSans;
                    color: #6f6f6f;

                }

                #sort_by select {
                    border-radius: 5px;
                    border: 1px solid #dcdcdc;
                }
            </style>
            <style>

                #search_res a {
                    float: right;
                    width: 100%;
                    height: 100%;
                    text-align: center;
                    cursor: pointer;
                    border-radius: 10px;
                    border: 1px solid rgba(186, 191, 178, 0.44);
                    text-decoration: none;
                }

                #search_res .oldul .oldli a:hover {
                    box-shadow: 0 0 25px #a8a8a8;
                }

                #search_res img {
                    max-width: 85%;
                    margin-top: 8px;
                    border-radius: 4px;
                    margin-bottom: 10px;
                }

                #search_res p {
                    margin: 0;
                    width: 100%;
                    padding: 0 15px 0 10px;
                }

                #search_res .bookname {
                    color: #6f6f6f;
                }

                #search_res .writername {
                    color: #767676;
                }

                #search_res .nasher_num {
                    color: #898989;
                }

                .star_rating {
                    display: inline-block;
                    /* float: left; */
                    width: 120px;
                    height: 24px;
                    background: url(/img/stargray.png) repeat;
                    margin: 15px 0;
                    /* margin-left: 100px; */
                    position: relative;
                }

                .tozih {
                    display: none;
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
                    background: url(/img/starred.png) repeat;
                    position: absolute;
                    left: 0;
                }

                #search_res .price {
                    color: #6f6f6f;
                }

            </style>
            <style>
                /*#pager {*/
                /*width: 100%;*/
                /*float: right;*/
                /*padding: 20px 0;*/
                /*}*/

                #next_page {
                    display: block;
                    float: left;
                    width: 24px;
                    height: 24px;
                    background: url(/img/nextpage.png) no-repeat center;
                    margin: 0 10px 0 20px;
                    cursor: pointer;
                }

                #pager ul {
                    padding: 0;
                    float: left;
                }

                #pager ul li {
                    float: right;
                    width: 24px;
                    height: 24px;
                    text-align: center;
                    cursor: pointer;
                    border-radius: 8px;
                    color: #6f6f6f;
                    font-size: 14pt;
                    line-height: 27px;
                    margin: 0 8px;
                }

                #pager ul li.activePage {
                    box-shadow: 0 0 25px #a8a8a8;
                }

                #prev_page {
                    display: block;
                    float: left;
                    width: 24px;
                    height: 24px;
                    background: url(/img/prevpage.png) no-repeat center;
                    margin: 0 10px 0 20px;
                    cursor: pointer;
                }
            </style>
            <div class="col-sm-9 content_left mt-sm-4" style="float: left">

                <form name="filter" method="post">
                    {{method_field('POST')}}
                    {{csrf_field()}}
                    <div class="row mt-sm-3 mb-sm-3 " id="filter_top">

                        <div class="col-12 mb-4 col-sm-5">
                            <input  name="search" class="form-control fontmd" id="search_word" type="text"
                                   placeholder="جست و جو بر اساس کلمه..."
                                   <?php
                                           if (isset($searchMain)){
                                   ?>
                                   value="{{$searchMain}}"
                                   <?php
                                    }
                                    ?>

                            >
                            <span id="search_word_icon"></span>
                        </div>
                        <div class="col-6 mb-4  col-sm-4">
                            <span id="existBtn">
                                <span id="noExist"></span>
                            </span>
                            <span class="fontsssm marg-t-3 mr-1" style="float: right;color: #6f6f6f;">
                                          فقط نمایش محصولات موجود
                            </span>
                            <input type="hidden" name="stoce" value="0">

                        </div>
                        {{--<div class="col-5 mb-4 pr-0 pl-0  col-sm-3 text-sm-left fontssm pl-md-4">--}}
                    {{--<span>--}}
                                            {{--تعداد نمایش--}}
                    {{--</span>--}}
                            {{--<select name="count" class="form-control fontmd" style="width: 60%;display: inline-block">--}}
                                {{--<option data-count="24">--}}
                                    {{--24--}}
                                {{--</option>--}}
                                {{--<option data-count="36">--}}
                                    {{--36--}}
                                {{--</option>--}}
                                {{--<option data-count="48">--}}
                                    {{--48--}}
                                {{--</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        <div class="col-12 mb-4  col-sm-12 mt-sm-3">
                            <div id="sort_by">
                            <span class="fontComment">
                                مرتب سازی بر اساس
                            </span>
                                <select name="setting" class="form-control fontSelect" style="width: 35%;display: inline-block">
                                    <option data-option="1">
                                        قیمت
                                    </option>
                                    <option data-option="2">
                                        جدید ترین
                                    </option>
                                    <option data-option="3">
                                        پرفروش ترین
                                    </option>
                                </select>

                                <select name="orderby" class="form-control fontSelect" style="width: 27%;display: inline-block">
                                    <option data-option="1">صعودی</option>
                                    <option data-option="2">نزولی</option>
                                </select>
                            </div>
                        </div>
                        {{--<div class="col-11 mb-3  col-sm-4 mt-sm-3 text-left ">--}}
                            {{--<div class="btn btn-danger form-control submitBtn">--}}
                                {{--اعمال تغییرات--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>
                </form>


                <!--////////////////////////////////////////////////////////////////////-->
                <div class="row mt-4 mb-4" id="search_res">
                    <div class="col-12">
                        <div class="row oldul justify-content-center">
                            {{--@foreach($Products as $product)--}}
                                {{--<div class="col-6 col-sm-4 oldli mb-4 pl-2 pr-2">--}}
                                    {{--<a href="{{route('productShow',['productSlug'=>$product->slug])}}">--}}
                                        {{--<img src="/storage/{{$product->images[0]['url']}}">--}}
                                        {{--<p class="bookname">--}}
                                            {{--{{$product->title}}--}}
                                        {{--</p>--}}
                                        {{--<p class="writername">--}}
                                            {{--{{$product->description}}--}}
                                        {{--</p>--}}
                                        {{--<p class="nasher_num">--}}
                                        {{--نام ناشر - شماره چاپ--}}
                                        {{--</p>--}}
                                        {{--<span class="star_rating">--}}
                                        {{--<span class="gray_star"></span>--}}
                                        {{--<span class="red_star"></span>--}}
                                        {{--</span>--}}
                                        {{--<p class="price">--}}
                                            {{--{{$product->price}}--}}
                                            {{--تومان--}}
                                        {{--</p>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<input type="hidden" name="products[]" value="{{$product}}">--}}
                            {{--@endforeach--}}

                        </div>
                    </div>
                </div>
                <!--///////////////////////////////////////////////////////////////////////-->

                {{--<div class="row" id="pager">--}}
                {{--<div class="col-12 col-sm-12 mt-5 mb-4 text-center">--}}
                {{--<span id="next_page"></span>--}}
                {{--<ul>--}}
                {{--<li class="activePage">--}}
                {{--1--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--2--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--<span id="prev_page"></span>--}}
                {{--</div>--}}
                {{--</div>--}}


            </div>



    </div>
@endsection

{{--<div class="col-6 col-sm-4 oldli mb-4 pl-2 pr-2"><a href="{{route('productShow',['productSlug'=>$product->slug])}}"><img src="/storage/{{$product->images[0]['url']}}"><p class="bookname">{{$product->title}}</p><p class="writername">{{$product->description}}</p><p class="price">{{$product->price}}</p></a></div>--}}

@section('js')
    <script>
        $('#existBtn').click(function () {
            var btn = $(this).find('#noExist');
            if (btn.hasClass('yesExist')) {
                btn.removeClass('yesExist');
                $('input[name="stoce"]').val('0');

            } else {
                btn.addClass('yesExist');
                $('input[name="stoce"]').val('1');
            }
            getProduct();
        });
        $('select[name="setting"]').change(function () {
            getProduct();
        });
        $('select[name="orderby"]').change(function () {
            getProduct();
        });
        $('#search_word_icon').click(function () {
            getProduct();
        });

        function getProduct(){
            startLoader();
            // let products = $('input[name="products[]"]').serialize();
            let category_id = $('input[name="category_id"]').val();
            let _token = $('input[name="_token"]').val();
            let search = $('input[name="search"]').val();
            let stoce = $('input[name="stoce"]').val();
            // let count = $('select[name="count"]').val();
            let setting = $('select[name="setting"]').val();
            let orderby = $('select[name="orderby"] ').val();
            let formData = new FormData();
            // formData.append('products', products);
            formData.append('category_id', category_id);
            formData.append('search', search);
            formData.append('stoce', stoce);
            // formData.append('count', count);
            formData.append('setting', setting);
            formData.append('orderby', orderby);
            $.ajax({
                method: 'POST',
                url: '/search',
                data: formData,
                contentType: false,
                processData: false,
                headers: {'X-CSRF-TOKEN': _token}
            }).done(function (msg) {
                // console.log(msg);
                var status=0;
                $('.oldul').html('');
                $.each(msg, function (index, value) {
                    console.log(index);
                    var tag = "<div class='col-6 col-sm-4 oldli mb-4 pl-2 pr-2 ' style='color: rgba(135, 42, 97, 0.75)'><a class='pt-1 pt-md-2 pb-1 pb-md-2' href='/product/"+value['slug']+"'><img src='/storage/"+value['images'][0]['url']+"'><p class='bookname fontsm mb-2'>"+value['title']+"</p><p class='writername fontssm d-none d-md-inline-block'>"+value['description']+"</p><p class='price fontPrice mt-md-2' style='color: #e54a86;'>"+value['price']/1000+" هزار تومان</p></a></div>";
                    status=1;
                    $('.oldul').append(tag);
                });

                endLoader();
                if (status==0){
                    var tag2="<div class='col-11 text-center p-5' style=\"color: #ff2953;background: rgba(255,41,83,0.12)\"> هیچ محصولی با مقادیر وارد شده یافت نشد</div>";
                    $('.oldul').append(tag2);
                }
            });
        }
        getProduct();

        // $('.submitBtn').click(function () {
        //     getProduct();
        // });


    </script>
@endsection