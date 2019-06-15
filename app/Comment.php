<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'product_id',
        'user_id',
        'comment',
        'parent',
        'likeCount',
        'dislikeCount',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class,'parent','id');
    }
}
