<?php

namespace App\Http\Controllers\Home;

use App\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class panelController extends Controller
{
    public function index(){

        $user=auth()->user();
        $orders=Order::whereUser_id($user->id)
            ->leftJoin('pay_statuses', 'pay_statuses.id', '=', 'orders.pay_status')
            ->leftJoin('send_statuses', 'send_statuses.id', '=', 'orders.send_status')
            ->select('orders.*', 'pay_statuses.title as pay_title', 'send_statuses.title as send_title')
            ->latest()
            ->get();
        $addresses=$user->addresses;
//        return $addresses;
        return view('Home.panel',compact('user','orders','addresses'));
    }
    public function editdata(){
        $validator = Validator::make(\request()->all(), [
            'name' => 'required|min:5',
            'email'=>'required|email|min:6',
            'mobile'=>'max:11'
        ]);
        if ($validator->fails()) {
            return $validator->errors()->all();
        }
        $name= \request('name');
        $email=\request('email');
        $mobile=\request('mobile');
        $user=auth()->user();
        $user->update([
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$mobile,
        ]);
        return $user;
    }
}
