<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    //
    function productData(){
        return $this->hasOne('App\Models\Product');
    }
    function productManyData(){
        return $this->hasmany('App\Models\Product');
    }
}
