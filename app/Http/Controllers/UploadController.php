<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\GATK;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload_form');
    }

    public function uploadSubmit(UploadRequest $request)
    {
        try {
            //recoger los datos y crear en la bd
            $GATKcourses = GATK::create($request->all());
            //mail
            $name = $request->all(['fullName']);
            $email = $request->all(['email']);
        
            Mail::to($email)->send(new SendMailable($name["fullName"]));

        } catch(\Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
            if($errorCode == '1062'){
                // dd('Duplicate Entry');
                return view('duplicate'); 
            }
        }
        return view('success');
    }
}
