@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('department.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Departments
        </span>
    </a>
</li>
@endsection

@section('content')

<!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    Departments
                </h3>
            </div>
        </div>

        <div class="m-portlet__head-tools">
            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" href="{{ route('department.create') }}">
                        <i class="fa fa-plus"></i> ADD DEPARTMENT
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="m-portlet__body">
        @foreach ($departments as $department)
        <div class="m-widget4 m-widget4--progress">
            <div class="m-widget4__item">
                <div class="m-widget4__info">
                    <span class="m-widget4__title">
                        {{ $department->name }}
                    </span>
                    <br>
                    <span class="m-widget4__sub">
                        {{ $department->coordinator }}
                    </span>
                </div>
                <div class="m-widget4__progress">

                </div>
                <div class="m-widget4__ext row">
                    <a href="{{ route('department.edit', $department->id) }}"
                        class="m-btn m-btn--pill btn btn-sm btn-primary btn-block my-1">
                        Edit
                    </a>

                    <form action="{{ route('department.destroy', $department->id) }}"
                        onsubmit="return confirm('Are you sure')" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button class="m-btn  m-btn--pill btn btn-sm btn-danger">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr class="my-0">
        @endforeach
    </div>
</div>
<!--end:: Widgets/User Progress -->
@endsection