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
<li class="m-nav__separator">
    -
</li>
<li class="m-nav__item">
    <a href="{{  route('stream.show', $stream->id)  }}" class="m-nav__link">
        <span class="m-nav__link-text">
            Streams courses
        </span>
    </a>
</li>
@endsection

@section('content')

<!--begin:: Widgets/User Progress -->
<div class="m-portlet m-portlet--full-height ">
    <div class="m-portlet__body">
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
                    <a class="m-btn m-btn--pill btn btn-sm btn-primary my-1"
                        href="{{ url('stream-course/'.$stream->id) }}">
                        <i class="fa fa-plus"></i> ADD COURSE TO STREAM
                    </a>
                </div>
            </div>
        </div>
        <hr class="my-0">

        <div class="m-section">
            <div class="m-section__content">
                <table class="table m-table m-table--head-bg-brand">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Course</th>
                            <th>Credit hour</th>
                            <th>Ects</th>
                            <th>Semester</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stream->streamCourse as $courseStream)
                        <tr>
                            <th scope="row">{{ $courseStream->id }}</th>
                            <td>{{ $courseStream->course->name }}</td>
                            <td>{{ $courseStream->credit_hour }}</td>
                            <td>{{ $courseStream->ects }}</td>
                            <td>{{ $courseStream->semester->name }}</td>
                            <td class="row">

                                <a href="{{ route('stream.course.edit', $courseStream->id) }}"
                                    class="m-btn m-btn--pill px-2 col-6 btn btn-sm btn-primary">
                                    Edit
                                </a>

                                <form class="px-2 py-0 col-6" action="{{ route('stream.course.destroy', $stream->id) }}"
                                    onsubmit="return confirm('Are you sure')" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="m-btn btn-block m-btn--pill btn btn-sm btn-danger">
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
<!--end:: Widgets/User Progress -->
@endsection