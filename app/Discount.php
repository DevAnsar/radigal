<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable=[
      'title',
        'body',
        'value',
        'start',
        'end',
    ];
}
