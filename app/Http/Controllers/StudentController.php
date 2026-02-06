<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //Group controller routes
    function show (){
        return "Show student list";
    }
function add (){
        return "Students added!";
    }
    function delete (){
        return "Students deleted successfully!!";
    }
    function addName ($name){
        return $name;
    }
}
