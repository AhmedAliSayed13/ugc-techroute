


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Forgot Password Page - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{asset('users-asset')}}/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('users-asset')}}/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
    @if (App::getLocale() === 'en')
    <link href="{{ asset('users-asset/system/css/rtl.css') }}" rel="stylesheet">
    @endif

    {{-- add wedget header style --}}
    @include('wedgets.wedget_header')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
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
                        <!-- Forgot Password basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{route('home')}}" class="brand-logo">
                                    <img src="{{asset('users-asset/images/logo/logo-2.png')}}" width="150px" alt="logo">
                                </a>

                                <h4 class="card-title mb-1">{{__('messages.forgot_password')}}</h4>
                                <p class="card-text mb-2">{{__('messages.forgot_password_description')}} </p>

                                <form class="auth-forgot-password-form mt-2" action="{{ route('user.forget.password') }}" method="POST">
                                    @csrf
                                    <div class="mb-1">
                                        <label for="forgot-password-email" class="form-label">{{__('messages.email')}}</label>
                                        <input type="email" class="form-control" id="forgot-password-email" name="email"  aria-describedby="forgot-password-email" tabindex="1" autofocus />
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="2">{{__('messages.send_reset_link')}}</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="{{route('user.login')}}"> <i data-feather="chevron-left"></i>{{__('messages.back_to_login')}}  </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Forgot Password basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('users-asset')}}/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('users-asset')}}/vendors/js/ui/jquery.sticky.js"></script>
    <script src="{{asset('users-asset')}}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('users-asset')}}/js/core/app-menu.js"></script>
    <script src="{{asset('users-asset')}}/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('users-asset')}}/js/scripts/pages/auth-forgot-password.js"></script>
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
