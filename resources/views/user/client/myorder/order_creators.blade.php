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

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        {{-- <div class="content-header row">
            <x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('client.my-orders.index')"
                :title="__('messages.show_order')" />
        </div> --}}

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
                        {{-- <p class="card-text mb-2">
                            {{$orderRequest->creator->creatorInfo->describe}}
                        </p> --}}
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
                            <div class="row mt-2">
                                @if($orderRequest->status!="1" && $orderRequest->status!="0")
                                <div class="col-6">
                                    <button type="button" class="btn btn-relief-success w-100" data-bs-toggle="modal"
                                        data-bs-target="#accept{{$orderRequest->id}}">{{__('messages.accept')}} <i
                                            data-feather='user-check'></i></button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-relief-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#reject{{$orderRequest->id}}">{{__('messages.reject')}} <i
                                         data-feather='user-x'></i></button>
                                </div>
                                @elseif($orderRequest->status=="1")
                                <span class="badge badge-light-success p-1">{{__('messages.creator_accepted')}}
                                    <i data-feather='user-check'></i>
                                </span>
                                @else
                                <span class="badge badge-light-danger p-1">{{__('messages.creator_rejected')}}
                                    <i data-feather='user-x'></i>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- modal accept --}}
            <div class="modal fade text-start modal-success" id="accept{{$orderRequest->id}}" tabindex="-1"
                aria-labelledby="myModalLabel110" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content">
                        <form action="{{route('client.my-orders.choose.creator',$orderRequest->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="1">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel110">
                                    {{__('messages.accept_creator')}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{__('messages.confirm_accept_creator')}}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">{{__('messages.confirm')}}</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            {{-- modal reject --}}
            <div class="modal fade text-start modal-danger" id="reject{{$orderRequest->id}}" tabindex="-1"
                aria-labelledby="myModalLabel110" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="{{route('client.my-orders.choose.creator',$orderRequest->id)}}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="0">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel110">
                                    {{__('messages.confirm_creator_reject')}}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{__('messages.confirm_creator_reject_message')}}
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger">{{__('messages.confirm')}}</button>
                            </div>
                        </form>
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

<script>
    $(document).ready(function() {
        $('.form-select').on('change', function() {
            var formId = $(this).data('form-id');
            var form = $('#form-' + formId);
            form.submit();
        });
        // $('.form-select').on('change', function() {
        //     var formId = $(this).data('form-id');
        //     var form = $('#form-' + formId);
        //     // var actionUrl = form.attr('action');
        //     // var formData = form.serialize();

        //     // $.ajax({
        //     //     url: actionUrl,
        //     //     type: 'POST',
        //     //     data: formData,
        //     //     success: function(response) {
        //     //         // Display success message using toastr
        //     //         if (response.status === 'success') {
        //     //             toastr.success(response.message);
        //     //         } else {
        //     //             // toastr.error('An unexpected error occurred.');
        //     //             windows.location.reload();
        //     //         }
        //     //     },
        //     //     error: function(xhr) {
        //     //         windows.location.reload();
        //     //         // Display error message using toastr
        //     //         // toastr.error(xhr.responseJSON.message || 'An error occurred during the request.');
        //     //     }
        //     // });
        // });
    });
</script>

@endsection
