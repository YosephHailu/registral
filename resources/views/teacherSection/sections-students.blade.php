@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('my.section') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            My Sections
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('section.student', $teacherSection->id) }}" class="m-nav__link">
        <span class="m-nav__link-text">
            {{ $teacherSection->section->name }}
        </span>
    </a>
</li>
@endsection

@section('content')
<div class="px-2">

    <div class="m-portlet m-portlet--full-height">
        <div class="m-portlet__head bg-greyish">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text text-white">
                        {{ strtoupper($teacherSection->section->name) }} STUDENTS
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                    role="tablist">
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link active" href="{{ route('assessment.create', $teacherSection->id) }}">
                            <i class="fa fa-plus"></i> ADD ASSESSMENT
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive">
                <hr>
                <table class="table text-nowrap table-hover table-striped">
                    <thead class="bg-faded">
                        <tr>
                            <th style="width: 50px" class="text-center">#</th>
                            <th style="min-width: 150px;">ID</th>
                            <th style="min-width: 150px;">Name</th>
                            <th style="min-width: 150px;">Stream</th>
                            <th class="text-center" style="min-width: 100px;"><i class="icon-arrow-down12"></i></th>
                        </tr>
                    </thead>
                    <tbody class="p-0">
                        @foreach ($students as $student)
                        <tr>
                            <td class="text-center">{{$student->id}}</td>
                            <td>{{$student->identification_no }}</td>
                            <td>{{$student->name }}</td>
                            <td>{{$student->stream->title }}</td>
                            <td>
                                <a href="{{ route('manage.student.grade', [$student->id, $teacherSection->id]) }}"
                                    class="btn btn-primary col-8 btn-sm mx-1">Manage Grade</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection