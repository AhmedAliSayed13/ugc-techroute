@foreach ($data['order']->orderRequests as $orderRequest)
<div class="modal fade text-start" id="profile{{$orderRequest->creator_id}}" tabindex="-1"
    aria-labelledby="model{{$orderRequest->creator_id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="model{{$orderRequest->creator_id}}">
                    {{__('messages.profile_of')}}
                    {{$orderRequest->creator->name}} </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="user-avatar-section">
                                    <div class="d-flex align-items-center flex-column">
                                        <img class="img-fluid rounded mt-3 mb-2"
                                            src="{{getUserProfileImage($orderRequest->creator->img)}}" height="110"
                                            width="110" alt="User avatar">
                                        <div class="user-info text-center">
                                            <h4>{{$orderRequest->creator->name}}</h4>
                                            <span class="badge bg-light-secondary">{{__('messages.Joined_vidoo_since').'
                                                '.$orderRequest->creator->created_at->format('Y-m-d') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around my-2 pt-75">
                                    <div class="d-flex align-items-start me-2">
                                        {{-- <span class="badge bg-light-primary p-75 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-check font-medium-2">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </span>
                                        <div class="ms-75">
                                            <h4 class="mb-0">{{$orderRequest->creator->orderComplete()}}</h4>
                                            <small>{{__('messages.projects_completed')}}</small>
                                        </div> --}}
                                    </div>
                                    {{-- <div class="d-flex align-items-start">
                                        <span class="badge bg-light-primary p-75 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-briefcase font-medium-2">
                                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                            </svg>
                                        </span>
                                        <div class="ms-75">
                                            <h4 class="mb-0">568</h4>
                                            <small>Projects Done</small>
                                        </div>
                                    </div> --}}
                                </div>
                                <h4 class="fw-bolder border-bottom pb-50 mb-1">{{__('messages.personal_details')}}</h4>
                                <div class="info-container">
                                    <ul class="list-unstyled">
                                        @if (!empty($orderRequest->creator->address))
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">{{__('messages.address')}}</span>
                                            <span>{{$orderRequest->creator->address}}</span>
                                        </li>
                                        @endif
                                        @if (isset($orderRequest->creator->creatorInfo->country) &&
                                        !empty($orderRequest->creator->creatorInfo->country))
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">{{__('messages.country')}}:</span>
                                            <span>{{$orderRequest->creator->creatorInfo->country?$orderRequest->creator->creatorInfo->country->name:'-'}}</span>
                                        </li>
                                        @endif
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">{{__('messages.type')}}:</span>
                                            <span>{{$orderRequest->creator->creatorInfo->gender}}</span>
                                        </li>
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">{{__('messages.birthdate')}}:</span>
                                            <span>{{$orderRequest->creator->creatorInfo->birthdate}}</span>
                                        </li>
                                        @if (isset($orderRequest->creator->creatorInfo->languages) &&
                                        !empty($orderRequest->creator->creatorInfo->languages))
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">{{__('messages.languages')}}:</span>
                                            <span>{{$orderRequest->creator->creatorInfo->languages}}</span>
                                        </li>
                                        @endif
                                        @if (isset($orderRequest->creator->creatorInfo->describe) &&
                                        !empty($orderRequest->creator->creatorInfo->describe))
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">{{__('messages.describe')}}:</span>
                                            <span>{{$orderRequest->creator->creatorInfo->describe}}</span>
                                        </li>
                                        @endif
                                    </ul>

                                </div>
                                <h4 class="fw-bolder border-bottom pb-50 mb-1">{{__('messages.video_options')}}</h4>
                                <div class="info-container">
                                    <ul class="list-unstyled">
                                        @foreach ($orderRequest->creator->creatorOptions as $option)

                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">{{$option->mainOption->name_creator}}</span>
                                            <span>{{getValuesOptionCommaNameByIds($option->value_options)}}</span>
                                        </li>
                                        @endforeach



                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div id="carousel-video-profile{{$orderRequest->id}}" class="carousel slide"
                            data-bs-keyboard="true">
                            <div class="carousel-inner" role="listbox">
                                @foreach ($orderRequest->creator->featureVideos as $key => $featureVideo)
                                <div class="carousel-item @if($key == 0) active @endif">
                                    <div class="video-container-profile">
                                        <video id="plyr-audio-player-{{ $key }}" class="video-player" controls>
                                            <source src="{{ asset($featureVideo->video_url) }}" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carousel-video-profile{{$orderRequest->id}}"
                                role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-video-profile{{$orderRequest->id}}"
                                role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Accept</button>
            </div> --}}
        </div>
    </div>
</div>
@endforeach
