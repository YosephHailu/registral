<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentAssessment;
use Illuminate\Http\Request;

class StudentAssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateMark(Request $request, StudentAssessment $studentAssessment)
    {
        //
        $max_grade = $studentAssessment->assessment->value;
        //Validate request
        $validated = $request->validate([
            'mark' => "required|numeric|max:$max_grade|min:1",
        ]);

        $studentAssessment->mark = $request->mark;
        $studentAssessment->save();

        return redirect()->back()->with('success', 'Assessment mark successfully updated');

    }

}
