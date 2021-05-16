@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('stream.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Grades
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
                        Grade
                    </h3>
                </div>
            </div>

            <div class="m-portlet__head-tools">
                <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                    role="tablist">
                    <li class="nav-item m-tabs__item">
                        <a class="nav-link m-tabs__link active" href="{{ route('grade.create') }}">
                            <i class="fa fa-plus"></i> ADD GRADE
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div class="table-responsive">
                <hr>
                <table class="table text-nowrap table-hover table-striped">
                    <thead class="bg-faded">
                        <tr>
                            <th style="width: 50px">#</th>
                            <th style="min-width: 150px;">Label</th>
                            <th style="min-width: 150px;">Min value</th>
                            <th style="min-width: 150px;">Max value</th>
                            <th>Description</th>
                            <th class="text-center" style="min-width: 100px;"><i class="icon-arrow-down12"></i></th>
                        </tr>
                    </thead>
                    <tbody class="p-0">
                        @foreach ($grades as $grade)
                        <tr>
                            <td class="text-center">{{$grade->id}}</td>
                            <td>{{$grade->label }}</td>
                            <td>{{$grade->min_value}}</td>
                            <td>{{$grade->max_value}}</td>
                            <td>{{$grade->description }}</td>
                            <td class="row"><a href="{{ route('grade.edit', $grade->id) }}" class="btn btn-primary btn-sm mx-1">Edit</a>
                                    <form class="p-0"
                                    action="{{ route('grade.destroy', $grade->id) }}"
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