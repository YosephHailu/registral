<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\Section;
use App\Models\Semester;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::query();

        return view('student.students')->with('students', $students->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }

    //Change registration offering status
    public function deactivateStudent(Student $student)
    {
        $student->status = false;
        $student->save();

        return redirect()->back()->with('success', 'Student status successfully changed');
    }

    //Change registration offering status
    public function changeStatus(Request $request, Student $student)
    {
        //Validate request
        $validated = $request->validate([
            'academic_year_id' => 'required|exists:academic_years,id',
            'semester_id' => 'required|exists:semesters,id',
            'section_id' => 'required|exists:sections,id',
        ]);

        $student->status = true;
        $student->semester_id = $request->semester_id;
        $student->academic_year_id = $request->academic_year_id;
        $student->section_id = $request->section_id;
        $student->save();

        return redirect('student')->with('success', 'Student status successfully changed');
    }

    //Change registration offering status
    public function changeStatusForm(Student $student)
    {
        $academicYears = AcademicYear::all();
        $semesters = Semester::all();
        $sections = Section::where('stream_id', $student->stream_id)->get();

        return view('student.status')
            ->with(['sections' => $sections, 'student' => $student, 'academicYears' => $academicYears, 'semesters' => $semesters]);
    }
}
