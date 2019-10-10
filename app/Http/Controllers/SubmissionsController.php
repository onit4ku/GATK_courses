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
        $count = GATK::count();
        $output = "";
     
        $submissions = GATK::get();

        if ($submissions) {
            foreach ($submissions as $submission) {
                $waiting = $submission->waitingList;
                $isWaiting = ($waiting) ? 'Yes' : 'No';

                $output .= 
                '<tr>' .
                    '<td>' . $submission->id         . '</td>' .
                    '<td>' . $submission->fullName      . '</td>' .
                    '<td>' . $submission->email         . '</td>' .
                    '<td>' . $submission->institution   . '</td>' .
                    '<td>' . $submission->position      . '</td>' .
                    '<td>' . $submission->inputDinner   . '</td>' .
                    '<td>' . $submission->inputAlhambra . '</td>' .
                    '<td>' . $submission->dietaryReq    . '</td>' .
                    '<td>' . $isWaiting                 . '</td>' .
                '</tr>';
            }

            echo '<th colspan="9" style="color:black; background-color:#f1f1f1">Total submissions: ' . $count . '</th>';
            return $output;
        }
    }
}
