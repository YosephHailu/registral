@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('stream.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Courses
        </span>
    </a>
</li>
@endsection

@section('content')
<div class="px-5">

    <div class="m-portlet m-portlet--full-height">
        <div class="m-portlet__head bg-greyish">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text text-white">
                        Course
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                    role="tablist">
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link active" href="{{ route('course.create') }}">
                            <i class="fa fa-plus"></i> ADD COURSE
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
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

            </div>

            <div class="table-responsive">
                <hr>
                <table class="table text-nowrap table-hover table-striped">
                    <thead class="bg-faded">
                        <tr>
                            <th style="width: 50px">#</th>
                            <th style="min-width: 150px;">Department</th>
                            <th style="min-width: 150px;">Course Name</th>
                            <th>Code</th>
                            <th>Coordinator</th>
                            <th class="text-center" style="min-width: 100px;"><i class="icon-arrow-down12"></i></th>
                        </tr>
                    </thead>
                    <tbody class="p-0">
                        @foreach ($courses as $course)
                        <tr>
                            <td class="text-center">{{$course->id}}</td>
                            <td>{{$course->department->name}}</td>
                            <td>{{$course->name}}</td>
                            <td>{{$course->code}}</td>
                            <td>{{$course->coordinator}}</td>
                            <td class="row"><a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                    <form class="p-0"
                                    action="{{ route('course.destroy', $course->id) }}"
                                    onsubmit="return confirm('Are you sure')" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="m-btn btn btn-sm btn-danger">
                                        Delete
                                    </button>
                                    </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection