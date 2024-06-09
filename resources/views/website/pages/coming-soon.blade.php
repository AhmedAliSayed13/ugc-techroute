<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Coming Soon - VIDOO</title>
    <link rel="apple-touch-icon" href="{{asset('users-asset')}}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('users-asset')}}/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/vendors/css/vendors-rtl.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('users-asset')}}/css-rtl/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/pages/page-misc.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/custom-website.css')}}">
    <!-- END: Custom CSS-->
    @if (App::getLocale() === 'en')
    <link href="{{ asset('users-asset/system/css/rtl.css') }}" rel="stylesheet">
    @endif
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover"
    data-menu="horizontal-menu" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Coming soon page-->
                <div class="misc-wrapper"><a class="brand-logo" href="#">
                        <img src="{{asset('users-asset')}}/images/logo/logo.png" alt="" width="80px">
                        {{-- <h2 class="brand-text text-primary ms-1">Vuexy</h2> --}}
                    </a>
                    <div class="misc-inner p-2 p-sm-3">
                        <div class="w-100 text-center">
                            <h1 class="mb-1">نحن على وشك الوصول! 🚀</h2>
                                <h4 class="mb-3">نصنع شيئًا رائعًا. تابعنا لتجربة مدهشة قريبًا!!</h4>
                                <form
                                    class="row row-cols-md-auto row justify-content-center align-items-center m-0 mb-2 gx-3"
                                    action="{{route('comingSoon.save')}}" method="POST">
                                    @csrf
                                    <div class="col-12 m-0 mb-1">
                                        <input class="form-control" id="notify-email" type="email" name="email"
                                            placeholder="البريد الالكتروني" required />
                                    </div>
                                    <div class="col-12 d-md-block d-grid ps-md-0 ps-auto">
                                        <button class="btn btn-primary mb-1 btn-sm-block" type="submit">اشترك</button>
                                    </div>
                                </form>
                                <img class="img-fluid" src="{{asset('users-asset')}}/images/pages/coming-soon.svg"
                                    alt="Coming soon page" />

                                <div class="auth-footer-btn d-flex justify-content-center">
                                    <a href="#" class="btn btn-facebook m-1">
                                        <i data-feather="facebook"></i>
                                    </a>
                                    <a href="#" class="btn btn-twitter white m-1">
                                        <i data-feather="twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-google m-1">
                                        <i data-feather="mail"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/company/vidoo-app/" class="btn btn-linkedin m-1">
                                        <i data-feather="linkedin"></i>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- / Coming soon page-->
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('users-asset')}}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('users-asset')}}/vendors/js/ui/jquery.sticky.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('users-asset')}}/js/core/app-menu.js"></script>
    <script src="{{asset('users-asset')}}/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>
