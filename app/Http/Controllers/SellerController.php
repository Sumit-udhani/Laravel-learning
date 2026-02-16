<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
class SellerController extends Controller
{
    //
    function list(){
        return Seller::find(1)->productData;
    }
    function manyList(){
        return Seller::find(1)->productManyData;
    }
}
