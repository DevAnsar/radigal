<?php

namespace App\Http\Controllers\Home;

use App\Category;
use App\Product;
use App\slider;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function index(){
//        User::create([
//            'name'=>'ansar',
//            'level'=>'admin',
//            'email'=>'ansar@gmail.com',
//            'password'=>bcrypt(123456),
//        ]);

//        Category::create([
//            'title'=>'داستان کوتاه',
//        ]);


//        if (cache()->has('slider')){
//            $slider=cache('slider');
//        }else{
//            $slider=Slider::latest()->get();
//            cache(['slider'=>$slider],Carbon::now()->addMinute(5));
//        }
//        if (cache()->has('news')){
//            $news=cache('news');
//        }else{
//            $news=Product::latest()->take(15)->get();
//            cache(['news'=>$news],Carbon::now()->addMinute(5));
//        }
//        if (cache()->has('sales')){
//            $sales=cache('sales');
//        }else{
//            $sales=Product::latest('saleCount')->take(15)->get();
//            cache(['sales'=>$sales],Carbon::now()->addMinute(5));
//        }
//        if (cache()->has('views')){
//            $views=cache('views');
//        }else{
//            $views=Product::latest('viewCount')->take(15)->get();
//            cache(['views'=>$views],Carbon::now()->addMinute(5));
//        }

//        SEOMeta::setTitle();
//        SEOMeta::setDescription();
//
//        OpenGraph::setDescription();
//        OpenGraph::setTitle();


        $slider=Slider::latest()->get();
        $news=Product::latest()->take(15)->get();
        $sales=Product::latest('saleCount')->take(15)->get();
        $views=Product::latest('viewCount')->take(15)->get();


        return view('Home.index',compact('news','sales','slider','views'));
    }
}
