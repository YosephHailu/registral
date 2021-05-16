<?php

namespace App\Http\Controllers;

use App\Models\AcademicYear;
use App\Models\Course;
use App\Models\Department;
use App\Models\Semester;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::query();

        return view('Course.courses')->with('courses', $courses->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $academicYears = AcademicYear::all();
        // $semesters = Semester::all();
        $departments = Department::all();
        $coordinators = User::all();

        return view('course.ce-course')->with(['departments' => $departments, 'coordinators' => $coordinators]);
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
            'code' => 'required',
            'department_id' => 'required'
        ]);

        $course = new Course();
        $course->coordinator = $request->coordinator;
        $course->fill($validated);

        $course->save();

        return redirect('course')->with('success', 'Course successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $departments = Department::all();
        $coordinators = User::all();

        return view('course.ce-course')->with(['course' => $course, 'departments' => $departments, 'coordinators' => $coordinators]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'name' => 'required',
            'code' => 'required',
            'department_id' => 'required'
        ]);

        $course->coordinator = $request->coordinator;
        $course->fill($validated);

        $course->save();

        return redirect('course')->with('success', 'Course successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect('course')->with('success', 'Course successfully deleted');
    }
}
