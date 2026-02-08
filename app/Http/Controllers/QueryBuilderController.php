<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class QueryBuilderController extends Controller
{

    function getUsers(){
        // $result = DB::table('users')->where('name','viren')->get();
        // return view('qbview',['users' => $result]);
        $result = DB::table('users')->where('name','sumit')->update(['name'=>'sumitiiiii...']);

     // Step 2: Fetch updated data
        $users = DB::table('users')->get();

        // Step 3: Send to view
        return view('qbview', ['users' => $users]);

    }
    // function getUsersByName(){
    //     $result = DB::table('users') 
    // }
}
