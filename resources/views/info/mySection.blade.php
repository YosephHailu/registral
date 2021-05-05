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
                    My Section Information
                </h3>
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="alert m-alert--default" role="alert">
            Use <strong>
                your registration code 
            </strong>
            to check your section
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="m-input-icon m-input-icon--right">
                    <input type="text" class="form-control m-input" placeholder="Enter registration code">
                    <span class="m-input-icon__icon m-input-icon__icon--right">
                        <span>
                            <i class="la la-bookmark-o"></i>
                        </span>
                    </span>
                </div>
                <span class="m-form__help">
                    Please enter your registration code
                </span>
            </div>
            <div>
            <button type="button" class="btn btn-primary btn-sm m-btn m-btn--pill m-btn--wide" data-dismiss="alert" aria-label="Close">
                View Section
            </button>
        </div>
        </div>
    </div>
</div>
@endsection