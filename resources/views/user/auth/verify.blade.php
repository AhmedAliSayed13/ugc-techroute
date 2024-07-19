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
    <title>{{config('app.name')}}</title>
    <link rel="apple-touch-icon" href="{{asset('users-asset/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('users-asset/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/vendors-rtl.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{asset('users-asset/css-rtl/core/menu/menu-types/horizontal-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css/style-rtl.css')}}">
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
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- verify email basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{route('home')}}" class="brand-logo">
                                    <img src="{{asset('users-asset/images/logo/logo.png')}}" width="60px" alt="logo">
                                    {{-- <h2 class="brand-text text-primary ms-1">Vuexy</h2> --}}
                                </a>

                                <h2 class="card-title fw-bolder mb-1">{{__('messages.VerifyYourEmail')}} ✉️</h2>
                                <p class="card-text mb-2">
                                   {{__('messages.verificationMailSent')}}
                                   <span class="text-primary">{{isset($email)?$email: ''}}</span> <br>
                                   {{__('messages.verificationMailSent2')}}
                                </p>

                                <a href="{{route('user.login')}}" class="btn btn-primary w-100">{{__('messages.backToLogin')}}</a>

                                {{-- <p class="text-center mt-2">
                                    <span>Didn't receive an email? </span><a
                                        href="Javascript:void(0)"><span>&nbsp;Resend</span></a>
                                </p> --}}
                            </div>
                        </div>
                        <!-- / verify email basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('users-asset/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('users-asset/vendors/js/ui/jquery.sticky.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('users-asset/js/core/app-menu.js')}}"></script>
    <script src="{{asset('users-asset/js/core/app.js')}}"></script>
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
