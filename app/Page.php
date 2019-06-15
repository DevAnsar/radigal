<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
//use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Sluggable;
    protected $fillable=[
        'title',
        'slug',
        'body',
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
