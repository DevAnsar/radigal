<?php

namespace App\Http\Controllers\Home;

use App\Category;
use App\Product;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class searchController extends Controller
{
    public function index($category,$searcchMain){

//        $AllProducts=Product::orderBy('price','desc')->get();
//        $Products=[];
//        $i=1;
//        if (sizeof($category)==1){
//        foreach ($category as $cat){
//                foreach ($AllProducts as $key=>$product){
//                    $product_cat=$product->cat;
//                    if (in_array($cat->id,$product_cat)){
//                        $Products[$i]=$product;
//                        $i++;
//                    }
//                }
//        }
//        }else{
//            $Products=$AllProducts;
//        }

        SEOMeta::setTitle('جستجو');
        OpenGraph::setTitle('جستجو');
        return view('Home.search',compact('category','searchMain'));
    }
    public function search(){
//        parse_str(\request('products'),$prosucts) ;
        $category_id= \request('category_id');
        $search= \request('search');
        $stock= \request('stoce');
//        $count= \request('count');
        $setting= \request('setting');
        $orderby= \request('orderby');


        $order1='id';
        if ($setting == 'قیمت'){
            $order1='price';
        }elseif ($setting== 'جدید ترین'){
            $order1='created_at';
        }elseif ($setting=='پرفروش ترین'){
            $order1='saleCount';
        }
        $order2='';
        if ($orderby=='صعودی'){
            $order2='desc';
        }elseif ($orderby=='نزولی'){
            $order2='asc';
        }
        $category=[];
        if ( $category_id!='0'){
            $cat= Category::find($category_id);
            array_push($category,$cat);
        }else{
            $cat=Category::where('parent','!=','0')->get();
            $category=$cat;
        }



        if ($search==''){
            if ($stock==1){
                $AllProducts=Product::where('stockCount','>','1')->orderBy($order1,$order2)->get();
            }else{
                $AllProducts=Product::orderBy($order1,$order2)->get();
            }
        }else{
            if ($stock==1){
                $AllProducts=Product::
                    where('title','LIKE','%'.$search.'%')
                    ->orWhere('description','LIKE','%'.$search.'%')
                    ->orderBy($order1,$order2)
                    ->where('stockCount','>','1')
                    ->get();
            }else{
                $AllProducts=Product::orderBy($order1,$order2)
                    ->where('title','LIKE','%'.$search.'%')
                    ->orWhere('description','LIKE','%'.$search.'%')
                    ->get();
            }
        }
        $Products=[];
        $i=1;
        if (sizeof($category)==1){
            foreach ($category as $cat){
                foreach ($AllProducts as $key=>$product){
                    $product_cat=$product->cat;
                    if (in_array($cat->id,$product_cat)){
                        $Products[$i]=$product;
                        $i++;
                    }
                }
            }
        }else{
            $Products=$AllProducts;
        }


        return $Products;

    }

    public function searchMain(){
        SEOMeta::setTitle('جستجو');
        OpenGraph::setTitle('جستجو');
        $category=Category::where('parent','!=','0')->get();;
        $searchMain=\request('searchMain');
        return view('Home.search',compact('category','searchMain'));
    }
}
