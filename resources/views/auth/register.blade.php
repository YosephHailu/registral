{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

<div class="card-body">
	<form method="POST" action="{{ route('register') }}">
		@csrf

		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

			<div class="col-md-6">
				<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
					value="{{ old('name') }}" required autocomplete="name" autofocus>

				@error('name')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

			<div class="col-md-6">
				<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
					value="{{ old('email') }}" required autocomplete="email">

				@error('email')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

			<div class="col-md-6">
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
					name="password" required autocomplete="new-password">

				@error('password')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label for="password-confirm"
				class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

			<div class="col-md-6">
				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
					autocomplete="new-password">
			</div>
		</div>

		<div class="form-group row mb-0">
			<div class="col-md-6 offset-md-4">
				<button type="submit" class="btn btn-primary">
					{{ __('Register') }}
				</button>
			</div>
		</div>
	</form>
</div>
</div>
</div>
</div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>
		Student registrar
	</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Web font -->
	<script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>
	<script>
		WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
	</script>
	<!--end::Web font -->
	<!--begin::Base Styles -->
	<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Base Styles -->
	<link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />
</head>
<!-- end::Head -->
<!-- end::Body -->

<body
	class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<div class="m-login m-login--singin  m-login--5" id="m_login"
			style="background-image: url(assets/app/media/img//bg/bg-3.jpg);">
			<div class="m-login__wrapper-1 m-portlet-full-height">
				<div class="m-login__wrapper-1-1">
					<div class="m-login__contanier">
						<div class="m-login__content">
							<div class="m-login__logo">
								<a href="#">
									<img src="assets/app/media/img//logos/logo-2.png">
								</a>
							</div>
							<div class="m-login__title">
								<h3>
									ALREADY HAVE AN ACCOUNT, LOGIN THEN
								</h3>
							</div>
							<div class="m-login__desc">
								Amazing Stuff is Lorem Here.Grownng Team
							</div>
							<div class="m-login__form-action">
								<a href="{{route('login')}}" class="btn btn-outline-focus m-btn--pill">
									Login
								</a>
							</div>
						</div>
					</div>
					<div class="m-login__border">
						<div></div>
					</div>
				</div>
			</div>
			<div class="m-login__wrapper-2 m-portlet-full-height">
				<div class="m-login__contanier">
					<div>
						{{-- @include('layouts.messages') --}}
						<div class="m-login__head">
							<h3 class="m-login__title">
								Sign Up
							</h3>
							<div class="m-login__desc">
								Enter your details to create your account:
							</div>
						</div>
						<form class="m-form mt-3" action="{{route('student.register.submit')}}" method="POST">
							@csrf
							<div class="form-group">
								<label for="name" class="label m-label">
									Full name
								</label>
								<input class="form-control " type="text" placeholder="Enter your full name"
									name="name">
								@error('name')
								<div class="form-control-feedback text-danger">
									{{$message}}
								</div>
								@enderror
							</div>

							<div class="form-group">
								<label for="email">
									Email
								</label>
								<input class="form-control" type="email" placeholder="Enter your email" name="email">
								@error('email')
								<div class="form-control-feedback text-danger">
									{{$message}}
								</div>
								@enderror
							</div>

							<div class="form-group">
								<label for="email">
									Password
								</label>
								<input class="form-control" type="password" placeholder="Enter your password"
									name="password">
									@error('password')
									<div class="form-control-feedback text-danger">
										{{$message}}
									</div>
									@enderror
							</div>
							
							<div class="form-group">
								<label for="password_confirmation">
									Confirm password
								</label>
								<input class="form-control" type="password" placeholder="Confirm password"
									name="password_confirmation">
									@error('password')
									<div class="form-control-feedback text-danger">
										{{$message}}
									</div>
									@enderror
							</div>

							<div class="m-login__form-sub">
								<label class="m-checkbox m-checkbox--focus">
									<input type="checkbox" name="agree">
									I Agree the
									<a href="#" class="m-link m-link--focus">
										terms and conditions
									</a>
									.
									<span></span>
								</label>
								<span class="m-form__help"></span>
							</div>
							<div class="m-login__form-action">
								<button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
									Sign Up
								</button>
								<button id="m_login_signup_cancel"
									class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">
									Cancel
								</button>
							</div>
						</form>
					</div>
					<div class="m-login__forget-password">
						<div class="m-login__head">
							<h3 class="m-login__title">
								Forgotten Password ?
							</h3>
							<div class="m-login__desc">
								Enter your email to reset your password:
							</div>
						</div>
						<form class="m-login__form m-form" action="">
							<div class="form-group m-form__group">
								<input class="form-control m-input" type="text" placeholder="Email" name="email"
									id="m_email" autocomplete="off">
							</div>
							<div class="m-login__form-action">
								<button id="m_login_forget_password_submit"
									class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">
									Request
								</button>
								<button id="m_login_forget_password_cancel"
									class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom ">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end:: Page -->
	<!--begin::Base Scripts -->
	<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	<script src="assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Base Scripts -->
	<!--begin::Page Snippets -->
	<script src="assets/snippets/pages/user/login.js" type="text/javascript"></script>
	<!--end::Page Snippets -->
</body>
<!-- end::Body -->

</html>