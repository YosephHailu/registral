@extends('personalInfo.personalInfoRegistrationContainer')

@section('form-container')

<div class="m-portlet m-portlet--creative m-portlet--first py-3">
    <div class="m-portlet__head" style="border: none">
        <span class="h5 mt-2"> Manage your education information</span>

        <button class="btn m-btn--square float-right btn-primary ml-auto">Add</button>
        {{-- <div cla></div> --}}
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="m-portlet m-portlet--creative m-portlet--first m-portlet--bordered-semi">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon m--hide">
                            <i class="flaticon-statistics"></i>
                        </span>

                        <h2 class="m-portlet__head-label m-portlet__head-label--primary bg-greyish text-center"
                            style="min-width: 180px">
                            <span>
                                American School
                            </span>
                        </h2>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="" 
                                class="m-portlet__nav-link btn btn-primary m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill">
                                <i class="la la-pencil"></i>
                            </a>
                        </li>
                        <li class="m-portlet__nav-item">
                            <a href=""
                                class="m-portlet__nav-link btn btn-danger m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill">
                                <i class="la la-trash text-danger"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="m-portlet__body row px-5">
                <div class="col-md-6">
                    <h4 class="m-portlet__head-text">
                        School name : <small class="text-muted">American school</small>
                    </h4>
                    <h4 class="m-portlet__head-text">
                        Start date : <small class="text-muted">Jan, 10 2020</small>
                    </h4>
                    <h4 class="m-portlet__head-text">
                        End date : <small class="text-muted">Sep, 18 2021</small>
                    </h4>
                    <h4 class="m-portlet__head-text">
                        Exit grade : <small class="text-muted">5.15 PTS</small>
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4 class="m-portlet__head-text">
                        Certificate Type : <small class="text-muted">Grade 10 certificate</small>
                    </h4>
                    <h4 class="m-portlet__head-text">
                        Country : <small class="text-muted">Ethiopia</small>
                    </h4>
                    <h4 class="m-portlet__head-text">
                        Region : <small class="text-muted">Addis ababa</small>
                    </h4>

                    <h4 class="m-portlet__head-text">
                        City : <small class="text-muted">Bole</small>
                    </h4>
                </div>
            </div>
        </div>
        <!--end::Portlet-->
    </div>

</div>
@endsection