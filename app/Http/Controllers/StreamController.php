<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Stream;
use Illuminate\Http\Request;

class StreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $streams = Stream::query();

        return view('stream.streams')->with('streams', $streams->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        
        return view('stream.ce-stream')->with('departments', $departments);
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
            'department_id' => 'required|exists:departments,id',
            'coordinator' => 'required',
            'total_year' => 'required',
        ]);

        $stream = new Stream();
        $stream->fill($validated);

        $stream->save();

        return redirect('stream')->with('success', 'Stream successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function show(Stream $stream)
    {
        return view('stream.stream')->with('stream', $stream);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function edit(Stream $stream)
    {
        $departments = Department::all();
        
        return view('stream.ce-stream')->with('stream', $stream)->with('departments', $departments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stream $stream)
    {
        //Validate request
        $validated = $request->validate([
            'title' => 'required'
        ]);

        $stream->coordinator = $request->coordinator;
        $stream->fill($validated);

        $stream->save();

        return redirect('stream')->with('success', 'Stream successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stream $stream)
    {
        //
        $stream->delete();

        return redirect('stream')->with('success', 'Stream successfully deleted');
    }
}
