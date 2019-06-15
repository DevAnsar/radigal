<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
//use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable;
    protected $fillable = [
        'title','description','slug','body','cutoff','price','tags','images','cat','stockCount','discount','viewCount'
    ];
    protected $casts=[
        'images'=>'array', 'cat'=>'array'
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
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function categories(){
        return $this->hasMany(Category::class,'id','cat');
    }
    public function getTags(){
        return explode(',',$this->tags);
    }
    public function path(){
        return env('APP_URL').'/product/'.$this->slug;
    }

//    public function AddToBasket($productId){
//        $cookie=self::getBasketCookie();
//
//        $sql0="select * from tbl_basket where cookie=? and idproduct=?";
//        $result=$this->doSelect($sql0,[$cookie,$productId]);
//
//        if(sizeof($result)==0){
//            $sql='insert into tbl_basket (cookie,idproduct,tedad) values (?,?,?)';
//            $this->doQuery($sql,[$cookie,$productId,1]);
//        }else{
//            $tedad=$result[0]['tedad'];
//            $tedad=$tedad+1;
//            $sql='update tbl_basket set tedad=? where cookie=? and idproduct=?';
//            $this->doQuery($sql,[$tedad,$cookie,$productId]);
//        }
//    }


}
