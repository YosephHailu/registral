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
		<header class="m-grid__item		m-header " data-minimize="minimize" data-minimize-offset="200"
			data-minimize-mobile-offset="200">
			<div class="m-header__top">
				<div
					class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- begin::Brand -->
						<div class="m-stack__item m-brand">
							<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="index.html" class="m-brand__logo-wrapper">
										<img alt="" src="assets/demo/demo5/media/img/logo/logo.png" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">
									<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push"
										data-dropdown-toggle="click" aria-expanded="true">
										<a href="#"
											class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
											<span>
												Dashboard
											</span>
										</a>
										<div class="m-dropdown__wrapper">
											<span
												class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
											<div class="m-dropdown__inner">
												<div class="m-dropdown__body">
													<div class="m-dropdown__content">
														<ul class="m-nav">
															<li class="m-nav__section m-nav__section--first m--hide">
																<span class="m-nav__section-text">
																	Quick Menu
																</span>
															</li>
															<li class="m-nav__item">
																<a href="" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-share"></i>
																	<span class="m-nav__link-text">
																		Human Resources
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-chat-1"></i>
																	<span class="m-nav__link-text">
																		Customer Relationship
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-info"></i>
																	<span class="m-nav__link-text">
																		Order Processing
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																	<span class="m-nav__link-text">
																		Accounting
																	</span>
																</a>
															</li>
															<li class="m-nav__separator m-nav__separator--fit"></li>
															<li class="m-nav__item">
																<a href="" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-chat-1"></i>
																	<span class="m-nav__link-text">
																		Customer Relationship
																	</span>
																</a>
															</li>
															<li class="m-nav__item">
																<a href="" class="m-nav__link">
																	<i class="m-nav__link-icon flaticon-info"></i>
																	<span class="m-nav__link-text">
																		Order Processing
																	</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- begin::Responsive Header Menu Toggler-->
									<a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
										class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>
									<!-- end::Responsive Header Menu Toggler-->
									<!-- begin::Topbar Toggler-->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
										class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>
									<!--end::Topbar Toggler-->
								</div>
							</div>
						</div>
						<!-- end::Brand -->
						<!-- begin::Topbar -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
											data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__welcome">
													Hello,&nbsp;
												</span>
												<span class="m-topbar__username">
													Nick
												</span>
												<span class="m-topbar__userpic">
													<img src="assets/app/media/img/users/user4.jpg"
														class="m--img-rounded m--marginless m--img-centered" alt="" />
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span
													class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center"
														style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="assets/app/media/img/users/user4.jpg"
																	class="m--img-rounded m--marginless" alt="" />
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	Mark Andre
																</span>
																<a href=""
																	class="m-card-user__email m--font-weight-300 m-link">
																	mark.andre@gmail.com
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
																	<a href="profile.html" class="m-nav__link">
																		<i
																			class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					My Profile
																				</span>
																				<span class="m-nav__link-badge">
																					<span
																						class="m-badge m-badge--success">
																						2
																					</span>
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">
																			Activity
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Messages
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">
																			FAQ
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i
																			class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">
																			Support
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="{{ route('student.logout') }}" onclick="event.preventDefault();
																	document.getElementById('logout-form').submit();" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																		{{ __('Logout') }}
																	</a>

																	<form id="logout-form"
																		action="{{ route('student.logout') }}" method="POST"
																		style="display: none;">
																		@csrf
																	</form>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li id="m_quick_sidebar_toggle" class="m-nav__item">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon m-nav__link-icon--aside-toggle">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-menu-button"></i>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end::Topbar -->
					</div>
				</div>
			</div>
			<div class="m-header__bottom">
				<div
					class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<!-- begin::Horizontal Menu -->
						<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
							<button
								class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light "
								id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							<div id="m_header_menu"
								class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
									<li class="m-menu__item  m-menu__item--active" aria-haspopup="true">
										<a href="{{route('dashboard')}}" class="m-menu__link ">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
												Dashboard
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
		<!-- begin::Body -->
		<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
			<div
				class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Dashboard
								</h3>
							</div>
							<div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#"
										class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end::Body -->
		<!-- begin::Footer -->
		<footer class="m-grid__item m-footer ">
			<div
				class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
				<div class="m-footer__wrapper">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2017 &copy; Metronic theme by
								<a href="#" class="m-link">
									Keenthemes
								</a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											About
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											Privacy
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											T&C
										</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											Purchase
										</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item--last">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center"
										data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- end::Footer -->
	</div>
	<!-- end:: Page -->
	<!-- begin::Quick Sidebar -->
	<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
		<div class="m-quick-sidebar__content m--hide">
			<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
				<i class="la la-close"></i>
			</span>
			<ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger"
						role="tab">
						Messages
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
						Settings
					</a>
				</li>
				<li class="nav-item m-tabs__item">
					<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
						Logs
					</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
					<div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
						<div class="m-messenger__messages">
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="assets/app/media/img//users/user3.jpg" alt="" />
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Hi Bob. What time will be the meeting ?
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Hi Megan. Its at 2.30PM
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="assets/app/media/img//users/user3.jpg" alt="" />
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Will the development team be joining ?
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Yes sure. I invited them as well
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__datetime">
								2:30PM
							</div>
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="assets/app/media/img//users/user3.jpg" alt="" />
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Noted. For the Coca-Cola Mobile App project as well ?
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Yes, sure.
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Please also prepare the quotation for the Loop CRM project as well.
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__datetime">
								3:15PM
							</div>
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-no-pic m--bg-fill-danger">
									<span>
										M
									</span>
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Noted. I will prepare it.
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--out">
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-text">
											Thanks Megan. I will see you later.
										</div>
									</div>
								</div>
							</div>
							<div class="m-messenger__message m-messenger__message--in">
								<div class="m-messenger__message-pic">
									<img src="assets/app/media/img//users/user3.jpg" alt="" />
								</div>
								<div class="m-messenger__message-body">
									<div class="m-messenger__message-arrow"></div>
									<div class="m-messenger__message-content">
										<div class="m-messenger__message-username">
											Megan wrote
										</div>
										<div class="m-messenger__message-text">
											Sure. See you in the meeting soon.
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="m-messenger__seperator"></div>
						<div class="m-messenger__form">
							<div class="m-messenger__form-controls">
								<input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
							</div>
							<div class="m-messenger__form-tools">
								<a href="" class="m-messenger__form-attachment">
									<i class="la la-paperclip"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
					<div class="m-list-settings">
						<div class="m-list-settings__group">
							<div class="m-list-settings__heading">
								General Settings
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Email Notifications
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Site Tracking
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									SMS Alerts
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Backup Storage
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Audit Logs
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
						</div>
						<div class="m-list-settings__group">
							<div class="m-list-settings__heading">
								System Settings
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									System Logs
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Error Reporting
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Applications Logs
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Backup Servers
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" checked="checked" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
							<div class="m-list-settings__item">
								<span class="m-list-settings__item-label">
									Audit Logs
								</span>
								<span class="m-list-settings__item-control">
									<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
										<label>
											<input type="checkbox" name="">
											<span></span>
										</label>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
					<div class="m-list-timeline">
						<div class="m-list-timeline__group">
							<div class="m-list-timeline__heading">
								System Logs
							</div>
							<div class="m-list-timeline__items">
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										12 new users registered
										<span class="m-badge m-badge--warning m-badge--wide">
											important
										</span>
									</a>
									<span class="m-list-timeline__time">
										Just now
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										System shutdown
									</a>
									<span class="m-list-timeline__time">
										11 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
									<a href="" class="m-list-timeline__text">
										New invoice received
									</a>
									<span class="m-list-timeline__time">
										20 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
									<a href="" class="m-list-timeline__text">
										Database overloaded 89%
										<span class="m-badge m-badge--success m-badge--wide">
											resolved
										</span>
									</a>
									<span class="m-list-timeline__time">
										1 hr
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										System error
									</a>
									<span class="m-list-timeline__time">
										2 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										Production server down
										<span class="m-badge m-badge--danger m-badge--wide">
											pending
										</span>
									</a>
									<span class="m-list-timeline__time">
										3 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										Production server up
									</a>
									<span class="m-list-timeline__time">
										5 hrs
									</span>
								</div>
							</div>
						</div>
						<div class="m-list-timeline__group">
							<div class="m-list-timeline__heading">
								Applications Logs
							</div>
							<div class="m-list-timeline__items">
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										New order received
										<span class="m-badge m-badge--info m-badge--wide">
											urgent
										</span>
									</a>
									<span class="m-list-timeline__time">
										7 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										12 new users registered
									</a>
									<span class="m-list-timeline__time">
										Just now
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										System shutdown
									</a>
									<span class="m-list-timeline__time">
										11 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
									<a href="" class="m-list-timeline__text">
										New invoices received
									</a>
									<span class="m-list-timeline__time">
										20 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
									<a href="" class="m-list-timeline__text">
										Database overloaded 89%
									</a>
									<span class="m-list-timeline__time">
										1 hr
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										System error
										<span class="m-badge m-badge--info m-badge--wide">
											pending
										</span>
									</a>
									<span class="m-list-timeline__time">
										2 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										Production server down
									</a>
									<span class="m-list-timeline__time">
										3 hrs
									</span>
								</div>
							</div>
						</div>
						<div class="m-list-timeline__group">
							<div class="m-list-timeline__heading">
								Server Logs
							</div>
							<div class="m-list-timeline__items">
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										Production server up
									</a>
									<span class="m-list-timeline__time">
										5 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										New order received
									</a>
									<span class="m-list-timeline__time">
										7 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										12 new users registered
									</a>
									<span class="m-list-timeline__time">
										Just now
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										System shutdown
									</a>
									<span class="m-list-timeline__time">
										11 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
									<a href="" class="m-list-timeline__text">
										New invoice received
									</a>
									<span class="m-list-timeline__time">
										20 mins
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
									<a href="" class="m-list-timeline__text">
										Database overloaded 89%
									</a>
									<span class="m-list-timeline__time">
										1 hr
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										System error
									</a>
									<span class="m-list-timeline__time">
										2 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										Production server down
									</a>
									<span class="m-list-timeline__time">
										3 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
									<a href="" class="m-list-timeline__text">
										Production server up
									</a>
									<span class="m-list-timeline__time">
										5 hrs
									</span>
								</div>
								<div class="m-list-timeline__item">
									<span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
									<a href="" class="m-list-timeline__text">
										New order received
									</a>
									<span class="m-list-timeline__time">
										1117 hrs
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end::Quick Sidebar -->
	<!-- begin::Scroll Top -->
	<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500"
		data-scroll-speed="300">
		<i class="la la-arrow-up"></i>
	</div>
	<!-- end::Scroll Top -->
	<!-- begin::Quick Nav -->
	<ul class="m-nav-sticky" style="margin-top: 30px;">
		<!--
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
				<a href="">
					<i class="la la-eye"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
				<a href="" >
					<i class="la la-comments-o"></i>
				</a>
			</li>
			-->
		<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
			<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"
				target="_blank">
				<i class="la la-cart-arrow-down"></i>
			</a>
		</li>
		<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
			<a href="http://keenthemes.com/metronic/documentation.html" target="_blank">
				<i class="la la-code-fork"></i>
			</a>
		</li>
		<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
			<a href="http://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
				<i class="la la-life-ring"></i>
			</a>
		</li>
	</ul>
	<!-- begin::Quick Nav -->
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