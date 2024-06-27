<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="{{__('messages.appDescription')}}">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{config('app.name')}}</title>
    <link rel="apple-touch-icon" href="{{asset('users-asset/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('users-asset')}}/images/ico/favicon.ico">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/wizard/bs-stepper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">
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
    {{--
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-wizard.css')}}"> --}}
    {{--
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
    --}}
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/assets/css/style-rtl.css')}}">
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
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="#">
                            <img src="{{asset('users-asset')}}/images/logo/logo-2.png" width="180px" alt="logo">
                        </a>
                        <!-- /Brand logo-->

                        <!-- Left Text-->
                        <div class="col-lg-3 d-none d-lg-flex align-items-center p-0">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center">
                                <img class="img-fluid w-100"
                                    src="{{asset('users-asset')}}/images/illustration/create-account.svg"
                                    alt="multi-steps" />
                            </div>
                        </div>
                        <!-- /Left Text-->

                        <!-- Register-->
                        <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 ">
                            <div class="">




                                <div class="content-header mb-2">
                                    <h2 class="fw-bolder mb-75">{{__('messages.registerFormTitle')}}</h2>
                                    <span>{{__('messages.registerFormDescription')}}</span>
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Main Options Loop -->
                                    @foreach ($data['mainOptions'] as $mainOption)
                                    <div class="col-md-12 mb-1">
                                        <input type="hidden" name="mainOptions[]" value="{{ $mainOption->id }}">
                                        <label class="form-label" for="select{{ $mainOption->id }}">{{
                                            $mainOption->name_creator }}</label>
                                        <select class="select2 form-select" name="valueOptions[{{ $mainOption->id }}][]"
                                            id="select{{ $mainOption->id }}" required multiple>
                                            @foreach ($mainOption->valueOptions as $valueOption)
                                            <option {{ in_array($valueOption->id, old('valueOptions.' . $mainOption->id,
                                                [])) ? 'selected' : '' }} value="{{ $valueOption->id }}">{{
                                                $valueOption->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('valueOptions.' . $mainOption->id)
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    @endforeach

                                    <!-- Dropzone Container for Video Uploads -->
                                    <div class="dropzone-previews"></div>

                                    <div class="col-12 mt-2">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>







                            </div>
                        </div>
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
    <script src="{{asset('users-asset')}}/vendors/js/forms/wizard/bs-stepper.min.js"></script>
    <script src="{{asset('users-asset')}}/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{asset('users-asset')}}/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{asset('users-asset')}}/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="{{asset('users-asset')}}/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('users-asset')}}/js/core/app-menu.js"></script>
    <script src="{{asset('users-asset')}}/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('users-asset')}}/js/scripts/pages/auth-register.js"></script>

</body>
<!-- END: Body-->

</html>
