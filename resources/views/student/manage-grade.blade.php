@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('my.section') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            My-sections
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('section.student', $teacherSection->id) }}" class="m-nav__link">
        <span class="m-nav__link-text">
            {{ $teacherSection->section->name }}
        </span>
    </a>
</li>
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('manage.student.grade', [$student->id, $teacherSection->id]) }}" class="m-nav__link">
        <span class="m-nav__link-text">
            {{ $student->name }}
        </span>
    </a>
</li>
@endsection

@section('content')

<!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
    <div class="m-portlet__head bg-greyish">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text text-white">
                    Students
                </h3>
            </div>
        </div>
    </div>

    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__body">
            <!--begin: Search Form -->
            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">
                            <div class="col-md-4">
                                <div class="m-input-icon m-input-icon--left">
                                    <input type="text" class="form-control m-input m-input--solid"
                                        placeholder="Search..." id="generalSearch">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span>
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                        {{-- <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                            <span>
                                <i class="la la-cart-plus"></i>
                                <span>
                                    New Order
                                </span>
                            </span>
                        </a> --}}
                        <div class="m-separator m-separator--dashed d-xl-none"></div>
                    </div>
                </div>
            </div>
            <!--end: Search Form -->
            <!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Assessment</th>
                        <th>Max mark</th>
                        <th class="text-center">Mark</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($student->studentAssessments as $studentAssessment)
                    <tr>
                        <td>{{ $studentAssessment->assessment->course->name ?? "" }}</td>
                        <td>{{ $studentAssessment->assessment->title }}</td>
                        <td>{{ $studentAssessment->assessment->value }}</td>
                        <td class="row">
                            <form class="p-0" action="{{ route('update-student-mark', $studentAssessment->id) }}" method="POST">
                                @csrf
                                <div class="form-group m-form__group col-10 mx-auto">
                                    <div class="input-group">
                                        <input type="text" class="form-control m-input" name="mark"
                                            value="{{ $studentAssessment->mark }}" placeholder="Mark"
                                            aria-describedby="basic-addon2">
                                        <button class="input-group-addon bg-primary text-white" id="basic-addon2">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <!--end: Datatable -->
        </div>
    </div>
</div>
<!--end:: Widgets/User Progress -->
@endsection

@section('script')
<script>
    var DatatableHtmlTableDemo = (function () {
    var e = function () {
        $(".m-datatable").mDatatable({
            search: { input: $("#generalSearch") },
            columns: [
                { field: "Deposit Paid", type: "number" },
                { field: "Order Date", type: "date", format: "YYYY-MM-DD" },
            ],
        });
    };
    return {
        init: function () {
            e();
        },
    };
})();
jQuery(document).ready(function () {
    DatatableHtmlTableDemo.init();
});

</script>
@endsection