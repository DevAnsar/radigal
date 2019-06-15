<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level','open_order','discounts','mobile','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'discounts'=>'array'
    ];
    public function addresses(){
        return $this->hasMany(Address::class)->latest();
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function ActivationsCode(){
        return $this->hasMany(ActivationCode::class);
    }
}
