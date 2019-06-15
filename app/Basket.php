<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    protected $fillable=['cookie','product_id','number'];
    protected $casts=[
        'images'=>'array'
    ];
}
