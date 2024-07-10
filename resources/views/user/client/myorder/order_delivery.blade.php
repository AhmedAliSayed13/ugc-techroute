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
        {{-- <div class="content-header row">
            <x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('client.my-orders.index')"
                :title="__('messages.show_order')" />
        </div> --}}

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
                                    <small class="text-muted">{{ $task->getTaskKey()}}</small>
                                </div>
                            </div>
                            <span class="badge rounded-pill badge-light-primary">
                                {{$task->taskStatus->name}}

                            </span>
                        </div>


                        <div class="apply-job-package bg-light-primary rounded">
                            <div class="video-container">
                                @if($task->video)
                                <video id="plyr-audio-playe" class="video-player" controls>
                                    <source src="{{Storage::url($task->video) }}" type="video/mp4">
                                </video>

                                @else
                                <img src="{{asset('users-asset/images/wait.png')}}" width="100%" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="d-grid">
                            <div class="row ">
                                <div class="col-12 mt-2 mb-2">
                                    <a type="button" @if(!$task->video) disabled @else
                                        href="{{Storage::url($task->video) }}" download @endif
                                        class="btn btn-relief-primary w-100 btn-dwonload">{{__('messages.download')}} <i
                                            data-feather='download'></i></a>
                                </div>
                                @if($task->clientAllowedUpdate())
                                <div class="col-6">
                                    <button type="button" class="btn btn-relief-success w-100" data-bs-toggle="modal"
                                        data-bs-target="#accept{{$task->id}}">{{__('messages.accept')}} <i
                                            data-feather='check'></i></button>

                                    <div class="modal fade text-start modal-success" id="accept{{$task->id}}"
                                        tabindex="-1" aria-labelledby="myModalLabel110" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel110">
                                                        {{__('messages.confirm_accept')}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{__('messages.confirm_accept_message')}}
                                                </div>
                                                <div class="modal-footer">
                                                    <a type="button" class="btn btn-success"
                                                        href="{{ route('client.my-orders.delivery.confirm', $task->id) }}">{{__('messages.confirm')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                            <button type="button" class="btn btn-relief-info w-100" data-bs-toggle="modal"
                                        data-bs-target="#modification{{$task->id}}">{{__('messages.modification_request')}} <i
                                            data-feather='edit'></i></button>

                                    <div class="modal fade text-start modal-info" id="modification{{$task->id}}"
                                        tabindex="-1" aria-labelledby="myModalLabel110" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel110">
                                                        {{__('messages.confirm_accept')}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{__('messages.confirm_accept_message')}}
                                                </div>
                                                <div class="modal-footer">
                                                    <a type="button" class="btn btn-info"
                                                        href="{{ route('client.my-orders.delivery.modification', $task->id) }}">{{__('messages.confirm')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @elseif($task->creatorAllowedUpdate())
                                <span class="badge bg-warning p-1">{{__('messages.task_wait_for_creator')}} <i
                                        data-feather='alert-octagon'></i></span>
                                @elseif($task->taskComplate())
                                <span class="badge badge-light-success p-1">{{__('messages.task_completed')}} <i
                                        data-feather='check-circle'></i></span>
                                @else
                                <span class="badge bg-danger p-1">{{__('messages.task_hold_message')}} <i
                                        data-feather='alert-octagon'></i></span>
                                @endif
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
