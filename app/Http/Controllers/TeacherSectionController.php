<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use App\Models\TeacherSection;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacherSections = TeacherSection::query();

        return view('teacherSection.teacher-section')->with('teacherSections', $teacherSections->get());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mySections()
    {
        $teacherSections = TeacherSection::where('teacher_id', Auth::id());

        return view('teacherSection.my-sections')->with('teacherSections', $teacherSections->get());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sectionStudents(TeacherSection $teacherSection)
    {
        $students = Student::where('section_id', $teacherSection->section_id)->get();

        return view('teacherSection.sections-students')->with(['students' => $students, 'teacherSection' => $teacherSection]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        $teachers = User::all();
        
        return view('teacherSection.ce-teacher-section')->with(['sections' => $sections, 'teachers' => $teachers]);
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
            'section_id' => 'required|exists:sections,id',
            'teacher_id' => 'required|exists:users,id',
        ]);

        $teacherSection = new TeacherSection();
        $teacherSection->assigned_date = Carbon::now();
        $teacherSection->fill($validated);

        $teacherSection->save();

        return redirect('teacher-section')->with('success', 'Stream successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeacherSection  $teacherSection
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherSection $teacherSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherSection  $teacherSection
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherSection $teacherSection)
    {
        $sections = Section::all();
        $teachers = User::all();
        
        return view('teacherSection.ce-teacher-section')->with(['sections' => $sections, 'teachers' => $teachers, 'teacherSection' => $teacherSection]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeacherSection  $teacherSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherSection $teacherSection)
    {
        
        //Validate request
        $validated = $request->validate([
            'section_id' => 'required|exists:sections,id',
            'teacher_id' => 'required|exists:users,id',
        ]);

        $teacherSection->fill($validated);

        $teacherSection->save();

        return redirect('teacher-section')->with('success', 'Stream successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherSection  $teacherSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherSection $teacherSection)
    {
        $teacherSection->delete();

        return redirect()->back()->with('success', 'Stream successfully deleted');
    }
}
