@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('grade.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Grades
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('grade.create') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Create
        </span>
    </a>
</li>
@endsection

@section('content')

@isset($grade)
<form method="POST" action="{{ route('grade.update', $grade->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('grade.store') }}"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @endisset
        @csrf

        <div class="m-portlet mx-auto col-md-11">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            GRADE INFORMATION - REGISTRATION - FORM
                        </h3>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-4">
                        <label>
                            Grade label <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="label"
                            value="{{ $grade->label ?? old('label') }}" placeholder="Enter grade label">
                        <span class="m-form__help">
                            e.g A+, A, B+, C..
                        </span>
                    </div>

                    <div class="col-lg-4">
                        <label>
                            Min value <span class="text-danger"> * </span> :
                        </label>
                        <input type="number" class="form-control m-input" name="min_value"
                            value="{{ $grade->min_value ?? old('min_value') }}"
                            placeholder="Enter minimum grade value">
                            <span class="m-form__help">
                                e.g 35, 60
                            </span>
                    </div>
                    
                    <div class="col-lg-4">
                        <label>
                            Max value <span class="text-danger"> * </span> :
                        </label>
                        <input type="number" class="form-control m-input" name="max_value"
                            value="{{ $grade->max_value ?? old('max_value') }}"
                            placeholder="Enter maximum grade value">
                            <span class="m-form__help">
                                e.g 45, 55
                            </span>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-12">
                        <label>
                            Description <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="description"
                            value="{{ $grade->description ?? old('description') }}"
                            placeholder="Enter description">
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