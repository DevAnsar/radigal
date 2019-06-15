<?php

namespace App\Http\Controllers\Home;

use App\ActivationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function activation($token){
        $activation_code=ActivationCode::whereCode($token)->first();
        if (! $activation_code){
            alert()->warning('کد فعال سازی تایید شده نمی باشد', '')->confirmButton('باشه');
            return redirect('/');
        }
        if ($activation_code->expire < Carbon::now()){
            alert()->warning('کد فعال سازی منقضی شده است', '')->confirmButton('باشه');
            return redirect('/');
        }
        if ($activation_code->used == true){
            alert()->warning('کد فعال سازی استفاده شده است', '')->confirmButton('باشه');
            return redirect('/');
        }
        $activation_code->update([
            'used'=>true,
        ]);

        $activation_code->user()->update([
           'active'=>true
        ]);

        auth()->loginUsingId($activation_code->user->id);
        alert()->success('اکانت شما با موفقیت فعال شد', $activation_code->user->name)->confirmButton('باشه');
        return redirect('/');
    }
}
