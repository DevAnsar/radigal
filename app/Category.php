<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
//use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;
    protected $fillable = [
        'title','slug','parent',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function products(){
        return $this->hasMany(Product::class,'id','cat');
    }
}
