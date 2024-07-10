@extends('user.creator.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/pages/app-ecommerce.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
<style>
    .video-div {
        width: 200px;
        /* height: 200px */
    }
</style>
<style>
    .video-player {
        width: 200px;
        /* height: 200px; */
        object-fit: cover;
        /* Ensures the video covers the area and maintains aspect ratio */
        margin: 10px;
        /* Adds space around each video */
    }
</style>
@endsection


@section('content')
<div class=" content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        {{-- <div class="content-header row">

            <x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('creator.offers.index')"
                :title="__('messages.offers')" />
        </div> --}}

        <div class="content-body">
            <div class="container-fluid mt-1">

                <div class="col-12">
                    @include('user.creator.tasks.tab-header')
                </div>







                <div class="col-12">
                    <div class="card">
                        <div class="card-header ">
                            <h4 class="card-title">{{__('messages.video')}}</h4>
                        </div>
                        @if($data['task']->video)
                        <div class="card-body  py-2 my-25">
                            <video id="plyr-audio-player" class="video-player" controls width="200" >
                                <source src="{{  Storage::url($data['task']->video) }}" type="video/mp4">
                            </video>

                        </div>

                        @else
                        <p class="text-center font-weight-bold">{{__('messages.noVideoDeliveryYet')}}</p>
                        @endif
                    </div>
                </div>







                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <h1>{{__('messages.slectVideo')}}</h1>
                            <form action="{{ route('creator.tasks.update',$data['task']->id) }}" method="POST"
                                class="dropzone" id="videoDropzone">
                                @csrf
                                @method('PUT')
                                <div class="dz-message">{{__('messages.dropFeatureVideos')}}</div>
                            </form>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
<script>
    Dropzone.options.videoDropzone = {
        paramName: 'video', // The name that will be used to transfer the file
        maxFilesize: 50, // Set the maximum file size to 50 MB
        acceptedFiles: 'video/*', // Only accept video files
        init: function() {
            this.on("success", function(file, response) {
                console.log(response);
                window.location.reload();
            });
            this.on("error", function(file, response) {
                console.log(response);
                window.location.reload();
            });
        }
    };
</script>
@endsection
