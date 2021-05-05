<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth')->only('dashboard');
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
}
