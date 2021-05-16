@extends('course.courseContainer')

@section('form-container')
@isset($course)
<form method="POST" action="{{ route('course.update', $course->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('course.store') }}"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @endisset
        @csrf

        <div class="m-portlet__body">
            <div class="form-group m-form__group row">
                <div class="col-lg-12">
                    <label>
                        Department <span class="text-danger"> * </span> :
                    </label>

                    <select class="form-control" name="department_id">
                        <option value="">
                            Select Department
                        </option>

                        @foreach ($departments as $department)
                        <option value="{{ $department->id }}"
                            @isset($course){{ $course->department_id == $department->id ? 'selected' : '' }}@endisset
                            {{ old('department_id') == $department->id ? 'selected' : '' }}>{{ $department->name }}
                        </option>
                        @endforeach
                    </select>

                    <span class="m-form__help">
                        Please Department
                    </span>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <div class="col-lg-6">
                    <label>
                        Course Name <span class="text-danger"> * </span> :
                    </label>
                    <input type="text" name="name" value="{{ $course->name ?? old('name') }}"
                        class="form-control m-input" placeholder="Enter course name">
                    <span class="m-form__help">
                        Please enter course name
                    </span>
                </div>
                <div class="col-lg-6">
                    <label>
                        Course Code <span class="text-danger"> * </span> :
                    </label>
                    <input type="text" name="code" value="{{ $course->code ?? old('code') }}"
                        class="form-control m-input" placeholder="Enter course code">
                    <span class="m-form__help">
                        Please enter course code
                    </span>
                </div>

                <div class="col-lg-12 mt-3">
                    <label>
                        Course Coordinator <span class="text-danger"> * </span> :
                    </label>
                    <select class="form-control select2" name="coordinator">
                        @foreach ($coordinators as $operator)
                        <option value="{{ $operator->name }}"
                            @isset($course){{ $course->coordinator == $operator->name ? 'selected' : '' }}@endisset
                            {{ old('coordinator') == $operator->name ? 'selected' : '' }}>
                            {{ $operator->name }}</option>

                        @endforeach
                    </select>
                    <span class="m-form__help">
                        Please enter course coordinator
                    </span>
                </div>
            </div>

        </div>

        <hr class="py-0">
        <div class="m-form__actions m-form__actions--solid bg-white py-0">
            <div class="row">
                <div class="col-8">
                    <div class="alert py-2 col-8 m-alert--danger alert-warning" role="alert">
                        <strong>
                            N.B.:-
                        </strong>Fill all required fields Before You Save
                    </div>
                </div>

                <div class="col-4 text-right">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>
    @endsection