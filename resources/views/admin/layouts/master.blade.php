<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.layouts.style')
        @yield('style')
    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
        @include('admin.layouts.notification')
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            @include('admin.layouts.top_bar')
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.layouts.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    @yield('content')
                    <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('admin.layouts.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        @include('admin.layouts.right_bar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        @include('admin.layouts.script')
        
        @yield('script')
    </body>
</html>
