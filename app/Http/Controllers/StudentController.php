<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Image;
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
    function addStudent(Request $req){
        $student = new Student();
        $student->name= $req->name;
        $student->email= $req->email;
        $student->phone= $req->phone;
        $student->save();
        if ($student) {
        return redirect('student-list');
        }
        else {
        return "Student Not Added";
        }
    }

    // Get data from db
//  function studentList(){
//     $student = Student::all();
//     return view('student-list',['lists'=>$student]);
//  }
 //Pagination
 function studentList(){
    $student = Student::paginate(4);
    return view('student-list',['lists'=>$student]);
 }
 function deleteStudents($id){
    $student= Student::destroy($id);
    if ($student) {
        return redirect('student-list');
    }
    else {
        return "Error in deleting issue";
    }
 }
 function editStudent($id){
        $student = Student::find($id);
        return view('edit',['data'=>$student]); 
 }
 function updateStudent(Request $req,$id){
    $student = Student::find($id);
    $student->name= $req-> name;
    $student->email= $req-> email;
    $student->phone= $req-> phone;

    if ($student->save()) {
        return redirect('student-list');
    }
    else {
        return "Update operation failed";
    }
 }
 //Searching from db
 function search(Request $req){
    $students = Student::where('name','like',"%{$req->search}%")->paginate(4);

    return view('student-list', ['lists' => $students]);
}
function deleteMulti(Request $req){
    $students = Student::destroy($req->ids);
    return redirect('student-list');
}
//Image upload in db
function upload(Request $req){

    $path = $req->file('file')->store('images', 'public');

    $image = new Image();
    $image->path = $path;   // store full path
    $image->save();

    return redirect('/display');
}

function displayImage(){
    $image = Image::all();
    return view('displayImage',['data'=>$image]);
}
}