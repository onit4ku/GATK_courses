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
        // método previo de búsqueda
        // if ($request->ajax()) {
        // $submissions = GATK::where('fullName', 'LIKE', '%' . $request->search . "%")->get();
        $submissions = GATK::get();

        if ($submissions) {
            foreach ($submissions as $submission) {
                $output .= 
                '<tr>' .
                    '<td>' . $submission->fullName . '</td>' .
                    '<td>' . $submission->institution . '</td>' .
                    '<td>' . $submission->position . '</td>' .
                    '<td>' . $submission->inputDinner . '</td>' .
                    '<td>' . $submission->inputAlhambra . '</td>' .
                    '<td>' . $submission->dietaryReq . '</td>' .
                    '<td>' . $submission->waitingList . '</td>' .
                    '<td>' . $submission->email . '</td>' .
                '</tr>';
            }

            echo '<th colspan="8" style="color:black; background-color:#f1f1f1">Total submissions: ' . $count . '</th>';
            return $output;
        }
    }
}
// }
