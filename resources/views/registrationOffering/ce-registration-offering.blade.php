@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('registration.offering.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Registration offering
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('registration.offering.create') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Create
        </span>
    </a>
</li>
@endsection

@section('content')

@isset($registrationOffering)
<form method="POST" action="{{ route('registration.offering.update', $registrationOffering->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('registration.offering.store') }}"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @endisset
        @csrf

        <div class="m-portlet mx-auto col-md-11">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            SEMESTER - REGISTRATION - FORM
                        </h3>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label>
                            Academic year <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="academic_year_id">
                            <option value="">
                                Select academic year
                            </option>
                            @foreach ($academicYears as $academicYear)
                            <option value="{{ $academicYear->id }}"
                                @isset($registrationOffering){{ $registrationOffering->academic_year_id == $academicYear->id ? 'selected' : '' }}@endisset
                                {{ old('academic_year_id') == $academicYear->id ? 'selected' : '' }}>
                                {{ $academicYear->academic_year }}</option>
                                
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select academic year
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
                                @isset($registrationOffering){{ $registrationOffering->semester_id == $semester->id ? 'selected' : '' }}@endisset
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
                            Start date <span class="text-danger"> * </span> :
                        </label>
                        <input type="date" class="form-control m-input" name="start_date"
                            value="{{ $registrationOffering->start_date ?? old('start_date') }}" placeholder="Enter start date">
                        <span class="m-form__help">
                            Select start date
                        </span>
                    </div>
                    
                    <div class="col-lg-4">
                        <label>
                            End date <span class="text-danger"> * </span> :
                        </label>
                        <input type="date" class="form-control m-input" name="end_date"
                            value="{{ $registrationOffering->end_date ?? old('end_date') }}" placeholder="Enter end date">
                        <span class="m-form__help">
                            Select end date
                        </span>
                    </div>
                    
                    <div class="col-lg-4">
                        <label>
                            Year <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="year"
                            value="{{ $registrationOffering->year ?? old('year') }}" placeholder="Enter year">
                        <span class="m-form__help">
                            Enter targeted year
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