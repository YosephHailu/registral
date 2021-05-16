@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('teacher.section.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Sections
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('teacher.section.create') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Create
        </span>
    </a>
</li>
@endsection

@section('content')

@isset($teacherSection)
<form method="POST" action="{{ route('teacher.section.update', $teacherSection->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('teacher.section.store') }}"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @endisset
        @csrf

        <div class="m-portlet mx-auto col-md-11">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            SECTION INFORMATION - REGISTRATION - FORM
                        </h3>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    
                    <div class="col-lg-12">
                        <label>
                            Course <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="course_id">
                            <option value="">
                                Select course
                            </option>
                            @foreach ($courses as $course)
                            <option value="{{ $course->id }}"
                                @isset($teacherSection){{ $teacherSection->course_id == $course->id ? 'selected' : '' }}@endisset
                                {{ old('academic_year_id') == $course->id ? 'selected' : '' }}>
                                {{ $course->name }}</option>
                                
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select course
                        </span>
                    </div>
                    
                    <div class="col-lg-6">
                        <label>
                            Teacher <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="teacher_id">
                            <option value="">
                                Select teacher
                            </option>
                            @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}"
                                @isset($teacherSection){{ $teacherSection->teacher_id == $teacher->id ? 'selected' : '' }}@endisset
                                {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>
                                {{ $teacher->name }}</option>

                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select teacher
                        </span>
                    </div>  

                    <div class="col-lg-6">
                        <label>
                            Section <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="section_id">
                            <option value="">
                                Select section
                            </option>
                            @foreach ($sections as $section)
                            <option value="{{ $section->id }}"
                                @isset($teacherSection){{ $teacherSection->section_id == $section->id ? 'selected' : '' }}@endisset
                                {{ old('academic_year_id') == $section->id ? 'selected' : '' }}>
                                {{ $section->name }}</option>
                                
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select section
                        </span>
                    </div>
                    
                </div>
            </div>
            <!--end::Form-->

            <hr>
            <div class="row px-3">
                <div class="col-9">
                    <div class="alert py-2 col-8 m-alert--danger alert-warning" role="alert">
                        <strong>
                            N.B.:-
                        </strong>Fill all required fields Before You Save
                    </div>
                </div>

                <div class="col-3 text-right">
                    <button type="submit" class="btn btn-primary btn-block">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>

    @endsection