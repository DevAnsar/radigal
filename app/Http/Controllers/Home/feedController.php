<?php

namespace App\Http\Controllers\Home;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class feedController extends Controller
{
   public function products(){
       // create new feed
       $feed = App::make("feed");

       // multiple feeds are supported
       // if you are using caching you should set different cache keys for your feeds

       // cache the feed for 60 minutes (second parameter is optional)
       $feed->setCache(60, 'aliradFeedKey');

       // check if there is cached feed and build new only if is not
       if (!$feed->isCached())
       {
           // creating rss feed with our most recent 20 posts
           $products = Product::orderBy('created_at', 'desc')->take(20)->get();
           foreach ($products as $product)
           {
               // set item's title, author, url, pubdate, description, content, enclosure (optional)*
               $feed->add($product->title,'radigal', URL::to('/product/'.$product->slug), $product->created_at, strip_tags($product->description), strip_tags($product->body));
           }

       }
       return $feed->render('rss');
   }
}
