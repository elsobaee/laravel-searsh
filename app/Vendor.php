<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
     protected $fillable=['vendor_name','vendor_addriess','vendor_phone','category_id','updated_at','created_at'];
     protected $hidden=['updated_at','created_at'];



    public function category()
    {

        return $this->belongsTo('App\category', 'category_id', 'id');
    }

    public function products(){

        return $this -> hasMany('App\Products','product_id','id');
    }

}