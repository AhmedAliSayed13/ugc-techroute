<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>

    @include('user.creator.layouts.style')
    @yield('style')

    {{-- add wedget header style --}}
    @include('widgets.widgets_header')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Header-->
    @include('user.creator.layouts.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('user.creator.layouts.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                @yield('breadcrumb')
            </div>

            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Footer-->
    @include('user.creator.layouts.footer')


    @include('user.creator.layouts.script')
    @yield('script')

</body>
<!-- END: Body-->

</html>