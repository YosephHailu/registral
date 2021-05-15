<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Semester;
use App\Models\Stream;
use App\Models\StreamCourse;
use Illuminate\Http\Request;

class StreamCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Stream $stream)
    {
        $courses = Course::all();
        $semesters = Semester::all();

        return view('streamCourse.ce-stream-course')->with(['courses' => $courses, 'stream' => $stream, 'semesters' => $semesters]);
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
            'stream_id' => 'required|exists:streams,id',
            'course_id' => 'required|exists:courses,id',
            'semester_id' => 'required|exists:semesters,id',
            'credit_hour' => 'required',
            'ects' => 'required',
        ]);

        $streamCourse = new StreamCourse();
        $streamCourse->fill($validated);

        $streamCourse->save();

        return redirect('stream/'.$request->stream_id)->with('success', 'Stream course successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StreamCourse  $streamCourse
     * @return \Illuminate\Http\Response
     */
    public function show(StreamCourse $streamCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StreamCourse  $streamCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(StreamCourse $streamCourse)
    {
        $courses = Course::all();
        $semesters = Semester::all();
        $stream = $streamCourse->stream;

        return view('streamCourse.ce-stream-course')->with(['streamCourse' => $streamCourse, 'courses' => $courses, 'stream' => $stream, 'semesters' => $semesters]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StreamCourse  $streamCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StreamCourse $streamCourse)
    {
        //Validate request
        $validated = $request->validate([
            'stream_id' => 'required|exists:streams,id',
            'course_id' => 'required|exists:courses,id',
            'semester_id' => 'required|exists:semesters,id',
            'credit_hour' => 'required',
            'ects' => 'required',
        ]);
        
        $streamCourse->is_major = $request->is_major == "on" ? true : false;
        $streamCourse->fill($validated);

        $streamCourse->save();

        return  redirect('stream/'.$streamCourse->stream_id)->with('success', 'Stream course successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StreamCourse  $streamCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(StreamCourse $streamCourse)
    {
        $streamCourse->delete();

        return redirect('stream/'.$streamCourse->stream_id)->with('success', 'Stream course successfully created');
    }
}
