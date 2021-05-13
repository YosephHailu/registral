@extends('layouts.staff')

@section('breadcrumb')
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{ route('stream.index') }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Streams
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
                    Streams
                </h3>
            </div>
        </div>

        <div class="m-portlet__head-tools">
            <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm"
                role="tablist">
                <li class="nav-item m-tabs__item">
                    <a class="nav-link m-tabs__link active" href="{{ route('stream.create') }}">
                        <i class="fa fa-plus"></i> ADD STREAM
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
                        Stream Title
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title text-white">
                        Department / Year
                    </span>
                </div>
                <div class="m-widget4__progress">

                </div>
                
            </div>
        </div>
        <hr class="my-0">
        @foreach ($streams as $stream)
        <div class="m-widget4 m-widget4--progress">
            <div class="m-widget4__item">
                <div class="m-widget4__info">
                    <span class="m-widget4__title">
                        {{ $stream->title }}
                    </span>
                    <br>
                    <span class="m-widget4__sub">
                        Coordinator : {{ $stream->coordinator }}
                    </span>
                </div>
                
                <div class="m-widget4__info">
                    <span class="m-widget4__title">
                        {{ $stream->department->name }}
                    </span>
                    <br>
                    <span class="m-widget4__sub">
                        Total years : {{ $stream->total_year }}
                    </span>
                </div>
                <div class="m-widget4__progress">

                </div>
                <div class="m-widget4__ext row">
                    <a href="{{ route('stream.edit', $stream->id) }}"
                        class="m-btn m-btn--pill btn btn-sm btn-primary btn-block my-1">
                        Manage Courses
                    </a>

                    <a href="{{ route('stream.edit', $stream->id) }}"
                        class="m-btn m-btn--pill btn btn-sm btn-primary btn-block my-1">
                        Edit
                    </a>

                    <form class="col-12 p-0" action="{{ route('stream.destroy', $stream->id) }}"
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