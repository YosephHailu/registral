@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('department.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Departments
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('department.create') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Create
        </span>
    </a>
</li>
@endsection

@section('content')

@isset($department)
<form method="POST" action="{{ route('department.update', $department->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('department.store') }}"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @endisset
        @csrf

        <div class="m-portlet mx-auto col-md-10">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            DEPARTMENT FORM
                        </h3>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-8">
                        <label>
                            Department name <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="name"
                            value="{{ $department->name ?? old('name') }}" placeholder="Enter department name">
                        <span class="m-form__help">
                            e.g School Of Computing, Accounting
                        </span>
                    </div>
                    <div class="col-lg-4">
                        <label>
                            Coordinator <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="coordinator">
                            @foreach ($coordinators as $operator)
                            <option value="{{ $operator->name }}"
                                @isset($department){{ $department->coordinator == $operator->name ? 'selected' : '' }}@endisset
                                {{ old('coordinator') == $operator->name ? 'selected' : '' }}>
                                {{ $operator->name }}</option>
    
                            @endforeach
                        </select>
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