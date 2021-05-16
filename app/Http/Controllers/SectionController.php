<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\Section;
use App\Models\Stream;
use App\Models\User;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = Section::query();

        return view('section.sections')->with('sections', $sections->get());
    }


    public function sections(Request $request)
    {
        $teacherSections = Section::with('stream')->where('academic_year_id', $request->academic_year_id);
        return $teacherSections->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $streams = Stream::all();
        $academicYears = AcademicYear::all();
        $users = User::all();

        return view('section.ce-section')->with(['academicYears' => $academicYears, 'streams' => $streams, 'users' => $users]);
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
            'name' => 'required',
            'academic_year_id' => 'required|exists:academic_years,id',
            'stream_id' => 'required|exists:streams,id',
        ]);

        $section = new Section();
        $section->fill($validated);

        $section->save();

        return redirect('section')->with('success', 'Section successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        $streams = Stream::all();
        $academicYears = AcademicYear::all();
        $users = User::all();

        return view('section.ce-section')
            ->with(['section' => $section, 'academicYears' => $academicYears, 'streams' => $streams, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Section $section)
    {
        //Validate request
        $validated = $request->validate([
            'name' => 'required',
            'academic_year_id' => 'required|exists:academic_years,id',
            'stream_id' => 'required|exists:streams,id',
        ]);

        $section->fill($validated);

        $section->save();

        return redirect('section')->with('success', 'Section successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Section $section)
    {
        $section->delete();

        return redirect('section')->with('success', 'Stream successfully deleted');
    }
}
