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

    public function show()
    {
        $students = Student::all();
        return response()->json($students);
    }

    public function showbykey($id)
    {
        $students = Student::find($id);
        return response()->json($students);
    }

    public function updatebyid(Request $request, $id)
    {
        $students = Student::find($id);
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

    public function deletebyid(Request $request, $id)
    {
        $students = Student::find($id);
        $students->delete();
        
        return response()->json($students);
    }
}
