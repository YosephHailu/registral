@extends('layouts.app')

@section('content')
<div class="px-5">
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

    <div class="card col-lg-9 px-0">
        <div class="card">
            <div class="card-header header-elements-sm-inline  bg-greyish">
                <h6 class="card-title">Grade Report</h6>
            </div>

            <div class="card-body d-md-flex align-items-md-center justify-content-md-between flex-md-wrap">
                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <div id="tickets-status"><svg width="42" height="42">
                            <g transform="translate(21,21)">
                                <g class="d3-arc d3-slice-border" style="cursor: pointer;">
                                    <path style="fill: rgb(41, 182, 246);"
                                        d="M1.1634144591899855e-15,19A19,19 0 0,1 -12.326087772183463,-14.459168725498339L-6.163043886091732,-7.229584362749169A9.5,9.5 0 0,0 5.817072295949927e-16,9.5Z">
                                    </path>
                                </g>
                                <g class="d3-arc d3-slice-border" style="cursor: pointer;">
                                    <path style="fill: rgb(239, 83, 80);"
                                        d="M14.331188229058796,-12.474656065130077A19,19 0 0,1 5.817072295949928e-15,19L2.908536147974964e-15,9.5A9.5,9.5 0 0,0 7.165594114529398,-6.237328032565038Z">
                                    </path>
                                </g>
                            </g>
                        </svg></div>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">3.25 <span
                                class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i>
                                (+2.9%)</span></h5>
                        <span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16,
                            10:00 am</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <a href="#"
                        class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                        <i class="icon-alarm-add"></i>
                    </a>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">7</h5>
                        <span class="text-muted">Total courses</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <a href="#"
                        class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                        <i class="icon-spinner11"></i>
                    </a>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">47:45</h5>
                        <span class="text-muted">Total Credit hours</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3 mb-md-0">
                    <a href="#"
                        class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon">
                        <i class="icon-alarm-add"></i>
                    </a>
                    <div class="ml-3">
                        <h5 class="font-weight-semibold mb-0">3.57</h5>
                        <span class="text-muted">GPA</span>
                    </div>
                </div>

            </div>

            <div class="table-responsive">
                <hr>
                <table class="table text-nowrap table-hover table-striped">
                    <thead class="bg-faded">
                        <div class="text-greyish pl-2 py-4">
                            <span class="h6">Academic Year :</span> <span class="text-muted">2019/20</span>, <span
                                class="ml-5 h6">Year : </span> <span class="text-muted">3rd</span>,
                            <span class="ml-5 h6">Semester</span> : <span class="text-muted">Two</span>
                        </div>
                        <tr>
                            <th style="width: 50px">#</th>
                            <th style="min-width: 150px;">Course Title</th>
                            <th>Code</th>
                            <th>Credit Hour</th>
                            <th>ECTS</th>
                            <th>Grade</th>
                            <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
                        </tr>
                    </thead>
                    <tbody class="p-0">
                        <tr>
                            <td class="text-center">1</td>
                            <td>FPGA Programming</td>
                            <td>ITSE-5257</td>
                            <td>3.00</td>
                            <td>7.00</td>
                            <td>A+</td>
                            <td><button class="btn">Assessment</button></td>
                        </tr>

                        <tr>
                            <td class="text-center">2</td>
                            <td>Advanced IT Security</td>
                            <td>ITSE-4092</td>
                            <td>3.75</td>
                            <td>7.00</td>
                            <td>B+</td>
                            <td><button class="btn">Assessment</button></td>
                        </tr>

                        <tr>
                            <td class="text-center">3</td>
                            <td>Software Quality Assurance and Testing</td>
                            <td>ITSE-8557</td>
                            <td>3.00</td>
                            <td>7.00</td>
                            <td>A-</td>
                            <td><button class="btn">Assessment</button></td>
                        </tr>

                        <tr>
                            <td class="text-center">4</td>
                            <td>FPGA Programming</td>
                            <td>ITSE-5257</td>
                            <td>3.00</td>
                            <td>7.00</td>
                            <td>A+</td>
                            <td><button class="btn">Assessment</button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection