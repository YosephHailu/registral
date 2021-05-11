@extends('layouts.registrarHeader')

@section('content')
<div class="px-5 mb-5">
    <div class="list-group pull-left hidden-sm hidden-xs col-lg-3">
        @include('course.sidebar')
    </div>

    <div class="card col-lg-9 px-0">
        <div class="card">
            <div class="card-header header-elements-sm-inline  bg-greyish">
                <h6 class="card-title">Course registration form</h6>
            </div>

            <form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
                <div class="m-portlet__body">
                    <div class="form-group m-form__group row">
                        <div class="col-lg-12">
                            <label>
                                Stream <span class="text-danger"> * </span> :
                            </label>

                            <select class="form-control" name="param">
                                <option>
                                    Select stream
                                </option>
                                <option value="2020/21">
                                    Computer science
                                </option>
                                <option value="2020/21">
                                    Accounting
                                </option>
                                <option value="2020/21">
                                    Marketing
                                </option>
                            </select>

                            <span class="m-form__help">
                                Please course select stream
                            </span>
                        </div>
                    </div>

                    <div class="form-group m-form__group row">
                        <div class="col-lg-6">
                            <label>
                                Academic Year <span class="text-danger"> * </span> :
                            </label>

                            <select class="form-control" name="param">
                                <option>
                                    Select year
                                </option>
                                <option value="2020/21">
                                    1st year
                                </option>
                                <option value="2020/21">
                                    2nd year
                                </option>
                                <option value="2020/21">
                                    3rd year
                                </option>
                                <option value="2020/21">
                                    4th year
                                </option>
                            </select>

                            <span class="m-form__help">
                                Please course select stream
                            </span>
                        </div>

                        <div class="col-lg-6">
                            <label>
                                Semester <span class="text-danger"> * </span> :
                            </label>

                            <select class="form-control" name="param">
                                <option>
                                    Select semester
                                </option>
                                <option value="2020/21">
                                    One
                                </option>
                                <option value="2020/21">
                                    Two
                                </option>
                                <option value="2020/21">
                                    Three
                                </option>
                            </select>

                            <span class="m-form__help">
                                Please select the semester
                            </span>
                        </div>
                    </div>


                    <div class="form-group m-form__group row">
                        <div class="col-lg-6">
                            <label>
                                Course Name <span class="text-danger"> * </span> :
                            </label>
                            <input type="text" class="form-control m-input" placeholder="Enter course name">
                            <span class="m-form__help">
                                Please enter course name
                            </span>
                        </div>
                        <div class="col-lg-6">
                            <label>
                                Course Code <span class="text-danger"> * </span> :
                            </label>
                            <input type="text" class="form-control m-input" placeholder="Enter course code">
                            <span class="m-form__help">
                                Please enter course code
                            </span>
                        </div>

                        <div class="col-lg-12 mt-3">
                            <label>
                                Course Coordinator <span class="text-danger"> * </span> :
                            </label>
                            <input type="text" class="form-control m-input" placeholder="Enter course coordinator">
                            <span class="m-form__help">
                                Please enter course coordinator
                            </span>
                        </div>
                    </div>

                </div>

                <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                    <div class="m-form__actions m-form__actions--solid">
                        <div class="row">

                            <div class="col-8">
                                <div class="alert py-2 col-8 m-alert--danger alert-warning" role="alert">
                                    <strong>
                                        N.B.:-
                                    </strong>Fill all required fields and Save Before You Continue
                                </div>
                            </div>

                            <div class="col-4 text-right">
                                <button type="reset" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
@endsection