@extends('user.creator.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/components.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
<style>
    .video-div {
        width: 250px;
        height: 400px
    }
</style>
<style>
    .video-player {
        width: 250px;
        height: 400px;
        object-fit: cover;
        /* Ensures the video covers the area and maintains aspect ratio */
        margin: 5px;
        /* Adds space around each video */
        border-radius: 10px;
    }
</style>


@endsection


@section('content')
<div class="container-fluid ">





    <div class="row">
        <div class="col-12">
            @include('user.creator.profile.tab-header')
        </div>


    </div>


    <div class="row">
        @foreach ($data['featureVideos'] as $video)
            <div class="col-3">
                <div class="card">
                    <div class="card-header ">
                        <button data-bs-toggle="modal" data-bs-target="#delete{{$video->id}}"  class="btn btn-icon btn-icon rounded-circle btn-danger waves-effect waves-float waves-danger"><i data-feather='trash'></i></button>
                    </div>
                    <div class="card-body text-center  ">

                        <video id="plyr-audio-player" class="video-player" controls width="250" height="400">
                            <source src="{{  $video->video_url }}" type="video/mp4">
                        </video>

                    </div>
                </div>
            </div>

            <div class="modal fade modal-danger text-start" id="delete{{$video->id}}" tabindex="-1" aria-labelledby="delete{{$video->id}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel120">{{__('messages.delete_feature_video')}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{__('messages.are_you_sure_you_want_to_delete_this_feature_video')}}
                        </div>
                        <div class="modal-footer">
                            <form action="{{route('creator.feature.videos.delete',$video->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"  >
                                    {{__('messages.delete')}}
                                    <i data-feather='trash-2'></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
