@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ url('') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Grade report
        </span>
    </a>
</li>
@endsection

@section('content')
<style>
    .table-bordered {
        border: 1px solid black;
    }

    .table-bordered th {
        border: 1px solid black !important;
    }

    .table-bordered td {
        border: 1px solid black;
    }
</style>
<div class="card">

    <div class="text-center p-3">
        <h3>GRADE REPORT</h3>
    </div>

    <div class="table-responsive">
        <table class="table text-nowrap table-hover table-bordered">
            <thead>
                <tr>
                    <th class="bg-faded">Department</th>
                    <th colspan="2">{{ $student->stream->department->name ?? ""}}</th>
                    <th class="bg-faded">Issued Date</th>
                    <th>{{Carbon\Carbon::parse($student->created_at)->format('M, d Y')}}</th>
                </tr>

                <tr>
                    <th class="bg-faded">Stream</th>
                    <th>{{ $student->stream->title ?? ""}}</th>
                    <th class="bg-faded">Semester</th>
                    <th colspan="2">Year {{ $student->year }}, {{ $student->semester->name ?? ""}}
                        ({{ $student->academicYear->academic_year ?? ""}})</th>
                </tr>
            </thead>

            <thead>
                <tr>
                    <th colspan="5" class="text-center h5">GRADE REPORT</th>
                </tr>
                <tr>
                    <th class="bg-faded">ID</th>
                    <th>{{$student->identification_no}}</th>
                </tr>

                <tr>
                    <th class="bg-faded">Student</th>
                    <th colspan="2">{{$student->name}}</th>

                </tr>
                <tr class="bg-faded">
                    <th>#</th>
                    <th>Course Title</th>
                    <th>Course Code</th>
                    <th>Credit hour</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($streamCourses as $streamCourse)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $streamCourse->course->name }}</td>
                    <td>{{ $streamCourse->course->code }}</td>
                    <td>{{ $streamCourse->credit_hour }}</td>
                    <td class="text-center">@php
                        $mark = $student->studentAssessments->sum(function($query) use ($streamCourse){
                        return $query->assessment->course_id == $streamCourse->course_id ?
                        $query->mark : 0;
                        })
                        @endphp
                        {{ App\Models\Grade::where('min_value', '<', $mark)->where('max_value', '>', $mark )->first()->label ?? "NAN" }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection