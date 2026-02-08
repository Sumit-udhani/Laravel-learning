<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
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
    //Http client api calling
    function teacher(){
        $response = Http::get('https://jsonplaceholder.typicode.com/todos/1');
        return $response;
    }
    //query builder
    function getUsersByQb(){
        // $result = DB::table('students')->where('email','viren1@gmail.com')->get();
        // return $result;
        // $result = DB::table('students')->insert([
        //     'name'=>'manish',
        //     'email'=>'manisseo@gmail.com',
        //     'batch'=>'2021'
        // ]);
        $result = DB::table('students')->where('email','manisseo@gmail.com')->update([
            'batch'=>'2026'
        ]);
        if ($result) {
            return "Data Updated";
        }
        else{
            return "Data Not Updated";
        }
    }
    
}
