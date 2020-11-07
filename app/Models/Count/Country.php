<?php

namespace App\Models\Count;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $guarded =[];

    public function cities(){

        return $this-> hasMany(City::class);
    }

    public function districts(){

        return $this-> hasMany(District::class);
    }
}
