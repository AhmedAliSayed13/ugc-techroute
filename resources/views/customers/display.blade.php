<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
<title>{{config('app.name')}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- App css -->
    <link href="{{asset('assets/css/config/purple/bootstrap.min.css')}}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{asset('assets/css/config/purple/app.min.css')}}" rel="stylesheet" type="text/css"
        id="app-default-stylesheet" />

    <link href="{{asset('assets/css/config/purple/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" />
    <link href="{{asset('assets/css/config/purple/app-dark.min.css')}}" rel="stylesheet" type="text/css"
        id="app-dark-stylesheet" />

    <!-- icons -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <style>
        .media-item{
            display: inline-grid;
        }
    </style>

</head>

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>


    <div id="wrapper">








        <div class="content mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-xl-10 m-auto">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="{{asset('assets/images/logo-light.png')}}"
                                    class="rounded  " alt="profile-image">

                                <h2 class="mb-0 mt-3">{{$customer->name}}</h2>
                                @if($customer->start_license)
                                    <h4 class="text-muted mt-1">تاريخ بدء الرخصة  :{{ $customer->start_license}}</h4>
                                @endif
                                @if($customer->end_license)
                                    <h4 class="text-muted mt-1">تاريخ انتهاء الرخصة  :{{ $customer->end_license}}</h4>
                                @endif
                                <h4 class="text-muted mt-1">{{$customer->emirate->name}}</h4>

                                

                                <div class="text-center mt-3">
                                    <p class="text-muted font-13 mb-3">
                                        {{$customer->description}}
                                    </p>
                                </div>
                                <div class="border border-light p-2 mb-3">
                                    <div class="d-flex align-items-start text-left m-1">
                                        <div class="w-100">
                                            <h4 class="m-0">الملفات</h4>
                                        </div>
                                    </div>
                                    
                                    @foreach ($customer->medias as $media)
                                    <a href="{{$media->short_url}}" class="media-item d-inline-grid">
                                        @if(in_array($media->type,['jpeg','png','gif','webp','apng','avif','jpg']) )
                                            <img src="{{$media->real_url}}" alt="post-img" class="rounded me-1" height="160">
                                        @else
                                            <img src="{{asset('assets\images\file.png')}}" alt="post-img" class="rounded me-1" height="160">
                                        @endif
                                        <p>{{$media->type}}</p>
                                        </a>
                                    @endforeach
                                    

                                    
                                </div>

                                <ul class="social-list list-inline mt-3 mb-0">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/uaebarq"
                                            class="social-list-item border-primary text-primary"><i
                                                class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.linkedin.com/in/uaebarqgroup/"
                                            class="social-list-item border-blue text-blue"><i
                                                class="mdi mdi-linkedin"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/uae_barq_en/"
                                            class="social-list-item border-pink text-pink"><i
                                                class="mdi mdi-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/uae_barq_en" class="social-list-item border-info text-info"><i
                                                class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.youtube.com/user/UAEBARQ"
                                            class="social-list-item border-danger text-danger"><i
                                                class="mdi mdi-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> 

                       

                    </div> 


                </div>
                

            </div>

        </div>



    </div>











    <!-- Vendor js -->
    <script src="{{asset('assets/js/vendor.min.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>

</body>

</html>