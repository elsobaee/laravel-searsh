<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
 
   protected $fillable=['Product_name','Product_number','Product_price','vendor_id','category_id','created_at','updated_at'];
   protected $hidden=['updated_at','created_at'];



    public function vendors()
    {
        return $this->belongsTo('App\Vendor','vendor_id', 'id');
    }


    public function category()
    {

        return $this->belongsTo('App\Category','category_id', 'id');
    }

}
