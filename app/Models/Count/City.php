<?php

namespace App\Models\Count;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded =[];



    public function country(){

        return $this-> belongsTo(Country::class);
    }



    public function districts(){

        return $this-> hasMany(District::class);
    }
}
