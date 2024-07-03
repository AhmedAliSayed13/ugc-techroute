@extends('user.client.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<style>
    .card-apply-job .apply-job-package {
        display: contents !important;
    }

    .video-container {
        position: relative;
        width: 100%;

        height: 400px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .video-container-profile {
        position: relative;
        width: 100%;

        height: 600px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .video-container video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* This ensures the video covers the entire container without maintaining the aspect ratio */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
        /* Make sure the icons are visible on your video */
    }
</style>
@endsection
{{-- @section('breadcrumb')

@endsection --}}

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('client.my-orders.index')"
                :title="__('messages.show_order')" />
        </div>

        <div class="row">
            <div class="col-12">
                @include('user.client.myorder.tab-header')
            </div>






            <div class="col-12">
                <h4 class="card-title">{{__('messages.required_of_creators')}}
                    : {{$data['order']->video_count}}
                </h4>
            </div>
            @foreach ($data['order']->orderRequests as $orderRequest)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-apply-job">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <div class="d-flex flex-row">
                                <div class="avatar me-1">
                                    <img src="{{getUserProfileImage($orderRequest->creator->img)}}" alt="Avatar"
                                        width="42" height="42">
                                </div>
                                <div class="user-info">
                                    <h5 class="mb-0">{{$orderRequest->creator->name}}</h5>
                                    <small class="text-muted">{{ __('messages.updated').'
                                        '.$orderRequest->created_at->format('Y-m-d')
                                        }}</small>
                                </div>
                            </div>
                            {{-- <span
                                class="badge rounded-pill badge-light-primary">{{$orderRequest->creator->creatorInfo->country->name}}</span>
                            --}}
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#profile{{$orderRequest->creator_id}}">
                                {{__('messages.view')}}
                            </button>


                        </div>
                        {{-- <h5 class="apply-job-title"></h5> --}}
                        <p class="card-text mb-2">
                            {{$orderRequest->creator->creatorInfo->describe}}
                        </p>
                        <div class="apply-job-package bg-light-primary rounded">
                            <div id="carousel-video{{$orderRequest->id}}" class="carousel slide"
                                data-bs-keyboard="true">
                                <div class="carousel-inner" role="listbox">
                                    @foreach ($orderRequest->creator->featureVideos as $key => $featureVideo)
                                    <div class="carousel-item @if($key == 0) active @endif">
                                        <div class="video-container">
                                            <video id="plyr-audio-player-{{ $key }}" class="video-player" controls>
                                                <source src="{{ asset($featureVideo->video_url) }}" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carousel-video{{$orderRequest->id}}"
                                    role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-video{{$orderRequest->id}}"
                                    role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="d-grid">
                            <div class="mb-1 mt-2">
                                <label class="form-label" for="basicSelect">{{__('messages.status')}}</label>
                                <select class="form-select" id="basicSelect">
                                    <option value="">{{__('messages.selectOption')}}</option>
                                    <option value="1">{{__('messages.accept')}}</option>
                                    <option value="0">{{__('messages.reject')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>




    </div>
</div>




@include('user.client.myorder.profile-section')


@endsection
@section('script')

@endsection
