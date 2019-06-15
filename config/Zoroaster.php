<?php


    use KarimQaderi\Zoroaster\Http\Middleware\CheckLogin;

    return [


        /*
       |--------------------------------------------------------------------------
       نام برنامه |
       |--------------------------------------------------------------------------
       */

        'name' => 'پنل مدریت' ,


        /*
        |--------------------------------------------------------------------------
        مسیر Resources |
        |--------------------------------------------------------------------------
        */

        'Resources' => app_path('Zoroaster/Resources') ,


        /*
        |--------------------------------------------------------------------------
        مسیر ادرس بخش پنل ادمین |
        |--------------------------------------------------------------------------
        برای مثال |
        | http://127.0.0.1:8000/Zoroaster
        به این تبدیل کنید |
        | http://127.0.0.1:8000/Admin
        */

        'path' => '/alirad' ,


        /*
        |--------------------------------------------------------------------------
        | Zoroaster Route Middleware
        |--------------------------------------------------------------------------
        */

        'middleware' => [
            'web' ,
            CheckLogin::class

        ] ,


        /*
        |--------------------------------------------------------------------------
        فعال یا غیرفعال کردن Resource permission |
        |--------------------------------------------------------------------------
        برای احراز هویت است |
        */

        'permission' => false ,


        /*
        |--------------------------------------------------------------------------
        مسیر Assets |
        |--------------------------------------------------------------------------
        */

        'assets_path' => '/Zoroaster-assets/Zoroaster/assets' ,

    ];