@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('stream.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Streams
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('stream.show', $stream->id) }}" class="m-nav__link">
        <span class="m-nav__link-text">
            {{ $stream->title }}
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ url('stream-course', $stream->id) }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Add course
        </span>
    </a>
</li>
@endsection

@section('content')

@isset($streamCourse)
<form method="POST" action="{{ route('stream.course.update', $streamCourse->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('stream.course.store') }}"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @endisset
        @csrf

        <input type="hidden" value="{{ $stream->id }}" name="stream_id">

        <div class="m-portlet mx-auto col-md-11">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-credit_hour">
                        <h3 class="m-portlet__head-text">
                            STREAM - COURSE - REGISTRATION - FORM
                        </h3>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label>
                            Course <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="course_id">
                            <option>
                                Select course
                            </option>
                            @foreach ($courses as $course)
                            <option value="{{ $course->id }}"
                                @isset($streamCourse){{ $streamCourse->course_id == $course->id ? 'selected' : '' }}@endisset
                                {{ old('course_id') == $course->id ? 'selected' : '' }}>
                                {{ $course->name }}</option>
                                
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select course
                        </span>
                    </div>
                    
                    <div class="col-lg-6">
                        <label>
                            Semester <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="semester_id">
                            <option>
                                Select semester
                            </option>
                            @foreach ($semesters as $semester)
                            <option value="{{ $semester->id }}"
                                @isset($streamCourse){{ $streamCourse->semester_id == $semester->id ? 'selected' : '' }}@endisset
                                {{ old('semester_id') == $semester->id ? 'selected' : '' }}>
                                {{ $semester->name }}</option>
                                
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select semester
                        </span>
                    </div>
                </div>
            </div>
            
            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-4">
                        <label>
                            Credit hour <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="credit_hour"
                            value="{{ $streamCourse->credit_hour ?? old('credit_hour') }}" placeholder="Enter stream credit_hour">
                        <span class="m-form__help">
                            e.g Enter credit hours
                        </span>
                    </div>
                    <div class="col-lg-4">
                        <label>
                            Ects <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="ects"
                            value="{{ $streamCourse->ects ?? old('ects') }}"
                            placeholder="Enter ects value">
                    </div>
                    <div class="col-lg-4 pt-3">
                        <br>
                        <label class="m-checkbox">
                            <input type="checkbox"  name="is_major"
                             @isset($streamCourse){{$streamCourse->is_major ? "checked" : ""}}@endisset
                            {{-- value="{{ $streamCourse->is_major ?? old('is_major') }}" --}}
                            >
                            Course is a major
                            <span></span>
                        </label>
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