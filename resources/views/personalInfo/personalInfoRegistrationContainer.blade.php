@extends('layouts.app')

@section('content')

<div class="m-portlet mx-auto col-md-10">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        REGISTRATION FORM
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <ul class="nav nav-tabs  m-tabs-line" role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#personal_information_tab" role="tab">
                        Personal Information
                    </a>
                </li>
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#personal_information_tab" role="tab">
                        Mother Information
                    </a>
                </li>
                
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#personal_information_tab" role="tab">
                        Education Background
                    </a>
                </li>
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#personal_information_tab" role="tab">
                        Contact Information
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                @yield('form-container')
            </div>
        </div>
    </div>
@endsection