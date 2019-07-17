<?php

namespace App\Http\Controllers;

use App\GATK;
use Illuminate\Http\Request;

class SubmissionsController extends Controller
{
    public function vista()
    {
        return view('submissions');
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {

            $output = "";
            $submissions = GATK::where('fullName', 'LIKE', '%' . $request->search . "%")->get();

            if ($submissions) {

                foreach ($submissions as $submission) {

                  $output .= '<tr>' .
                    '<td>' . $submission->fullName . '</td>' .
                    '<td>' . $submission->institution . '</td>' .
                    '<td>' . $submission->position . '</td>' .
                    '<td>' . $submission->inputDinner . '</td>' .
                    '<td>' . $submission->inputAlhambra . '</td>' .
                    '<td>' . $submission->dietaryReq . '</td>' .
                    '<td>' . $submission->payment . '</td>' .
                    '<td>' . $submission->waitingList . '</td>' .
                  '</tr>';
                }
                return $output;
            }
        }
    }
}
