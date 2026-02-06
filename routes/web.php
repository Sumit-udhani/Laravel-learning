<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[UserController::class,'getUser']);
Route::get('/about/{name}',function($name){
return view('about',['name'=>$name]);
});
Route::get('/users',[UserController::class,'getUser']
);
Route::get('/users/{name}',[UserController::class,'getUserName']);
Route::get('/userss/{name}',[UserController::class,'getUserNames']);
Route::get('/admin',[UserController::class,'admin']);
Route::view('user-form','userForm');
Route::view('user-forms','userForms');
Route::view('contact','contact');
Route::post('addUser',[UserController::class,'addUser']);
Route::view('/faq/users/profile','faq')->name('faq');

//Prefix Groupe routes

Route::prefix('student')->group(function(){
Route::get('/show',[UserController::class,'showStudent']);
Route::get('/add',[UserController::class,'addStudent']);
});