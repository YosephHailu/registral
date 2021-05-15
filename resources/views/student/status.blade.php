@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('student.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Streams
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('student.show', $student->id) }}" class="m-nav__link">
        <span class="m-nav__link-text">
            {{ $student->title }}
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ url('student-academicYear', $student->id) }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Add academicYear
        </span>
    </a>
</li>
@endsection

@section('content')

<form method="POST" action="{{ route('change.student.status', $student->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @csrf


        <div class="m-portlet mx-auto col-md-11">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-credit_hour">
                        <h3 class="m-portlet__head-text">
                            STUDENT - ACTIVATION - FORM
                        </h3>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label>
                            Academic Year <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="academic_year_id">
                            <option value="">
                                Select academicYear
                            </option>
                            @foreach ($academicYears as $academicYear)
                            <option value="{{ $academicYear->id }}"
                                @isset($academicYear){{ $student->academic_year_id == $academicYear->id ? 'selected' : '' }}@endisset
                                {{ old('academic_year_id') == $academicYear->id ? 'selected' : '' }}>
                                {{ $academicYear->academic_year }}</option>
                                
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select academicYear
                        </span>
                    </div>
                    
                    <div class="col-lg-6">
                        <label>
                            Semester <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="semester_id">
                            <option value="">
                                Select semester
                            </option>
                            @foreach ($semesters as $semester)
                            <option value="{{ $semester->id }}"
                                @isset($semester){{ $student->semester_id == $semester->id ? 'selected' : '' }}@endisset
                                {{ old('semester_id') == $semester->id ? 'selected' : '' }}>
                                {{ $semester->name }}</option>
                                
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select semester
                        </span>
                    </div>
                    
                    <div class="col-lg-12">
                        <label>
                            Section <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="section_id">
                            <option value="">
                                Select section
                            </option>
                            @foreach ($sections as $section)
                            <option value="{{ $section->id }}"
                                @isset($section){{ $student->section_id == $section->id ? 'selected' : '' }}@endisset
                                {{ old('section_id') == $section->id ? 'selected' : '' }}>
                                {{ $section->name }}</option>
                                
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select student section
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