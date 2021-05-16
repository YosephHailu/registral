<!DOCTYPE html>
<!-- 
Template Name: New Generation - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Version: Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/new generation-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/new generation-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->

<head>
    <meta charset="utf-8" />
    <title>
        New Generation | Dashboard
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js')}}"></script>
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
    <!--begin::Page Vendors -->
    <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendors -->
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{asset('assets/demo/default/media/img/logo/favicon.ico')}}" />

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

        .bg-white {
            border-color: #ffffff !important;
        }
    </style>
</head>
<!-- end::Head -->
<!-- end::Body -->

<body
    class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <!-- BEGIN: Header -->
        <header class="m-grid__item    m-header " data-minimize-offset="200" data-minimize-mobile-offset="200">
            <div class="m-container m-container--fluid m-container--full-height">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- BEGIN: Brand -->
                    <div class="m-stack__item m-brand  m-brand--skin-dark ">
                        <div class="m-stack m-stack--ver m-stack--general">
                            <div class="text-muted m-stack__item m-stack__item--middle">

                                NEW GENERATION

                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <!-- BEGIN: Left Aside Minimize Toggle -->
                                <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 
					 ">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                                <a href="javascript:;" id="m_aside_left_offcanvas_toggle"
                                    class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Responsive Header Menu Toggler -->
                                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;"
                                    class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- END -->
                                <!-- BEGIN: Topbar Toggler -->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;"
                                    class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>
                                <!-- BEGIN: Topbar Toggler -->
                            </div>
                        </div>
                    </div>
                    <!-- END: Brand -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <!-- BEGIN: Horizontal Menu -->
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark "
                            id="m_aside_header_menu_mobile_close_btn">
                            <i class="la la-close"></i>
                        </button>
                        <div id="m_header_menu"
                            class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                            <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                                    data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                                    <a href="#" class="m-menu__link m-menu__toggle">
                                        <i class="m-menu__link-icon flaticon-add"></i>
                                        <span class="m-menu__link-text">
                                            Reports
                                        </span>
                                        <i class="m-menu__hor-arrow la la-angle-down"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true">
                                                <a href="header/actions.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-file"></i>
                                                    <span class="m-menu__link-text">
                                                        Student grade report
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                <a href="header/actions.html" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-diagram"></i>
                                                    <span class="m-menu__link-title">
                                                        <span class="m-menu__link-wrap">
                                                            <span class="m-menu__link-text">
                                                                Generate Reports
                                                            </span>
                                                            <span class="m-menu__link-badge">
                                                                <span class="m-badge m-badge--success">
                                                                    2
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- END: Horizontal Menu -->
                        <!-- BEGIN: Topbar -->
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-topbar__nav-wrapper">

                            </div>
                        </div>
                        <!-- END: Topbar -->
                    </div>
                </div>
            </div>
        </header>
        <!-- END: Header -->
        <!-- begin::Body -->
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
            <!-- BEGIN: Left Aside -->
            <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
                <i class="la la-close"></i>
            </button>
            <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
                <!-- BEGIN: Aside Menu -->
                <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark "
                    data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
                    <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('my.section') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    My sections
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('student.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Students
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('teacher.section.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Teacher section
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('registration.offering.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Registration Offering
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('department.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Departments
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('section.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Manage Sections
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('grade.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Manage Grades
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('stream.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Streams
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('course.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Courses
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('academic.year.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Academic Years
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item " aria-haspopup="true">
                            <a href="{{ route('semester.index') }}" class="m-menu__link ">
                                <i class="m-menu__link-icon flaticon-file"></i>
                                <span class="m-menu__link-text">
                                    Semester
                                </span>
                            </a>
                        </li>

                        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"
                            data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                            <a href="#" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-icon flaticon-add"></i>
                                <span class="m-menu__link-text">
                                    Actions
                                </span>
                                <i class="m-menu__hor-arrow la la-angle-down"></i>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true">
                                        <a href="header/actions.html" class="m-menu__link ">
                                            <i class="m-menu__link-icon flaticon-file"></i>
                                            <span class="m-menu__link-text">
                                                Create New Stream
                                            </span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover"
                                        data-redirect="true" aria-haspopup="true">
                                        <a href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-business"></i>
                                            <span class="m-menu__link-text">
                                                Manage Orders
                                            </span>
                                            <i class="m-menu__hor-arrow la la-angle-right"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                            <span class="m-menu__arrow "></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                    <a href="header/actions.html" class="m-menu__link ">
                                                        <span class="m-menu__link-text">
                                                            Latest Orders
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>
                <!-- END: Aside Menu -->
            </div>
            <!-- END: Left Aside -->
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <!-- BEGIN: Subheader -->
                <div class="m-subheader ">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                                <li class="m-nav__item m-nav__item--home">
                                    <a href="#" class="m-nav__link m-nav__link--icon">
                                        <i class="m-nav__link-icon la la-home"></i>
                                    </a>
                                </li>
                                @yield('breadcrumb')
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- END: Subheader -->
                <div class="m-content">
                    @include('layouts.messages')
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- end:: Body -->
        <!-- begin::Footer -->
        <footer class="m-grid__item		m-footer ">
            <div class="m-container m-container--fluid m-container--full-height m-page__container">
                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                        <span class="m-footer__copyright">
                            2017 &copy; New Generation theme by
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
                            <li class="m-nav__item m-nav__item">
                                <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center"
                                    data-placement="left">
                                    <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                </a>
                            </li>
                        </ul>
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
                                    <img src="{{asset('assets/app/media/img//users/user3.jpg')}}" alt="" />
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
                                            Hi Megan. It's at 2.30PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-pic">
                                    <img src="{{asset('assets/app/media/img//users/user3.jpg')}}" alt="" />
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
                                    <img src="{{asset('assets/app/media/img//users/user3.jpg')}}" alt="" />
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
                                    <img src="{{asset('assets/app/media/img//users/user3.jpg')}}" alt="" />
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
            <a href="https://themeforest.net/item/new generation-responsive-admin-dashboard-template/4021469?ref=keenthemes"
                target="_blank">
                <i class="la la-cart-arrow-down"></i>
            </a>
        </li>
        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
            <a href="http://keenthemes.com/new generation/documentation.html" target="_blank">
                <i class="la la-code-fork"></i>
            </a>
        </li>
        <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
            <a href="http://keenthemes.com/forums/forum/support/new generation5/" target="_blank">
                <i class="la la-life-ring"></i>
            </a>
        </li>
    </ul>
    <!-- begin::Quick Nav -->
    <!--begin::Base Scripts -->
    <script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Vendors -->
    <script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript">
    </script>
    <!--end::Page Vendors -->
    <!--begin::Page Snippets -->
    <script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>
    <!--end::Page Snippets -->

    <script src="{{asset('assets/demo/default/custom/components/forms/widgets/select2.js')}}" type="text/javascript">
    </script>

    <script>
        $('.m-select2').select2();
    </script>

    @yield('script')
</body>
<!-- end::Body -->

</html>