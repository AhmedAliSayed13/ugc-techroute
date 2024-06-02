<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>

    @include('user.client.layouts.style')
    @yield('style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="">

    <!-- BEGIN: Header-->
    @include('user.client.layouts.header')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('user.client.layouts.menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->

                @yield('content')
            
    <!-- END: Content-->

    <!-- BEGIN: Footer-->
    @include('user.client.layouts.footer')


    @include('user.client.layouts.script')
    @yield('script')

</body>
<!-- END: Body-->

</html>
