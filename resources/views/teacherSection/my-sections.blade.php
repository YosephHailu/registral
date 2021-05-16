@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('stream.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Sections
        </span>
    </a>
</li>
@endsection

@section('content')
<div class="px-5">

    <div class="m-portlet m-portlet--full-height">
        <div class="m-portlet__head bg-greyish">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text text-white">
                        MY SECTIONS
                    </h3>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive">
                <hr>
                <table class="table text-nowrap table-hover table-striped">
                    <thead class="bg-faded">
                        <tr>
                            <th style="width: 50px">#</th>
                            <th style="min-width: 150px;">Teacher</th>
                            <th style="min-width: 150px;">Section</th>
                            <th style="min-width: 150px;">Total students</th>
                            <th class="text-center" style="min-width: 100px;"><i class="icon-arrow-down12"></i></th>
                        </tr>
                    </thead>
                    <tbody class="p-0">
                        @foreach ($teacherSections as $teacherSection)
                        <tr>
                            <td class="text-center">{{$teacherSection->id}}</td>
                            <td>{{$teacherSection->teacher->name }}</td>
                            <td>{{$teacherSection->section->name }}</td>
                            <td>{{$teacherSection->section->students->count() }}</td>
                            <td>
                                <a href="{{ route('section.student', $teacherSection->id) }}"
                                    class="btn btn-primary col-8 btn-sm mx-1">Students</a>
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