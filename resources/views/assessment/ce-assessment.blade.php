@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('assessment.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Semesters
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('assessment.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Assessments
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
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('assessment.create', $teacherSection->id) }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Create
        </span>
    </a>
</li>
@endsection

@section('content')

@isset($assessment)
<form method="POST" action="{{ route('assessment.update', $assessment->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('assessment.store') }}"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @endisset
        @csrf

        <input type="hidden" name="teacher_section_id" value="{{ $teacherSection->id }}">

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
                    <div class="col-lg-4">
                        <label>
                            Course
                        </label>
                        <input type="text" class="form-control m-input" name="course_id"
                            value="{{ $teacherSection->course->name ?? "" }}" disabled
                            placeholder="Enter assessment course">
                        <span class="m-form__help">
                            e.g 1st assessment, 2nd assessment...
                        </span>
                    </div>

                    <div class="col-lg-4">
                        <label>Section</label>
                        <input type="text" class="form-control m-input" name="section_id"
                            value="{{ $teacherSection->section->name ?? "" }}" disabled placeholder="Section">
                        <span class="m-form__help">
                        </span>
                    </div>

                    <div class="col-lg-4">
                        <label>Teacher</label>
                        <input type="text" class="form-control m-input" name="teacher_id"
                            value="{{ $teacherSection->teacher->name ?? "" }}" disabled placeholder="Teacher">
                        <span class="m-form__help">
                        </span>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-5">
                        <label>Value</label>
                        <input type="number" class="form-control m-input" name="value"
                            value="{{ $assessment->value ?? "" }}" placeholder="Value">
                        <span class="m-form__help">
                            Enter assessment maximum mark
                        </span>
                    </div>

                    <div class="col-lg-7">
                        <label>Title</label>
                        <input type="text" class="form-control m-input" name="title"
                            value="{{ $assessment->title ?? "" }}" placeholder="Enter title">
                        <span class="m-form__help">
                            Enter assessment title
                        </span>
                    </div>
                </div>

                <div class="form-group m-form__group row">
                    <div class="col-lg-12">
                        <label>Description</label>
                        <input type="text" class="form-control m-input" name="description"
                            value="{{ $assessment->description ?? "" }}" placeholder="Description">
                        <span class="m-form__help">
                            Enter assessment description
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