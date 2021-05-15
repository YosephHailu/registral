<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->

<head>
	<meta charset="utf-8" />
	<title>
		Student registration
	</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--begin::Web font -->
	<script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js')}}"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!--end::Web font -->
	<!--begin::Base Styles -->
	<!--begin::Page Vendors -->
	<link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
		type="text/css" />
	<!--end::Page Vendors -->
	<link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/demo/demo5/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Base Styles -->
	<link rel="shortcut icon" href="{{asset('assets/demo/demo5/media/img/logo/favicon.ico')}}" />

	<style>
		.bg-greyish {
			background-color: #3D3B56 !important;
			color: white !important;
		}

		.text-greyish {
			color: #3D3B56;
		}

		.bg-faded {
			background-color: #DFF0D8;
		}

		.border-greyish {
			border-color: #3D3B56 !important;
		}
	</style>
</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- begin::Header -->
		<header class="m-grid__item		m-header ">
			<div class="m-header__bottom">
				<div class="m-container m-container--responsive m-container m-container--full-height m-page__container">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--middle m-brand__logo">
							<a href="index.html" class="m-brand__logo-wrapper">
								<img alt="" src="{{asset('assets/demo/demo5/media/img/logo/logo.png')}}" />
							</a>
						</div>
						<!-- begin::Horizontal Menu -->
						<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
							<button
								class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light "
								id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							<div id="m_header_menu" class="m-header-menu mx-auto m-aside-header-menu-mobile  m-header-menu--skin-dark m-header-menu--submenu-skin-dark m-aside-header-menu-mobile--skin
 ">
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow">
									<li class="m-menu__item  m-menu__item" aria-haspopup="true">
										<a href="{{route('dashboard')}}" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
												Home
											</span>
										</a>
									</li>
									<li class="m-menu__item  m-menu__item--{{ (Request::is('*my-dormitory*') ?'active' :'')}} m-menu__item--active m-menu__item--submenu m-menu__item--rel m-menu__item--open-dropdown"
										data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
										<a href="#" class="m-menu__link m-menu__toggle">
											<span class="m-menu__link-text">
												Grade & Result
											</span>
											<i class="m-menu__hor-arrow la la-angle-down"></i>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
											<span class="m-menu__arrow m-menu__arrow--adjust"
												style="left: 68.5px;"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item" data-redirect="true" aria-haspopup="true">
													<a href="{{route('grade.report')}}" class="m-menu__link ">
														<span class="m-menu__link-text text-muted">
															Grade Report
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="{{ route('assessment.result') }}" class="m-menu__link ">
														<span class="m-menu__link-text text-muted">
															Assessment Result
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text text-muted">
															Course checklist
														</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="m-menu__item m-menu__item--submenu m-menu__item--rel m-menu__item--open-dropdown"
										data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
										<a href="#" class="m-menu__link m-menu__toggle">
											<span class="m-menu__link-text">
												Registration
											</span>
											<i class="m-menu__hor-arrow la la-angle-down"></i>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
											<span class="m-menu__arrow m-menu__arrow--adjust"
												style="left: 68.5px;"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item" data-redirect="true" aria-haspopup="true">
													<a href="{{route('course.registration')}}" class="m-menu__link ">
														<span class="m-menu__link-text text-muted">
															Course Registration
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text text-muted">
															Course Add/Drop
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text text-muted">
															Withdrawal Request
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text text-muted">
															Clearance request
														</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="m-menu__item m-menu__item--submenu m-menu__item--rel m-menu__item--open-dropdown"
										data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
										<a href="#" class="m-menu__link m-menu__toggle">
											<span class="m-menu__link-text">
												Admission
											</span>
											<i class="m-menu__hor-arrow la la-angle-down"></i>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
											<span class="m-menu__arrow m-menu__arrow--adjust"
												style="left: 68.5px;"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item" data-redirect="true" aria-haspopup="true">
													<a href="{{route('personalInfo.create')}}" class="m-menu__link ">
														<span class="m-menu__link-text text-muted">
															My profile
														</span>
													</a>
												</li>
												<li class="m-menu__item " data-redirect="true" aria-haspopup="true">
													<a href="../header/actions.html" class="m-menu__link ">
														<span class="m-menu__link-text text-muted">
															My curriculum
														</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="m-menu__item  m-menu__item--{{ (Request::is('*personal-information-registration*') ?'active' :'')}}"
										aria-haspopup="true">
										<a href="{{route('personalInfo.create')}}" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
												My Profile
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- end::Horizontal Menu -->
						<!--begin::Search-->
						<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-"
							id="m_quicksearch" data-search-type="default">
							<!--begin::Search Form -->
							<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
								data-dropdown-toggle="click">
								<a href="#" class="m-nav__link m-dropdown__toggle px-2">
									<span class="m-topbar__userpic">
										<img src="../assets/app/media/img/users/user4.jpg"
											class="m--img-rounded m--marginless m--img-centered"
											style="width: 40px!important;" alt="" />
									</span>
								</a>
								<span class="m-topbar__username text-white">
									John doe
								</span>
								<div class="m-dropdown__wrapper">
									<span
										class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
									<div class="m-dropdown__inner">
										<div class="m-dropdown__header m--align-center"
											style="background: url(../assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
											<div class="m-card-user m-card-user--skin-dark">
												<div class="m-card-user__pic">
													<img src="../assets/app/media/img/users/user4.jpg"
														class="m--img-rounded m--marginless" alt="" />
												</div>
												<div class="m-card-user__details">
													<span class="m-card-user__name m--font-weight-500">
														John Doe
													</span>
													<a href="" class="m-card-user__email m--font-weight-300 m-link">
														John@mail.com
													</a>
												</div>
											</div>
										</div>
										<div class="m-dropdown__body">
											<div class="m-dropdown__content">
												<ul class="m-nav m-nav--skin-light">
													<li class="m-nav__section m--hide">
														<span class="m-nav__section-text">
															Section
														</span>
													</li>
													<li class="m-nav__item">
														<a href="../header/profile.html" class="m-nav__link">
															<i class="m-nav__link-icon flaticon-profile-1"></i>
															<span class="m-nav__link-title">
																<span class="m-nav__link-wrap">
																	<span class="m-nav__link-text">
																		My Profile
																	</span>
																</span>
															</span>
														</a>
													</li>
													<li class="m-nav__item">
														<a href="../header/profile.html" class="m-nav__link">
															<i class="m-nav__link-icon flaticon-share"></i>
															<span class="m-nav__link-text">
																Change password
															</span>
														</a>
													</li>
													<li class="m-nav__separator m-nav__separator--fit"></li>
													<li class="m-nav__item">
														<a href="../snippets/pages/user/login-1.html"
															class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
															Logout
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>

							<!--end::Search Form -->
							<!--begin::Search Results -->
							<div class="m-dropdown__wrapper">
								<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
								<div class="m-dropdown__inner">
									<div class="m-dropdown__body">
										<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true"
											data-max-height="300" data-mobile-max-height="200">
											<div class="m-dropdown__content m-list-search m-list-search--skin-light">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end::Search Results -->
						</div>
						<!--end::Search-->
					</div>
				</div>
			</div>
		</header>
		<!-- end::Header -->

		<div class="m-grid__item m-grid__item--fluid" style="padding-top: 100px">
			@yield('content')
		</div>
	</div>
	<!-- end:: Page -->

	<!--begin::Base Scripts -->
	<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/demo/demo5/base/scripts.bundle.js')}}" type="text/javascript"></script>
	<!--end::Base Scripts -->
	<!--begin::Page Vendors -->
	<script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript">
	</script>
	<!--end::Page Vendors -->
	<!--begin::Page Snippets -->
	<script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>
	<!--end::Page Snippets -->
</body>
<!-- end::Body -->

</html>