<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\GATK;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload_form');
    }

    public function uploadSubmit(UploadRequest $request)
    {
        //recoger los datos y crear en la bd
        $GATKcourses = GATK::create($request->all());
        return view('success');
    }
}
