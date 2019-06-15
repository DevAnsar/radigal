<?php

namespace App;

use Carbon\Carbon;
//use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[
        'user_id',
        'order_id',
        'authority',
        'RefID',
        'price'
    ];
    public function scopeSpanningPayment($query,$month,$option){
        $query->selectRaw('monthname(created_at) month , count(*) published')
            ->where('created_at','>',Carbon::now()->subMonth($month))
            ->where('RefId',$option,'')
            ->groupBy('month')
            ->latest();
    }
}
