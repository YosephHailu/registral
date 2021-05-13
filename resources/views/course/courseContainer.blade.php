@extends('layouts.staff')

@section('content')

<div class="m-portlet mx-auto col-md-11">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        COURSE REGISTRATION FORM
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <ul class="nav nav-tabs  m-tabs-line" role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link {{ (Request::is('*course*') ?'active' :'')}}" href="{{ route('course.create') }}" role="tab">
                        Course Information
                    </a>
                </li>
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link {{ (Request::is('*mother-information*') ?'active' :'')}}" href="{{ route('mother.information') }}" role="tab">
                        Course Modules
                    </a>
                </li>
                
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link {{ (Request::is('*education-information*') ?'active' :'')}}" href="{{ route('education.information') }}" role="tab">
                        Course Resources
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                @yield('form-container')
            </div>
        </div>
    </div>
@endsection