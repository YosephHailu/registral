@extends('personalInfo.personalInfoRegistrationContainer')

@section('form-container')


<div class="col-md-12 mx-auto" id="personal_information_tab" role="tabpanel">
    <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
        <div class="m-portlet__body">
            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label>
                        First Name <span class="text-danger"> * </span> :
                    </label>
                    <input type="text" class="form-control m-input" placeholder="Enter first name">
                    <span class="m-form__help">
                        Please enter your first name
                    </span>
                </div>
                <div class="col-lg-4">
                    <label>
                        Middle Name <span class="text-danger"> * </span> :
                    </label>
                    <input type="text" class="form-control m-input" placeholder="Enter middle name">
                    <span class="m-form__help">
                        Please enter your middle name
                    </span>
                </div>
                <div class="col-lg-4">
                    <label>
                        Last Name <span class="text-danger"> * </span> :
                    </label>
                    <input type="text" class="form-control m-input" placeholder="Enter last name">
                    <span class="m-form__help">
                        Please enter your last name
                    </span>
                </div>
            </div>
            <div class="form-group m-form__group row">
                <div class="col-lg-6">
                    <label>
                        Email
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Enter your email address">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-map-marker"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter your email
                    </span>
                </div>
                <div class="col-lg-6">
                    <label>
                        Phone <span class="text-danger"> * </span> :
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Enter your phone">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-map-marker"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter your phone
                    </span>
                </div>
            </div>

            <div class="form-group m-form__group row">
                <div class="col-lg-4">
                    <label>Nationality <span class="text-danger"> * </span> </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Enter your nationality">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-map-marker"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter your nationality
                    </span>
                </div>

                <div class="col-lg-4">
                    <label>
                        Zone/Sub City <span class="text-danger"> * </span> :
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Enter your zone/Sub City">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-map-marker"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter your zone/Sub City
                    </span>
                </div>

                <div class="col-lg-4">
                    <label>
                        Woreda <span class="text-danger"> * </span> :
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Enter your woreda">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-map-marker"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter your woreda
                    </span>
                </div>
            </div>
        </div>
    </form>
    <!--end::Form-->
</div>

<hr>
<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
    <div class="m-form__actions m-form__actions--solid">
        <div class="row">

            <div class="col-8">
                <div class="alert py-2 col-8 m-alert--danger alert-warning" role="alert">
                    <strong>
                        N.B.:-
                    </strong>Fill all required fields and Save Before You Go To Next Tab
                </div>
            </div>

            <div class="col-4 text-right">
                <button type="reset" class="btn btn-primary">
                    Save & Continue
                </button>
            </div>
        </div>
    </div>
</div>
@endsection