<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //
    protected function studentGrade(Request $request)
    {
        $student = Student::where('identification_no', $request->student_id)->first();

        if (!$student->academic_year_id) {
            return back()->with('error', "Your are not admitted to any field yet!!");
        }
        $streamCourses = $student->stream->streamCourse->where('year', $student->year)
            ->where('semester_id', $student->semester_id);

        return view('report.gradeReport')->with(['streamCourses' => $streamCourses, 'student' =>$student]);

    }
}
