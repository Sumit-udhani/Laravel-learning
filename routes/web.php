<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\NameCheck;
use App\Http\Controllers\QueryBuilderController;
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[UserController::class,'getUser'])->middleware('check1');
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

//Group controller routes
//Group middleware routes
Route::middleware('check1')->group(function(){
   Route::controller(StudentController::class)->group(function(){
Route::get('show','show');
Route::get('add','add');
Route::get('delete','delete');
}); 
});


Route::get('add/{name}',[StudentController::class,'addName'])->middleware(NameCheck::class);

Route::controller(UserController::class)->group(function(){
Route::get('display','display');
Route::get('students','students');
Route::get('teacher','teacher');
Route::get('qb','getUsersByQb');
});
//Query builder crud
Route::get('qbusers',[QueryBuilderController::class,'getUsers']);

//Eloquent Query builder crud
Route::get('eloquent',[UserController::class,'queries']);