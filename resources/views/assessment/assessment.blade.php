@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('semester.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Semesters
        </span>
    </a>
</li>
@endsection

@section('content')

<!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height col-md-8 mx-auto">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                    Semesters
                </h3>
            </div>
        </div>

        <div class="m-portlet__head-tools">
            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" href="{{ route('semester.create') }}">
                        <i class="fa fa-plus"></i> ADD SEMESTER
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="m-portlet__body">
        <div class="m-widget4 m-widget4--progress">
            <div class="m-widget4__item bg-greyish text-white">
                <div class="m-widget4__info">
                    <span class="m-widget4__title text-white">
                        Semester Title
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title text-white">
                    </span>
                </div>
                <div class="m-widget4__progress">

                </div>
                
            </div>
        </div>
        <hr class="my-0">
        @foreach ($semesters as $semester)
        <div class="m-widget4 m-widget4--progress">
            <div class="m-widget4__item">
                <div class="m-widget4__info">
                    <span class="m-widget4__title">
                        {{ $semester->name }}
                    </span>
                </div>
                
                <div class="m-widget4__info">
                </div>
                <div class="m-widget4__ext px-2">
                    <a href="{{ route('semester.edit', $semester->id) }}"
                        class="m-btn m-btn--pill btn btn-sm btn-primary btn-block my-1">
                        Edit
                    </a>
                </div>

                <div class="m-widget4__ext px-2">
                    <form class="col-12 p-0" action="{{ route('semester.destroy', $semester->id) }}"
                        onsubmit="return confirm('Are you sure')" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button class="m-btn btn-block m-btn--pill btn btn-sm btn-danger">
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