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
        href="{{asset('users-asset/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
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

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="blank-page">
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
                        <!-- Register basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="{{route('home')}}" class="brand-logo">
                                    <img src="{{asset('users-asset/images/logo/logo-2.png')}}" width="150px" alt="logo">
                                </a>

                                <h4 class="card-title mb-1">{{__('messages.adventure_starts_here')}}</h4>
                                <p class="card-text mb-2">{{__('messages.registerDescribtions')}}</p>

                                <form class="auth-register-form mt-2" action="{{route('creator.register')}}"
                                    method="POST">
                                    @csrf
                                    <div class="mb-1">
                                        <label for="name" class="form-label">{{__('messages.name')}}</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            aria-describedby="name" tabindex="1" autofocus value="{{old('name')}}"
                                            required />
                                        @error('name')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-1">
                                        <label for="phone" class="form-label">{{__('messages.phone')}}</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            aria-describedby="phone" tabindex="2" value="{{old('phone')}}" required />
                                        @error('phone')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <label for="email" class="form-label">{{__('messages.email')}}</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{old('email')}}" aria-describedby="email" tabindex="2" required />
                                        @error('email')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <label for="country_id" class="form-label">{{__('messages.country')}}</label>
                                        <select class="form-select" id="country_id" name="country_id">
                                            <option>{{__('messages.selectOption')}}</option>
                                            @foreach($data['countries'] as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <label for="gender" class="form-label">{{__('messages.gender')}}</label>
                                        <select class="form-select" id="gender" name="gender">
                                            <option>{{__('messages.selectOption')}}</option>
                                            <option value="ذكر">ذكر</option>
                                            <option value="انثي">انثي</option>
                                        </select>
                                        @error('gender')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <label for="birthdate" class="form-label">{{__('messages.birthdate')}}</label>
                                        <input type="date" class="form-control" id="birthdate" name="birthdate"
                                            value="{{old('birthdate')}}" tabindex="3">
                                        @error('birthdate')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-1">
                                        <label for="password" class="form-label">{{__('messages.password')}}</label>

                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge" id="password"
                                                name="password" aria-describedby="password" tabindex="3" required />
                                            <span class="input-group-text cursor-pointer"><i
                                                    data-feather="eye"></i></span>
                                        </div>
                                        @error('password')
                                        <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agree" name="agree"
                                                tabindex="4" required />
                                            <label class="form-check-label" for="agree">
                                                {{__('messages.IAgreeTo')}} <a
                                                    href="#">{{__('messages.PrivacyPolicy&Terms')}}</a>
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100"
                                        tabindex="5">{{__('messages.SignUp')}}</button>
                                </form>

                                <p class="text-center mt-2">
                                    <span>{{__('messages.AlreadyHaveAnAccount?')}}</span>
                                    <a href="{{route('user.login')}}">
                                        <span>{{__('messages.SignInInstead')}}</span>
                                    </a>
                                </p>

                                {{-- <div class="divider my-2">
                                    <div class="divider-text">{{__('messages.or')}}</div>
                                </div>

                                <div class="auth-footer-btn d-flex justify-content-center">
                                    <a href="#" class="btn btn-facebook">
                                        <i data-feather="facebook"></i>
                                    </a>
                                    <a href="#" class="btn btn-twitter white">
                                        <i data-feather="twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-google">
                                        <i data-feather="mail"></i>
                                    </a>
                                    <a href="#" class="btn btn-github">
                                        <i data-feather="github"></i>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <!-- /Register basic -->
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
    <script src="{{asset('users-asset/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('users-asset/js/core/app-menu.js')}}"></script>
    <script src="{{asset('users-asset/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('users-asset/js/scripts/pages/auth-register.js')}}"></script>
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
