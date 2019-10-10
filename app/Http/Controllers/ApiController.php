<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function create(Request $request)
    {
        $students = new Student();
        $students->fullName = $request->input(['fullName']);
        $students->email = $request->input(['email']);
        $students->commandLine = $request->input(['commandLine']);
        $students->GATKfamiliar = $request->input(['GATKfamiliar']);
        $students->analyzeData = $request->input(['analyzeData']);
        $students->researchInterests = $request->input(['researchInterests']);
        $students->position = $request->input(['position']);
        $students->inputDinner = $request->input(['inputDinner']);
        $students->inputAlhambra = $request->input(['inputAlhambra']);
        $students->institution = $request->input(['institution']);
        $students->dietaryReq = $request->input(['dietaryReq']);

        $students->save();
        return response()->json($students);
    }
}
