<style>
    #footer {
        float: right;
        font-family: IranSans;
        margin-top: 20px;
    }

    .footer_h {
        border-top: 1px solid #d7dadc;
    }

    .footer_h .email, .footer_h .tel {
        float: right;
        font-size: 12pt;
        color: #6f6f6f;
        margin-left: 15px;
        line-height: 52px;
    }

    .footer_h p {
        margin: 0;
        float: right;
        color: #6f6f6f;
        font-size: 12pt;
        /*margin-left: 40px;*/
        line-height: 52px;
    }
    /*.footer_c::before {*/
        /*content: '';*/
        /*clear: both;*/
        /*display: block;*/
    /*}*/
    .footer_c ul {
        /*width: 300px;*/
        /*height: 150px;*/
        /*float: right;*/
        padding: 0;
        /*margin-top: 40px;*/
        /*margin-right: 40px;*/
    }

    .footer_c ul li {
        width: 100%;
        height: 30px;
        font-size: 11pt;
        /*margin-right: 20px;*/
    }

    .footer_c ul li:first-child {
        font-size: 13pt;
        color: #575757;
    }
    .recieve_email span {
        display: block;
        margin-top: 30px;

    }

    .recieve_email input {
        float: right;
        /*width: 330px;*/
        height: 40px;
        border: 1px solid #d5d5d5;
        border-radius: 5px;
        padding-right: 8px;
        top: 45px;

    }

    .recieve_email .sendBtn {
        height: 39px;
        width: 75px;
        background: #67bfb0;
        position: absolute;
        left: 0;
        /* top: 54px; */
        border-radius: 5px 0 0 5px;
        line-height: 36px;
        text-align: center;
        color: white;
        margin: 0;
        cursor: pointer;
        transition: background-color 300ms ease;
        float: left;
        /* right: 254px; */
    }

    .sendBtn:hover {
        background: #559d90;
    }

    .site_social i {
        display: block;
        width: 32px;
        height: 32px;
        margin-right: 10px;
        cursor: pointer;
    }

</style>
<div class="container-fluid" id="footer">
    <div style="background: #eceff1;" class="row h-auto footer_h justify-content-center">
        <div class="col-md-10">
            <div class="row ">
                <div class="col-sm-4">
                    <div class="row justify-content-center">
                <span class="email">
                آدرس ایمیل :
            </span>
                        <p>
                            {{\App\Setting::whereIndex('email')->first()['value']}}
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row justify-content-center">
                <span class="tel">
                شماره تماس :
            </span>
                        <p>
                            {{\App\Setting::whereIndex('tell')->first()['value']}}
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="row justify-content-center">
                        <p >
                            {{\App\Setting::whereIndex('message')->first()['value']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div  style=" background: #eceff1;" class="row justify-content-center pb-3">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4  mt-3 mt-md-3 footer_c "  >
                    <div class="row justify-content-center">
                        <ul>
                            <?php
                            $columns1=\App\Column1footer::all();
                            ?>
                            @foreach($columns1 as $key1=>$column1)
                                <li>
                                    <?php
                                    if ($key1==0){
                                    ?>
                                    <a>{{$column1->title}}</a>
                                    <?php
                                    }else{
                                    ?>
                                    <a href="{{route('showpage',['page'=>$column1->page_id])}}">{{$column1->title}}</a>
                                    <?php
                                    }
                                    ?>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4  mt-md-3 footer_c "  >
                    <div class="row justify-content-center">
                        <ul>
                            <?php
                            $columns2=\App\Column2footer::all();
                            ?>
                            @foreach($columns2 as $key2=>$column2)
                                <li>
                                    <?php
                                    if ($key2==0){
                                    ?>
                                    <a>{{$column2->title}}</a>
                                    <?php
                                    }else{
                                    ?>
                                    <a href="{{$column2->url}}">{{$column2->title}}</a>
                                    <?php
                                    }
                                    ?>

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class=" col-md-4 mt-md-3 footer_c">
                    {{--<div class="row recieve_email ">--}}
                    {{--<div class="col-sm-10">--}}
                    {{--<div class="row">--}}
                    {{--<span style="font-size: 11pt">--}}
                    {{--برای اطلاع از خبرهای سایت ایمیل خود را وارد کنید :--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--<div class="row" style="position: relative">--}}
                    {{--<input type="text" class="form-control">--}}
                    {{--<span class="sendBtn">--}}
                    {{--ارسال--}}
                    {{--</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="row site_social mt-2 justify-content-center">

                        @php
                            use Carbon\Carbon;
                            if (cache()->has('instagram')){
                                 $instagram=cache('instagram');
                             }else{
                                 $instagram=\App\Setting::whereIndex('instagram')->first()['value'];
                                 cache(['instagram'=>$instagram],Carbon::now()->addMonth(5));
                             }
                            if (cache()->has('twitter')){
                                 $twitter=cache('twitter');
                             }else{
                                $twitter=\App\Setting::whereIndex('twitter')->first()['value'];
                                 cache(['twitter'=>$twitter],Carbon::now()->addMonth(5));
                             }
                            if (cache()->has('telegram')){
                                 $telegram=cache('telegram');
                             }else{
                                 $telegram=\App\Setting::whereIndex('telegram')->first()['value'];
                                 cache(['telegram'=>$telegram],Carbon::now()->addMonth(5));
                             }
                        @endphp
                        <a href="{{$instagram}}">
                            <i class="instagram" style="background: url(/img/instagram.png) no-repeat center"></i>
                        </a>
                        <a href="{{$twitter}}">
                            <i class="twitter" style="background: url(/img//twitter.png) no-repeat center"></i>
                        </a>
                        <a href="{{$telegram}}">
                            <i class="telegram" style="background: url(/img//telegram.png) no-repeat center"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>