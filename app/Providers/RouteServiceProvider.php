<?php

namespace App\Providers;

use App\Category;
use App\Order;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

//        Route::bind('productSlug',function ($value){
//            if (cache()->has('product_'.$value.'')){
//                $product=cache('product_'.$value.'');
//            }else{
//                $product=Product::whereSlug($value)->firstOrFail();
//                cache(['product_'.$value.''=>$product],Carbon::now()->addHour(72));
//            }
//            return $product;
//        });

        Route::bind('orderId',function ($value){
            if ($value!=0){
                return Order::whereId($value)->firstOrFail();
            }else{
                return 0;
            }
        });

        Route::bind('categorySlug',function ($value){

            $category=[];
            if ( $value!='all'){
                $cat= Category::whereSlug($value)->first();
                array_push($category,$cat);
            }else{
                $cat=Category::where('parent','!=','0')->get();
                $category=$cat;
            }

            return $category;
        });

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
