<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomEmail;
class MailController extends Controller
{
    //
    function sendMail(Request $req){
       $to= $req->to;
       $msg= $req->message;
       $subject=$req->subject;
       Mail::to($to)->send(new WelcomEmail($msg,$subject) );
       return"mail send";
    }
    
}
