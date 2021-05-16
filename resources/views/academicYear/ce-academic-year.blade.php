@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('academic.year.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Academic Years
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('academic.year.create') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Create
        </span>
    </a>
</li>
@endsection

@section('content')

@isset($academicYear)
<form method="POST" action="{{ route('academic.year.update', $academicYear->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('academic.year.store') }}"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @endisset
        @csrf

        <div class="m-portlet mx-auto col-md-11">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            ACADEMIC YEAR - REGISTRATION - FORM
                        </h3>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-7">
                        <label>
                            Academic Year <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="academic_year"
                            value="{{ $academicYear->academic_year ?? old('academic_year') }}" placeholder="Enter academic year">
                        <span class="m-form__help">
                            e.g 2020/21, 2019/20, 2019/18...
                        </span>
                    </div>
                    
                    <div class="col-lg-5">
                        <label>
                            End Date <span class="text-danger"> * </span> :
                        </label>
                        <input type="date" class="form-control m-input" name="end_date"
                            value="{{ $academicYear->end_date ?? old('end_date') }}">
                        <span class="m-form__help">
                            e.g Select academic end date
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