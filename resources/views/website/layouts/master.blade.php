<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>

    @include('website.layouts.style')
    @yield('style')

    {{-- add wedget header style --}}
    @include('wedgets.wedget_header')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

{{--

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col=""> --}}

    <body class="horizontal-layout horizontal-menu footer-static">

        <!-- BEGIN: Main Menu-->
        @include('website.layouts.menu')
        <!-- END: Main Menu-->


            @yield('content')

        <!-- BEGIN: Footer-->
        @include('website.layouts.footer')


        @include('website.layouts.script')
        @yield('script')

    </body>
    <!-- END: Body-->

</html>
