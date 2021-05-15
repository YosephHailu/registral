<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::query();

        return view('grade.grades')->with('grades', $grades->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grade.ce-grade');
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
            'label' => 'required',
            'min_value' => 'required',
            'max_value' => 'required',
            'description' => 'required',
        ]);

        $grade = new Grade();
        $grade->fill($validated);

        $grade->save();

        return redirect('grade')->with('success', 'Grade successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('grade.ce-grade')->with('grade', $grade);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        //Validate request
        $validated = $request->validate([
            'label' => 'required',
            'min_value' => 'required',
            'max_value' => 'required',
            'description' => 'required',
        ]);

        $grade->fill($validated);

        $grade->save();

        return redirect('grade')->with('success', 'Grade successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect('grade')->with('success', 'Grade successfully deleted');
    }
}
