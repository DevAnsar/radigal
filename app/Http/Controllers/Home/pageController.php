<?php

namespace App\Http\Controllers\Home;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pageController extends Controller
{
    public function show(Page $page){
        return view('Home.page',compact('page'));
    }
}
