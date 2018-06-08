<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{
    public function mail()
    {
       $name = 'oni';
       Mail::to('onitaku@gmail.com')->send(new SendMailable($name));
       
       return 'Email was sent';
    }
    
}