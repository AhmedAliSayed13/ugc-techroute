@extends('user.client.layouts.master')

@section('style')
@endsection


@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="container-fluid mt-4">
            <div class="row">




                        @if(count($data['tasks'])>0)
                            @foreach ($data['tasks'] as $task)
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="card card-apply-job">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <div class="d-flex flex-row">
                                                    <div class="avatar me-1">
                                                        <img src="{{getUserProfileImage($task->creator->img)}}" alt="Avatar"
                                                            width="42" height="42">
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
                                                            class="btn btn-relief-primary w-100
                                                            btn-dwonload">{{__('messages.download')}} <i
                                                                data-feather='download'></i></a>
                                                    </div>

                                                        <span
                                                            class="badge badge-light-success p-1">{{__('messages.task_completed')}}
                                                            <i data-feather='check-circle'></i></span>
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
</div>


@endsection
