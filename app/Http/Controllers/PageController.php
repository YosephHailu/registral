<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->only('dashboard');
        $this->middleware('auth:student')->only('home');
    }
    
    function dashboard() {
        return view('/dashboard');
    }
    
    function adminDashboard() {
        return view('admin/adminDashboard');
    }
    
    function mySection() {
        return view('info.mySection');
    }
    
    function myDormitory() {
        return view('info.myDormitory');
    }
    
    function registrationOrientation() {
        return view('info.registrationOrientation');
    }
    
    function personalInfoRegistration() {
        return view('personalInfo.personalInfoRegistration');
    }
    
    function home() {
        return view('student.home');
    }
    
    function gradeReport() {
        return view('student.gradeReport');
    }
    
    function assessmentResult() {
        return view('student.assessmentResult');
    }
    
    function motherInformation() {
        return view('personalInfo.motherInformation');
    }
    
    function educationInformation() {
        return view('personalInfo.educationInformation');
    }
    
    function courses() {
        return view('Course.courses');
    }

    function addCourse() {
        return view('course.addCourse');
    }
}
