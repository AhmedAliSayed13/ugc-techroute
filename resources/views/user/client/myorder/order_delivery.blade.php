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

    .btn-dwonload,
    .btn-dwonload:hover {
        color: white !important;
    }
</style>
@endsection

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

            @if(count($data['tasks'])>0)
            @foreach ($data['tasks'] as $task)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="card card-apply-job">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <div class="d-flex flex-row">
                                <div class="avatar me-1">
                                    <img src="{{getUserProfileImage($task->creator->img)}}" alt="Avatar" width="42"
                                        height="42">
                                </div>
                                <div class="user-info">
                                    <h5 class="mb-0">{{$task->creator->name}}</h5>
                                    <small class="text-muted">{{ $task->creator->creatorInfo->gender}}</small>
                                </div>
                            </div>
                            <span class="badge rounded-pill badge-light-primary">
                                {{$task->taskStatus->name}}

                            </span>
                        </div>


                        <div class="apply-job-package bg-light-primary rounded">
                            <div class="video-container">
                                <video id="plyr-audio-playe" class="video-player" controls>
                                    <source src="{{Storage::url($task->video) }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="d-grid">
                            <div class="row ">
                                <div class="col-12 mt-2 mb-2">
                                    <a href="{{Storage::url($task->video) }}" type="button" download
                                        class="btn btn-relief-primary w-100 btn-dwonload">{{__('messages.download')}} <i
                                            data-feather='download'></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('client.my-orders.show', $task->id) }}"
                                        class="btn btn-relief-success w-100">{{__('messages.accept')}} <i
                                            data-feather='check'></i></a>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('client.my-orders.show', $task->id) }}"
                                        class="btn btn-relief-info w-100">{{__('messages.modification_request')}} <i
                                            data-feather='edit'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <h3 class="text-center m-4">{{__('messages.no_data_found_yet')}}</h3>
            @endif
        </div>




    </div>
</div>




@include('user.client.myorder.profile-section')


@endsection
@section('script')

{{-- <script>
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
</script> --}}

@endsection
