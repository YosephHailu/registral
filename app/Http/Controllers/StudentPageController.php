<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPageController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:student');
    }

    public function dashboard(Request $request)
    {
        return view('student.student_dashboard');
    }
}
