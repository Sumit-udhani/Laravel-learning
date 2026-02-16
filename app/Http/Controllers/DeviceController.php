<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Blade;
class DeviceController extends Controller
{
    //
    function index(Device $key){
        return $key;
    }
    function inlineBladeTemplate(){
        $totalProductList= 10;
      return  Blade::render('<h1>{{$total}} Products list</h1>',['total'=>$totalProductList]);
        
    }
}
