<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{
    protected $fillable=[
        'title',
        'body',
        'images',
    ];
    protected $casts=[
        'images'=>'array'
    ];
}
