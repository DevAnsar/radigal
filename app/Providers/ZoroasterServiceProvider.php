<?php

    namespace App\Providers;

    use Illuminate\Support\Facades\Gate;

    class ZoroasterServiceProvider extends \KarimQaderi\Zoroaster\ZoroasterServiceProvider
    {
        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {
            parent::boot();
            Gate::define('Zoroaster', function ($user) {
                 $one=in_array($user->email, [
                    'ansar@gmail.com',
                    'ansarmirzaye0@gmail.com',
                ]);
                 $two=in_array($user->level,[
                     'admin'
                 ]);

                 if ($one && $two){
                     return true;
                 }else{
                     return false;
                 }

            });


        }

        /**
         * Register any application services.
         *
         * @return void
         */
        public function register()
        {
            parent::register();
        }



    }
