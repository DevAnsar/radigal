<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id',
        'order',
        'price',
        'pay',
        'send',
        'discount_code',
        'address',
        'pay_status',
        'send_status',
        'discount_id'
    ];
    protected $casts=[
        'order'=>'array',
//        'pay'=>'array',
//        'send'=>'array',
        'address'=>'array',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function paystatus(){
        return $this->belongsTo(PayStatus::class,'pay_status','id');
    }
    public function discount(){
        return $this->belongsTo(Discount::class,'discount_id','id');
    }
}
