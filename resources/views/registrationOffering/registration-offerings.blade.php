@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('registration.offering.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Registration Offerings
        </span>
    </a>
</li>
@endsection

@section('content')

<!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height col-md-10 mx-auto">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    Registration Offerings
                </h3>
            </div>
        </div>

        <div class="m-portlet__head-tools">
            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" href="{{ route('registration.offering.create') }}">
                        <i class="fa fa-plus"></i> ADD OFFERING
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="m-portlet__body">
        <div class="m-widget4 m-widget4--progress">
            <div class="m-widget4__item bg-greyish text-white">
                <div class="m-widget4__info">
                    <span class="m-widget4__title text-white">
                        Academic year
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title text-white">
                        Start Date
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title text-white">
                        Year
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title text-white">
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title text-white">
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title text-white">
                    </span>
                </div>
                <div class="m-widget4__progress">
                    <span class="m-widget4__title text-white">
                    </span>
                </div>
                
            </div>
        </div>
        <hr class="my-0">
        @foreach ($registrationOfferings as $registrationOffering)
        <div class="m-widget4 m-widget4--progress">
            <div class="m-widget4__item">
                <div class="m-widget4__info">
                    <span class="m-widget4__title">
                        {{ $registrationOffering->academicYear->academic_year }}
                    </span>
                    
                    <span
                        class="m-btn m-btn--pill badge text-white bg-{{$registrationOffering->active ? "success" : "danger"}}">
                        {{ $registrationOffering->active ? "Active" : "Inactive" }}
                    </span>
                    <br>
                    <span class="m-widget4__sub">
                        Semester : {{ $registrationOffering->semester->name }}
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title">
                        {{ $registrationOffering->start_date }}
                    </span>
                    <br>
                    <span class="m-widget4__sub">
                        End date : {{ $registrationOffering->end_date }}
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title">
                        {{ $registrationOffering->year }}
                    </span>
                </div>

                <div class="m-widget4__info">
                    
                </div>
                
                <div class="m-widget4__ext px-2">
                    <a href="{{ route('change.registration.offering.status', $registrationOffering->id) }}"
                        class="m-btn m-btn--pill btn btn-sm btn-{{$registrationOffering->active ? "danger" : "success"}} btn-block my-1">
                        {{ $registrationOffering->active ? "Deactivate" : "Activate" }}
                    </a>
                </div>

                <div class="m-widget4__ext px-2">
                    <a href="{{ route('registration.offering.edit', $registrationOffering->id) }}"
                        class="m-btn m-btn--pill btn btn-sm btn-primary btn-block my-1">
                        Edit
                    </a>
                </div>
            </div>
        </div>
        <hr class="my-0">
        @endforeach
    </div>
</div>
<!--end:: Widgets/User Progress -->
@endsection