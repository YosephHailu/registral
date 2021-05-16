<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use Illuminate\Http\Request;

class AcademicYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicYears = AcademicYear::query();

        return view('academicYear.academic-year')->with('academicYears', $academicYears->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = AcademicYear::all();

        return view('academicYear.ce-academic-year')->with('departments', $departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate request
        $validated = $request->validate([
            'academic_year' => 'required',
            'end_date' => 'required|date'
        ]);

        $academicYear = new AcademicYear();

        $academicYear->fill($validated);
        $academicYear->save();

        return redirect('academic-year')->with('success', 'Academic year successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicYear $academicYear)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicYear $academicYear)
    {
        return view('academicYear.ce-academic-year')->with(['academicYear' => $academicYear]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicYear $academicYear)
    {
        //
        //Validate request
        $validated = $request->validate([
            'academic_year' => 'required',
            'end_date' => 'required|date'
        ]);

        $academicYear->fill($validated);
        $academicYear->save();

        return redirect('academic-year')->with('success', 'Academic year successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcademicYear  $academicYear
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicYear $academicYear)
    {
        $academicYear->delete();

        return redirect('academic-year')->with('success', 'AcademicYear successfully deleted');
    }
}
