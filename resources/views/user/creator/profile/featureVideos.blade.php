@extends('user.creator.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/components.css')}}">

<style>
    .video-div {
        width: 200px;
        height: 200px
    }
</style>


@endsection
@section('breadcrumb')
<x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('creator.profile')" :title="__('messages.videoFeature')" />
@endsection

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
                    <video id="plyr-audio-player" class="video-player" controls width="250">
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
                    <form action="{{route('creator.feature.videos')}}" method="POST" enctype="multipart/form-data">
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
@endsection
