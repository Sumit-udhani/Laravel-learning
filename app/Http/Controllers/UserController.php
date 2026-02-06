<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    function getUser(){
        $name='sumit';
        $users=['sumit','viren','sapan'];
        return view('home',['name'=>$name,'users'=>$users]);
    }
    function getUserName($name){
        return "Hello this is".$name;
    }
     function getUserNames($name){
        return view('userName',['name'=>$name]);
    }
     function admin(){
        if (View::exists('admin.adminLogin')) {
            # code...
            return view('admin.adminLogin');
        }
        else{
            echo "View is not found 404";
        }
    }
    // function addUser(Request $request){
    //      echo $request->city;
    //      echo $request->gender;
    //      print_r($request->skill);

    // }
     function addUser(Request $request){
         $request->validate([
            'name'=>'required | min:5 | max:10',
            'email'=>'required | email',    
         ],[
            'name.required'=>'name cannot be empty'
         ]);
         return $request;

    }
    //Route Groups 
    function showStudent(){
        return "Show student";
    }
     function addStudent(){
        return "Add student";
    }
    function display(){
       $users= DB::select('select * from users');
        return view('users',['users'=>$users]);
    }
    function students(){
        $students= \App\Models\Student::all();
        return $students;
    }
}
