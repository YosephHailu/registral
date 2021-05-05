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
                <div class="col-lg-4">
                    <label>
                        Birth Place
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Enter your birth place">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-map-marker"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter your birth place name
                    </span>
                </div>
                <div class="col-lg-4">
                    <label>
                        Birth Date <span class="text-danger"> * </span> :
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="text" class="form-control m-input" placeholder="Enter your address">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-map-marker"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please enter your address
                    </span>
                </div>
                <div class="col-lg-4">
                    <label>
                        Gender <span class="text-danger"> * </span> :
                    </label>
                    <div class="m-radio-inline">
                        <label class="m-radio m-radio--solid">
                            <input type="radio" name="gender" checked="" value="male">
                            Male
                            <span></span>
                        </label>
                        <label class="m-radio m-radio--solid">
                            <input type="radio" name="example_2" value="female">
                            Female
                            <span></span>
                        </label>
                    </div>
                    <span class="m-form__help">
                        Please select your gender
                    </span>
                </div>
            </div>
            
            <div class="form-group m-form__group row">
                <div class="col-lg-6">
                    <label>
                        Photo <span class="text-danger"> * </span> :
                    </label>
                    <div class="m-input-icon m-input-icon--right">
                        <input type="file" class="form-control m-input" placeholder="Enter your birth place">
                        <span class="m-input-icon__icon m-input-icon__icon--right">
                            <span>
                                <i class="la la-map-marker"></i>
                            </span>
                        </span>
                    </div>
                    <span class="m-form__help">
                        Please select your profile photo
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
            <div class="col-lg-6">
                <button type="reset" class="btn btn-secondary">
                    Cancel
                </button>
            </div>
            <div class="col-lg-6 m--align-right">
                <button type="reset" class="btn btn-primary">
                    Save & Continue
                </button>
            </div>
        </div>
    </div>
</div>
@endsection