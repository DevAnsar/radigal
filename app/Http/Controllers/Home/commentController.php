<?php

namespace App\Http\Controllers\Home;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class commentController extends Controller
{
    public function comment(){
//        return \request()->all();
        $comment=\request('comment');
        $product_id=\request('product_id');
        $user_id=auth()->user()->id;
        $comment=Comment::create([
            'product_id'=>$product_id,
            'user_id'=>$user_id,
            'comment'=>$comment,
        ]);
        return $comment;
    }
    public function commentreplay(){
//        return \request()->all();
        $comment=\request('comment');
        $product_id=\request('product_id');
        $parent=\request('parent');
        $user_id=auth()->user()->id;
        $comment=Comment::create([
            'product_id'=>$product_id,
            'user_id'=>$user_id,
            'comment'=>$comment,
            'parent'=>$parent,
        ]);
        return $comment;
    }
}
