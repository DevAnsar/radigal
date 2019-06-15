<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    protected $fillable=[
        'title',
        'img',
        'page_id'
    ];
    protected $casts=[
        'img'=>'array',
    ];
}
