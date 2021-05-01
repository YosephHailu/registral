@if(count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="m-alert m-alert--icon m-alert--outline alert alert-danger alert-dismissible fade show col-12" role="alert">
    <div class="m-alert__text">
        {{$error}}
    </div>
    <div class="m-alert__close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endforeach
@endif

@if (session('success'))
<div class="m-alert m-alert--icon m-alert--outline alert alert-success alert-dismissible fade show col-12" role="alert">
    <div class="m-alert__text">{{session('success')}}
    </div>
    <div class="m-alert__close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif

@if (session('error'))
<div class="m-alert m-alert--icon m-alert--outline alert alert-danger alert-dismissible fade show col-12" role="alert">
    <div class="m-alert__text">
        {{session('error')}}
    </div>
    <div class="m-alert__close">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
    </div>
</div>
@endif