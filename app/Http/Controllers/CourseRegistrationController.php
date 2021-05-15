<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\RegistrationOffering;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseRegistrationController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:student');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function courseRegistrationForm(Request $request)
    {
        $offerings = RegistrationOffering::where([['active', true], ['semester_id', Auth::user()->semester_id]]);

        $streamCourses = Auth::user()->stream->streamCourse->where('semester_id', Auth::user()->semester_id);

        return view('courseRegistration.course-registration')
            ->with('streamCourses', $streamCourses);
        return Auth::user();
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function courseRegistration(Request $request)
    {
        return $request;
        return Auth::user();
        return Auth::user();
    }
}
