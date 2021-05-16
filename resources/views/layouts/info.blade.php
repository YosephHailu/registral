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
	<script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>
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
	<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors -->
	<link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/demo/demo5/base/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Base Styles -->
	<link rel="shortcut icon" href="assets/demo/demo5/media/img/logo/favicon.ico" />
</head>
<!-- end::Head -->
<!-- end::Body -->

<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">
	<!-- begin:: Page -->
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<!-- begin::Header -->
		<header class="m-grid__item		m-header ">
			<div class="m-header__bottom">
				<div
					class="m-container m-container--responsive m-container m-container--full-height m-page__container">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--middle m-brand__logo">
							<a href="index.html" class="m-brand__logo-wrapper">
								<img alt="" src="assets/demo/demo5/media/img/logo/logo.png" />
							</a>
						</div>
						<!-- begin::Horizontal Menu -->
						<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
							<button
								class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light "
								id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							<div id="m_header_menu"
								class="m-header-menu mx-auto m-aside-header-menu-mobile  m-header-menu--skin-dark m-header-menu--submenu-skin-dark m-aside-header-menu-mobile--skin
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
									<li class="m-menu__item  m-menu__item--{{ (Request::is('*my-dormitory*') ?'active' :'')}}" aria-haspopup="true">
										<a href="{{route('myDormitory')}}" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
												My Dormitory
											</span>
										</a>
									</li>
									<li class="m-menu__item  m-menu__item--{{ (Request::is('*my-section*') ?'active' :'')}}" aria-haspopup="true">
										<a href="{{route('mySection')}}" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
												My Section
											</span>
										</a>
									</li>
									<li class="m-menu__item  m-menu__item--{{ (Request::is('*registration-orientation*') ?'active' :'')}}" aria-haspopup="true">
										<a href="{{route('registrationOrientation')}}" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
												Registration Procedure
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
							<form class="m-header-search__form">
								<div class="m-header-search__wrapper">
									<span class="m-header-search__icon-search" id="m_quicksearch_search">
										<i class="la la-search"></i>
									</span>
									<span class="m-header-search__input-wrapper">
										<input autocomplete="off" type="text" name="q" class="m-header-search__input"
											value="" placeholder="Search..." id="m_quicksearch_input">
									</span>
									<span class="m-header-search__icon-close" id="m_quicksearch_close">
										<i class="la la-remove"></i>
									</span>
									<span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
										<i class="la la-times"></i>
									</span>
								</div>
							</form>
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

		<div class="m-grid__item m-grid__item--fluid" style="padding-top: 120px">
			@yield('content')
		</div>
	</div>
	<!-- end:: Page -->

	<!--begin::Base Scripts -->
	<script src="assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
	<script src="assets/demo/demo5/base/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Base Scripts -->
	<!--begin::Page Vendors -->
	<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<!--end::Page Vendors -->
	<!--begin::Page Snippets -->
	<script src="assets/app/js/dashboard.js" type="text/javascript"></script>
	<!--end::Page Snippets -->
</body>
<!-- end::Body -->

</html>