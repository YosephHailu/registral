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
    <a href="{{ route('stream.create') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Create
        </span>
    </a>
</li>
@endsection

@section('content')

@isset($stream)
<form method="POST" action="{{ route('stream.update', $stream->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('stream.store') }}"
        class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        @endisset
        @csrf

        <div class="m-portlet mx-auto col-md-11">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            STREAM - REGISTRATION - FORM
                        </h3>
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-8">
                        <label>
                            Stream title <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="title"
                            value="{{ $stream->title ?? old('title') }}" placeholder="Enter stream title">
                        <span class="m-form__help">
                            e.g School Of Computing, Accounting
                        </span>
                    </div>
                    <div class="col-lg-4">
                        <label>
                            Coordinator <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="coordinator"
                            value="{{ $stream->coordinator ?? old('coordinator') }}"
                            placeholder="Enter coordinator name">
                    </div>
                </div>
            </div>

            <div class="m-portlet__body">
                <div class="form-group m-form__group row">
                    <div class="col-lg-6">
                        <label>
                            Department <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control" name="department_id">
                            <option>
                                Select department
                            </option>
                            @foreach ($departments as $department)
                            <option value="{{ $department->id }}"
                                @isset($stream){{ $stream->department_id == $department->id ? 'selected' : '' }}@endisset
                                {{ old('department_id') == $department->id ? 'selected' : '' }}>
                                {{ $department->name }}</option>
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g School Of Computing, Accounting
                        </span>
                    </div>
                    <div class="col-lg-6">
                        <label>
                            Total years <span class="text-danger"> * </span> :
                        </label>
                        <input type="number" class="form-control m-input" name="total_year"
                            value="{{ $stream->total_year ?? old('total_year') }}"
                            placeholder="Enter total_year name">
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