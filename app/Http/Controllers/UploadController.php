<?php

namespace App\Http\Controllers;

use App\GATK;
use App\Http\Requests\UploadRequest;
use App\Mail\SendCopy;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Mail;

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
            // Si los registros que no hay en lista de espera son iguales a 40 o mas, añadiremos al usuario a lista de espera y le avisamos con una nueva view
            $limitedRegister = env('APP_WAITING_LIST_LIMITED', 40);
            if (GATK::where("waitingList", '<>', true)->count() >= $limitedRegister) {
                $request_fields["waitingList"] = true;
                $GATKcourses = GATK::create($request_fields);
                return view('waitinglist');
            }
            // En otro caso creamos el registro hasta alcanzar el número de registros 40
            $GATKcourses = GATK::create($request_fields);
            //mail
            $name = $request->all(['fullName']);
            $email = $request->all(['email']);
            $position = $request->all(['position']);
            $institution = $request->all(['institution']);
            $gala = $request->all(['inputDinner']);
            $copy = "secretariatecnica-clinbioinfosspa.fps@juntadeandalucia.es";

            Mail::to($email)->send(new SendMailable($name["fullName"], $email["email"], $position["position"], $institution["institution"], $gala["inputDinner"]));
            Mail::to($copy)->send(new SendCopy($name["fullName"], $email["email"], $position["position"], $institution["institution"], $gala["inputDinner"]));

        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == '1062') {
                // dd('Duplicate Entry');
                return view('duplicate');
            }
            if ($errorCode != '1062') {
                // bd error
                return view('unknownerror');
            }
        }

        $email = $request->all(['email']);
        if (GATK::where('email', $email)->get()) {
            return view('success');
        }
    }
}
