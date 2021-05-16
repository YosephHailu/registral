<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Course;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentAssessment;
use App\Models\TeacherSection;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assessments = Assessment::query();

        return view('assessment.assessments')->with('assessments', $assessments->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(TeacherSection $teacherSection)
    {
        // $semesters = Semester::all();
        $courses = Course::where('');


        return view('assessment.ce-assessment')->with(['teacherSection' => $teacherSection]);
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
            'title' => 'required',
            'value' => 'required',
            'description' => 'required',
        ]);

        $request->validate([
            'teacher_section_id' => 'required'
        ]);

        $teacherSection = TeacherSection::find($request->teacher_section_id);


        $assessment = new Assessment();
        $assessment->section_id = $teacherSection->section_id;
        $assessment->course_id = $teacherSection->course_id;
        $assessment->fill($validated);

        $assessment->save();

        $students = Student::where('section_id', $teacherSection->section_id)->get();

        foreach ($students as $key => $student) {
            StudentAssessment::create([
                'mark' => 0,
                'student_id' => $student->id,
                'assessment_id' => $assessment->id,
            ]);
        }

        return redirect('section/' . $teacherSection->id . '/students')->with('success', 'Course successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Assessment $assessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assessment $assessment)
    {
        //
    }
}
