<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=[
      'user_id',
      'name',
      'tell',
      'mobile',
      'ostan',
      'shahr',
      'address',
      'post',
    ];

}
