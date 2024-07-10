@extends('user.creator.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/components.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
<style>
    .video-div {
        width: 200px;
        height: 200px
    }
</style>
<style>
    .video-player {
        width: 200px;
        height: 200px;
        object-fit: cover;
        /* Ensures the video covers the area and maintains aspect ratio */
        margin: 10px;
        /* Adds space around each video */
    }
</style>


@endsection
{{-- @section('breadcrumb')
<x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('creator.profile')"
    :title="__('messages.videoFeature')" />
@endsection --}}

@section('content')
<div class="container-fluid ">





    <div class="row">
        <div class="col-12">
            @include('user.creator.profile.tab-header')
        </div>


    </div>


    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h4 class="card-title">{{__('messages.videoFeature')}}</h4>
                </div>
                <div class="card-body  py-2 my-25">
                    @foreach ($data['featureVideos'] as $video)
                    <video id="plyr-audio-player" class="video-player" controls width="200" height="200">
                        <source src="{{  $video->video_url }}" type="video/mp4">
                    </video>
                    @endforeach
                </div>
            </div>
        </div>


    </div>



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {{-- <form action="{{route('creator.feature.videos')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">اختر
                                الفديو</label>
                            <input type="file" name="video" id="account-upload" hidden accept="video/*" />
                            <p class="mb-0">أنواع الملفات المسموح بها: mp4، mov، avi، wmv</p>
                            @error('video')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary mt-1 me-1">{{__('messages.Upload')}}</button>

                        </div>
                    </form> --}}

                    <h1>{{__('messages.slectVideo')}}</h1>
                    <form action="{{ route('creator.feature.videos') }}" class="dropzone" id="videoDropzone">
                        @csrf
                        <div class="dz-message">{{__('messages.dropFeatureVideos')}}</div>
                    </form>
                </div>
            </div>
        </div>
    </div>





</div>




</div>
@endsection
@section('script')
<script src="{{asset('users-asset/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-select2.js')}}"></script>
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
