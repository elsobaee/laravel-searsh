<?php

namespace App;
use App\Products;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable=['vendor_name','vendor_addriess','vendor_phone','updated_at','created_at'];
     protected $hidden=['updated_at','created_at'];



     public function vendors(){

          return $this -> hasMany('App\Vendor','category_id','id');
      }

      public function products(){
          return $this -> hasMany('App\Products','product_id','id');
      }
}
