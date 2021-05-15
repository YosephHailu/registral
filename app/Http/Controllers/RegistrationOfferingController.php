<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\RegistrationOffering;
use App\Models\Semester;
use Illuminate\Http\Request;

class RegistrationOfferingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrationOfferings = RegistrationOffering::query();

        return view('registrationOffering.registration-offerings')
            ->with('registrationOfferings', $registrationOfferings->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semester::all();
        $academicYears = AcademicYear::all();

        return view('registrationOffering.ce-registration-offering')
            ->with(['semesters' => $semesters, 'academicYears' => $academicYears]);
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
            'academic_year_id' => 'required|exists:academic_years,id',
            'semester_id' => 'required|exists:semesters,id',
            'start_date' => 'required',
            'end_date' => 'required',
            'year' => 'required',
        ]);

        $registrationOffering = new RegistrationOffering();
        $registrationOffering->fill($validated);

        $registrationOffering->save();

        return redirect('registration-offering')->with('success', 'Registration offering successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegistrationOffering  $registrationOffering
     * @return \Illuminate\Http\Response
     */
    public function show(RegistrationOffering $registrationOffering)
    {
        return view('registrationOffering.registrationOffering')->with('registrationOffering', $registrationOffering);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegistrationOffering  $registrationOffering
     * @return \Illuminate\Http\Response
     */
    public function edit(RegistrationOffering $registrationOffering)
    {
        $semesters = Semester::all();
        $academicYears = AcademicYear::all();

        return view('registrationOffering.ce-registration-offering')
            ->with(['registrationOffering' => $registrationOffering, 'semesters' => $semesters, 'academicYears' => $academicYears]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegistrationOffering  $registrationOffering
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistrationOffering $registrationOffering)
    {
        
        //Validate request
        $validated = $request->validate([
            'academic_year_id' => 'required|exists:academic_years,id',
            'semester_id' => 'required|exists:semesters,id',
            'start_date' => 'required',
            'end_date' => 'required',
            'year' => 'required',
        ]);

        $registrationOffering->fill($validated);

        $registrationOffering->save();

        return redirect('registration-offering')->with('success', 'RegistrationOffering successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegistrationOffering  $registrationOffering
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegistrationOffering $registrationOffering)
    {
        $registrationOffering->delete();

        return redirect('registrationOffering')->with('success', 'RegistrationOffering successfully deleted');
    }

    //Change registration offering status
    public function changeStatus(RegistrationOffering $registrationOffering)
    {
        $registrationOffering->active = !$registrationOffering->active;
        $registrationOffering->save();

        return redirect()->back()->with('success', 'Registration offering status successfully changed');
    }
}
