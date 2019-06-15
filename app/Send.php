<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    protected $fillable=[
        'title',
        'body',
        'img',
        'price',
    ];
    protected $casts=[
        'img'=>'array',
    ];
}
