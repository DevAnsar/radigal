<?php

namespace App\Http\Controllers\Home;
use App\Category;
use App\Comment;
use App\Product;
use App\Http\Controllers\Controller;
use App\Rating;

use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Carbon\Carbon;
use Illuminate\Http\Request;


class productController extends Controller
{



    public function show($productSlug){
        $product=Product::whereSlug($productSlug)->firstOrFail();
        SEOMeta::setTitle($product->title);
        SEOMeta::setDescription($product->description);
        SEOMeta::addMeta('product:published_time', $product->created_at->toW3CString(), 'product_published_time');
        SEOMeta::addMeta('product:category', $product->categories, 'product_category');
        SEOMeta::addKeyword($product->getTags());

        OpenGraph::setDescription($product->description);
        OpenGraph::setTitle($product->title);
        OpenGraph::setUrl($product->path());
        OpenGraph::addProperty('type', 'product');

        $products_random=Product::latest()->take(25)->get();
//        return $products_random;
        $i=0;
        $products_cat=[];
        foreach ($product->cat as $cat){
//            $product_cat[$key]=Category::find($cat)['id'];
            foreach ($products_random as $product_random){
                if (in_array($cat,$product_random->cat)){
                    $products_cat[$i]=$product_random;
                    $i++;
                }
        }
        }
        $products_cat=array_unique($products_cat);
//        return $products_cat;

        $viewCount=$product->viewCount +1 ;
        $product->update([
            'viewCount'=>$viewCount
        ]);
        $comments=Comment::whereProduct_id($product->id)->whereParent(0)->get();
        $ratings=Rating::whereProduct_id($product->id)->select('rating')->get();
        if (sizeof($ratings)>0){
        $ratingsSum=0;
        foreach ($ratings as $rating){
            $ratingsSum+=$rating['rating'];
        }
       $ratingsNum=$ratingsSum/sizeof($ratings);
        }else{
            $ratingsNum=0;
        }
//        return$comments;
        return view('Home.product',compact('product','comments','ratingsNum','products_cat'));
    }
    public function productStar(){

        $currentRating=\request('currentRating');
        $product_id=\request('product_id');
        $user_id=auth()->user()->id;

        $rating=Rating::whereUser_idAndProduct_id($user_id,$product_id)->get();
//        return sizeof($rating);
        if (sizeof($rating)>0){
            $rating[0]->update([
               'rating' => $currentRating
            ]);
        }else{
            Rating::create([
                'user_id'=>$user_id,
                'product_id'=>$product_id,
                'rating'=>$currentRating,
            ]);
        }
        return $currentRating;
    }

}