<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\GATK;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\Mail\SendCopy;

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
            $request_fields = $request->all();
            // Si los registros que no hay en lista de espera es igual a 30 o mayor, añadiremos al usuario a lista de espera y le avisamos con una nueva view
            $limitedRegister = env('APP_WAITING_LIST_LIMITED', 30);
            if (GATK::where("waitingList", '<>', true)->count() >= $limitedRegister) {
                $request_fields["waitingList"] = true;
                $GATKcourses = GATK::create($request_fields);
                return view('waitinglist');
            }
            // En otro caso creamos el registro hasta alcanzar el número de registros 30
            $GATKcourses = GATK::create($request_fields);
            //mail
            $name = $request->all(['fullName']);
            $email = $request->all(['email']);
            $position = $request->all(['position']);
            $institution = $request->all(['institution']);
            $gala = $request->all(['inputDinner']);
            $copy = "secretariatecnica-clinbioinfosspa.fps@juntadeandalucia.es";

            Mail::to($email)->send(new SendMailable($name["fullName"]));
            Mail::to($copy)->send(new SendCopy($name["fullName"], $email["email"], $position["position"], $institution["institution"], $gala["inputDinner"]));

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
