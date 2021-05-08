@extends('layouts.app')

@section('content')
<div class="px-5">
    <div class="list-group pull-left hidden-sm hidden-xs col-lg-3">
        <span class="list-group-item text-dark active  bg-greyish">
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

<div class="card border-greyish col-lg-9 px-0">
    <div
        class="card-header alpha-success bg-greyish py-2  text-success-800 border-bottom-success header-elements-inline">
        <h6 class="card-title mt-1">My profile</h6>
    </div>

    <div class="card-body row">
        <div class="col-md-4">
            <img src="{{asset('assets/app/media/img/users/300_11.jpg')}}" style="width: 100%; height: 250px" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="py-2">Name : <small class="text-muted">John doe</small> </h4>
            <h4 class="py-2">ID No : <small class="text-muted">UID/2548/13</small> </h4>
            <h4 class="py-2">Department : <small class="text-muted">Information technology and computer science</small>
            </h4>
            <div class="row px-3">
                <h4 class="py-2 mr-5">Section : <small class="text-muted">1</small> </h4>
                <h4 class="py-2 text-center">Year : <small class="text-muted">I</small> </h4>
            </div>
            <h4 class="py-2">Year of admission : <small class="text-muted">2013</small></h4>
        </div>
    </div>
</div>
</div>
@endsection