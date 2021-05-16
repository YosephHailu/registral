@extends('layouts.app')

@section('content')
<div class="px-5">
    <div class="list-group pull-left hidden-sm hidden-xs col-lg-3">
        <span class="list-group-item text-dark active bg-greyish">
            Navigation
        </span>
        <a id="ml1" href="/Registration/SemesterRegistration" class="list-group-item text-dark text-dark hover">
            <i class="glyphicon glyphicon-edit"></i> Registration
        </a>
        <a id="ml2" href="/Grade/GradeReport" class="list-group-item text-dark">
            <i class="glyphicon glyphicon-print"></i> Grade &amp; Results
        </a>
        <a id="ml4" href="/Services/CateringInformation" class="list-group-item text-dark">
            <i class="glyphicon glyphicon-folder-open"></i> Catering Information
        </a>
        <a id="ml15" href="/CoCurricular/CoCurricular" class="list-group-item text-dark">
            <i class="glyphicon glyphicon-folder-open"></i> Cocurricular Activities
        </a>
        <a id="ml17" href="/Evaluation/StudentStaffEvaluation" class="list-group-item text-dark">
            <i class="glyphicon glyphicon-folder-open"></i> Staff Evaluation
        </a>
    </div>

    <div class="card col-lg-9 px-0">
        <div class="card">
            <div class="card-header header-elements-sm-inline  bg-greyish">
                <h6 class="card-title">Grade Report</h6>
            </div>

            <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">3.25 <span
                                class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i>
                                (GPA)</span></h5>
                        <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16,
                            10:00 am</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <a href="#"
                        class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                        <i class="icon-alarm-add"></i>
                    </a>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">7</h5>
                        <span class="text-muted">Total courses</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <a href="#"
                        class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                        <i class="icon-spinner11"></i>
                    </a>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">47:45</h5>
                        <span class="text-muted">Total Credit hours</span>
                    </div>
                </div>

            </div>

            <div class="table-responsive">
                <hr>
                <table class="table text-nowrap table-hover table-striped">
                    <thead class="bg-faded">
                        <div class="text-greyish pl-2 py-4">
                            <span class="h6">Academic Year :</span> <span
                                class="text-muted">{{ Auth::user()->academicYear->academic_year }}</span>, <span
                                class="ml-5 h6">Year : </span> <span class="text-muted">{{ Auth::user()->year }}</span>,
                            <span class="ml-5 h6">Semester</span> : <span
                                class="text-muted">{{ Auth::user()->semester->name }}</span>
                        </div>
                        <tr>
                            <th style="width: 50px">#</th>
                            <th style="min-width: 150px;">Course Title</th>
                            <th>Code</th>
                            <th>Credit Hour</th>
                            <th>ECTS</th>
                            <th class="text-center">Grade</th>
                            <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                        </tr>
                    </thead>
                    <tbody class="p-0">
                        @foreach ($streamCourses as $streamCourse)
                        <tr>
                            <td class="text-center">{{ $loop->index + 1 }}</td>
                            <td>{{ $streamCourse->course->name }}</td>
                            <td>{{ $streamCourse->course->code }}</td>
                            <td>{{ $streamCourse->credit_hour }}</td>
                            <td>{{ $streamCourse->ects }}</td>
                            <td class="text-center">@php
                                $mark = Auth::user()->studentAssessments->sum(function($query) use ($streamCourse){
                                return $query->assessment->course_id == $streamCourse->course_id ?
                                $query->mark : 0;
                                })
                                @endphp
                                {{ App\Models\Grade::where('min_value', '<', $mark)->where('max_value', '>', $mark )->first()->label ?? "NAN" }}
                            </td>
                            <td><a href="#assessment-tab-{{$streamCourse->id}}" data-toggle="collapse"
                                    class="btn btn-sm btn-primary">Assessments</a></td>
                        </tr>
                        <tr class="collapse table-responsive" id="assessment-tab-{{$streamCourse->id}}">
                            <td></td>
                            <td colspan="4" rowspan="1" class="mx-auto">

                                <table class="table text-nowrap table-hover table-striped">
                                    <thead class="bg-primary">
                                        <tr class="bg-greyish">
                                            <th class="text-center">#</th>
                                            <th>Assessment</th>
                                            <th>Max mark</th>
                                            <th class="text-center">Mark</th>
                                        </tr>
                                    </thead>
                                    <tbody class="p-0">
                                        @foreach (Auth::user()->studentAssessments->filter(function($query) use
                                        ($streamCourse){
                                        return $query->assessment->course_id == $streamCourse->course_id;
                                        }) as $assessment)
                                        <tr>
                                            <td class="text-center">{{ $loop->index + 1 }}</td>
                                            <td>{{ $assessment->assessment->title }}</td>
                                            <td>{{ $assessment->assessment->value }}</td>
                                            <td>{{ $assessment->mark }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </td>
                            <td></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection