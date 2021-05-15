@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('section.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Sections
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('section.create') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Create
        </span>
    </a>
</li>
@endsection

@section('content')

@isset($section)
<form method="POST" action="{{ route('section.update', $section->id) }}"
    class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
    <input type="hidden" value="PUT" name="_method">
    @else
    <form method="POST" action="{{ route('section.store') }}"
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
                    <div class="col-lg-6">
                        <label>
                            Section name <span class="text-danger"> * </span> :
                        </label>
                        <input type="text" class="form-control m-input" name="name"
                            value="{{ $section->name ?? old('name') }}" placeholder="Enter section name">
                        <span class="m-form__help">
                            e.g Section one, Section two
                        </span>
                    </div>

                    <div class="col-lg-6">
                        <label>
                            Stream <span class="text-danger"> * </span> :
                        </label>
                        <select class="form-control select2" name="stream_id">
                            <option value="">
                                Select stream
                            </option>
                            @foreach ($streams as $stream)
                            <option value="{{ $stream->id }}"
                                @isset($section){{ $section->stream_id == $stream->id ? 'selected' : '' }}@endisset
                                {{ old('stream_id') == $stream->id ? 'selected' : '' }}>
                                {{ $stream->title }}</option>

                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select section stream
                        </span>
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
                                @isset($section){{ $section->academic_year_id == $academicYear->id ? 'selected' : '' }}@endisset
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
                            Academic year
                        </label>
                        <select class="form-control select2" name="coordinator_id">
                            <option value="">
                                Select coordinator
                            </option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}"
                                @isset($section){{ $section->coordinator_id == $user->id ? 'selected' : '' }}@endisset
                                {{ old('coordinator_id') == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}</option>
                                
                            @endforeach
                        </select>
                        <span class="m-form__help">
                            e.g Select section coordinator
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