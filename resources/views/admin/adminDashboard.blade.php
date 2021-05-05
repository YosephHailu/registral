@extends('layouts.app')

@section('content')

<style>
    .hhigh {
        font-size: 4em;
    }
</style>

<div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light "
    style="margin-top: -50px">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h1 class="m-portlet__head-text m--font-light">
                    SCHOOL OF COMPUTING
                </h1>
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="m-widget17">
            <div
                class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger">
                <div class="m-widget17__chart" style="height:320px; background-image: url('{{asset('bg.jpg')}}'); background-size: cover">
                </div>
            </div>
            <div class="m-widget17__stats">
                <div class="m-widget17__items m-widget17__items-col1">
                    <div class="m-widget17__item">
                        <span class="m-widget17__icon hhigh pt-0">
                            15
                        </span>
                        <span class="m-widget17__subtitle mt-0 pt-0">
                            Courses provided by the department
                        </span>
                        <span class="m-widget17__desc">
                            10 Active
                        </span>
                    </div>
                    <div class="m-widget17__item">
                        <span class="m-widget17__icon hhigh pt-0">
                            11
                        </span>
                        <span class="m-widget17__subtitle mt-0 pt-0">
                            Teachers
                        </span>
                        <span class="m-widget17__desc">
                            
                        </span>
                    </div>
                </div>
                <div class="m-widget17__items m-widget17__items-col2">
                    <div class="m-widget17__item">
                        <span class="m-widget17__icon hhigh pt-0">
                            1,500
                        </span>
                        <span class="m-widget17__subtitle mt-0 pt-0">
                            Students
                        </span>
                        <span class="m-widget17__desc">
                            998 Graduated
                        </span>
                    </div>
                    <div class="m-widget17__item">
                        <span class="m-widget17__icon">
                            <i class="flaticon-time m--font-danger"></i>
                        </span>
                        <span class="m-widget17__subtitle">
                            Arrived
                        </span>
                        <span class="m-widget17__desc">
                            34 Upgraded Boxes
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection