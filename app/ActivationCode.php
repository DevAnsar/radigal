<?php

namespace App;

use Carbon\Carbon;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ActivationCode extends Model
{
    protected $fillable=['user_id','code','used','expire'];


    public function scopeCreateCode($query,$user){

        $code=$this->Code();
            return $query->create([
                'user_id'=>$user->id,
                'code'=> $code,
                'expire'=>Carbon::now()->addMinute(15)
            ]);

    }

    private function Code()
    {
        do{
            $code=Str::random(60);
            $status=static::whereCode($code)->get();
        }while(! $status->isEmpty());
        return $code;
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
