@extends('layouts.app')

@section('content')
<div class="px-5 row">
    <div class="list-group pull-left hidden-sm hidden-xs col-lg-3">
        <span class="list-group-item text-dark active bg-greyish">
            Navigation
        </span>
        <a id="ml1" href="/Registration/SemesterRegistration" class="list-group-item text-dark text-dark hover">
            <i class="glyphicon glyphicon-edit"></i> Registration
        </a>
        <a id="ml2" href="/Grade/GradeReport" class="list-group-item text-dark">
            <i class="glyphicon glyphicon-print"></i> Grade &amp; Results
        </a>
        <a id="ml4" href="/Services/CateringInformation" class="list-group-item text-dark">
            <i class="glyphicon glyphicon-folder-open"></i> Catering Information
        </a>
        <a id="ml15" href="/CoCurricular/CoCurricular" class="list-group-item text-dark">
            <i class="glyphicon glyphicon-folder-open"></i> Cocurricular Activities
        </a>
        <a id="ml17" href="/Evaluation/StudentStaffEvaluation" class="list-group-item text-dark">
            <i class="glyphicon glyphicon-folder-open"></i> Staff Evaluation
        </a>
    </div>

    <div class="col-lg-9 px-0">
        <div class="card">
            <div class="card-header header-elements-sm-inline  bg-greyish">
                <h6 class="card-title mt-1">Assessment Result</h6>
            </div>

            <div class="form-group m-form__group row px-3">
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <label class="col-form-label">
                        Academic Year
                    </label>
                    <select class="form-control" name="param">
                        <option>
                            Select academic year
                        </option>
                        <option value="2020/21">
                            2020/21
                        </option>
                        <option value="2020/21">
                            2019/20
                        </option>
                        <option value="2020/21">
                            2018/19
                        </option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-9 col-sm-12">
                    <label class="col-form-label">
                        Semester
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
                </div>
                <div class="col-lg-4 col-md-9 col-sm-12 pt-3">
                    <button class="btn btn-primary mt-4">Show Result</button>
                </div>
            </div>
        </div>


        <hr class="col-8 mx-auto">
        <div class="card card-body border-top-info">
            <a href="#collapse-link" class="font-weight-semibold card-header" data-toggle="collapse">
                <span class="h6" style="color: #1E57B0">Course Title : </span> <span class="text-muted">Advanced
                    IT Security</span>
            </a>

            <div class="collapse table-responsive" id="collapse-link">
                <table class="table text-nowrap table-hover table-striped">
                    <thead class="bg-faded">
                        <tr>
                            <th style="width: 50px">S.No.</th>
                            <th style="min-width: 150px;">Assessment</th>
                            <th>Mark</th>
                        </tr>
                    </thead>
                    <tbody class="p-0">
                        <tr>
                            <td class="text-center">1</td>
                            <td>Assessment one</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Project one</td>
                            <td>23.5</td>
                        </tr>

                        <tr>
                            <td class="text-center">2</td>
                            <td>Project two</td>
                            <td>18.5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection