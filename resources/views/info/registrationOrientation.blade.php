@extends('layouts.info')

@section('content')

<div class="m-portlet col-8 mx-auto">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <span class="m-portlet__head-icon m--hide">
                    <i class="la la-gear"></i>
                </span>
                <h3 class="m-portlet__head-text">
                    Online Registration Procedures
                </h3>
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="alert m-alert--default" role="alert">
            <strong>
                Follow the following procedure to register online.
            </strong>
        </div>

        <div class="m-demo__preview">
            <div class="m-list-timeline">
                <div class="m-list-timeline__items">
                    <div class="m-list-timeline__item">
                        <span class="m-list-timeline__badge"></span>
                        <span class="m-list-timeline__text">
                            Register to get username and password
                            <a href="{{ route('register') }}" class="m-badge m-badge--success m-badge--wide">
                                Register
                            </a>
                        </span>
                    </div>
                    <div class="m-list-timeline__item">
                        <span class="m-list-timeline__badge"></span>
                        <span class="m-list-timeline__text">
                            Login using username and password
                            <a href="{{ route('login') }}" class="m-badge m-badge--success m-badge--wide">
                                Login
                            </a>
                        </span>
                    </div>
                    <div class="m-list-timeline__item">
                        <span class="m-list-timeline__badge"></span>
                        <span class="m-list-timeline__text">
                            Complete your profile personal information, documents and your address
                        </span>
                    </div>
                    
                    <div class="m-list-timeline__item">
                        <span class="m-list-timeline__badge"></span>
                        <span class="m-list-timeline__text">
                            Select courses for registration and wait for confirmation from us
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection