<?php

namespace App\Http\Controllers\Home;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class sitemapController extends Controller
{
    public function index(){
        $sitemap = App::make("sitemap");

        // set cache
        $sitemap->setCache('alirad.sitemap-index', 1);

        // add sitemaps (loc, lastmod (optional))
        if (! $sitemap->isCached()){
            $sitemap->addSitemap(URL::to('sitemap-products'));
        }
        // show sitemap
        return $sitemap->render('sitemapindex');

    }

    public function products(){
        // create sitemap
        $sitemap_products = App::make("sitemap");

        // set cache
        $sitemap_products->setCache('alirad.sitemap-products', 3600);

        // add items
        if (! $sitemap_products->isCached()){
        $products = Product::orderBy('created_at', 'desc')->get();
        foreach ($products as $product)
        {
            $sitemap_products->add(\url()->to('/product/'.$product->slug), $product->created_at, '0.9', 'Weekly');
        }
        }

        // show sitemap
        return $sitemap_products->render('xml');

    }
}
