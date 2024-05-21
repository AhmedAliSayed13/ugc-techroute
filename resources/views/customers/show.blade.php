@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/magnific-popup/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
<style>
    video {
    object-fit: fill;
}
</style>
@endsection
@section('content')


<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">System</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Customer</a></li>
                        <li class="breadcrumb-item active">Details</li>
                    </ol>
                </div>
                <h4 class="page-title">{{$customer->name}}</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">


        <div class="col-lg-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start mb-3">
                        <img class="d-flex me-3 rounded-circle avatar-lg"
                            src="{{asset('assets/images/users/user.png')}}" alt="Generic placeholder image">
                        <div class="w-100">
                            <h3 class="mt-0 mb-1">{{$customer->name}}</h3>
                            <h5 class=""><i class="mdi mdi-clock"></i> {{$customer->start_license.' : '.$customer->end_license}} </h5>
                            <h5 class=""><i class="mdi mdi-office-building"></i> {{$customer->emirate->name}}</h5>
                            <p class="text-muted"> {{$customer->description}}</p>
                            <button onclick="Copy('{{$customer->short_url}}')"  class="btn btn-soft-info  waves-effect waves btn-xs ">Copy Group Link <i class="fas fa-copy"></i></button>
                        </div>
                    </div>

                    <h5 class="mb-3 mt-4 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle me-1"></i>
                        Customer Files</h5>
                    <div class="">
                        <div class="row filterable-content">
                            @foreach ($customer->medias as $media)
                                @switch($media->type)
                                    @case('jpeg')
                                    @case('png')
                                    @case('gif')
                                    @case('webp')
                                    @case('apng')
                                    @case('avif')
                                    @case('jpg')
                                        <div class="col-sm-4 col-xl-4 filter-item all web illustrator">
                                            <div class="gal-box">
                                                <a href="{{$media->real_url}}" class="image-popup" title="{{$media->name}}" >
                                                    <img src="{{$media->real_url}}" class="img-fluid"
                                                        alt="work-thumbnail" style="height: 200px;width: 100%;" >
                                                </a>
                                                <div class="gall-info">
                                                    <h4 class="font-16 mt-0">{{$media->name}}</h4>
                                                    <a >
                                                        <button onclick="Copy('{{$media->short_url}}')"  class="btn-soft-primary  waves-effect waves">Copy File Link <i class="fas fa-copy"></i></button>
                                                        <a href="{{$media->short_url}}" class="text-muted ms-1">{{$media->short_url}}</a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @break

                                    @case('mp4')
                                    @case('mov')
                                    @case('webm') 
                                        <div class="col-sm-4 col-xl-4 filter-item all web illustrator">
                                            <div class="gal-box">
                                                <a href="{{$media->short_url}}" target="_blank"  title="{{$media->name}}">
                                                    <img src="{{asset('assets/images/video.jpg')}}" class="img-fluid"
                                                    alt="work-thumbnail" style="height: 220px;width:100%" >
                                                </a>
                                                <div class="gall-info">
                                                    <h4 class="font-16 mt-0">{{$media->name}}</h4>
                                                    <a >
                                                        <button onclick="Copy('{{$media->short_url}}')"  class="btn-soft-primary  waves-effect waves">Copy File Link <i class="fas fa-copy"></i></button>
                                                        <a href="{{$media->short_url}}" class="text-muted ms-1">{{$media->short_url}}</a>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @break
                                    @default
                                    <div class="col-sm-4 col-xl-4 filter-item all web illustrator">
                                        <div class="gal-box">
                                            <a href="{{$media->short_url}}" target="_blank"  title="{{$media->name}}">
                                                <img src="{{asset('assets/images/file.png')}}" class="img-fluid"
                                                alt="work-thumbnail" style="height: 220px;width:100%" >
                                            </a>
                                            <div class="gall-info">
                                                <h4 class="font-16 mt-0">{{$media->name}}</h4>
                                                <a >
                                                    <button onclick="Copy('{{$media->short_url}}')"  class="btn-soft-primary  waves-effect waves">Copy File Link <i class="fas fa-copy"></i></button>
                                                    <a href="{{$media->short_url}}" class="text-muted ms-1">{{$media->short_url}}</a>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endswitch
                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
        </div>
    </div>
    <!-- end row -->

</div> <!-- container -->


@endsection
@section('script')
    <!-- Magnific Popup-->
    <script src="{{asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- Gallery Init-->
    <script src="{{asset('assets/js/pages/gallery.init.js')}}"></script>
    <script>
        function Copy(Url) 
        {
            navigator.clipboard.writeText(Url);
        }
    </script>
@endsection

