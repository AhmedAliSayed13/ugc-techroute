<div class="user-profile-sidebar">
    <header class="user-profile-header">
        <span class="close-icon">
            <i data-feather="x"></i>
        </span>
        <!-- User Profile image with name -->
        <div class="header-profile-sidebar">
            <div class="avatar box-shadow-1 avatar-border avatar-xl">
                <img src="{{getUserProfileImage($data['taskChat']->creator->img)}}"
                    alt="user_avatar" height="70" width="70" />
                {{-- <span class="avatar-status-busy avatar-status-lg"></span> --}}
            </div>
            <h4 class="chat-user-name">{{$data['taskChat']->creator->name}}</h4>
            <span class="user-post">{{__('messages.order_number')}} :
                {{$data['taskChat']->getTaskKey()}}</span>
        </div>
        <!--/ User Profile image with name -->
    </header>
    <div class="user-profile-sidebar-area">
        @if(isset($data['taskChat']->creator->creatorInfo->describe))
        <!-- About User -->
        <h6 class="section-label mb-1">{{__('messages.describeCreator')}}</h6>
        <p>{{$data['taskChat']->creator->creatorInfo->describe}}</p>
        <!-- About User -->
        @endif
        <!-- User's personal information -->
        <div class="personal-info">
            <h6 class="section-label mb-1 mt-3">{{__('messages.aboutCreator')}}</h6>
            <ul class="list-unstyled">
                @if(isset($data['taskChat']->creator->creatorInfo->country->name))
                <li class="mb-1">
                    <i data-feather="flag" class="font-medium-2 me-50"></i>
                    <span
                        class="align-middle">{{$data['taskChat']->creator->creatorInfo->country->name}}</span>
                </li>
                @endif
                @if(isset($data['taskChat']->creator->creatorInfo->birthdate) &&
                $data['taskChat']->creator->creatorInfo->birthdate)
                <li class="mb-1">
                    <i data-feather="calendar" class="font-medium-2 me-50"></i>
                    <span
                        class="align-middle">{{$data['taskChat']->creator->creatorInfo->birthdate}}</span>
                </li>
                @endif
                @if(isset($data['taskChat']->creator->creatorInfo->gender) &&
                $data['taskChat']->creator->creatorInfo->gender)
                <li class="mb-1">
                    <i data-feather="users" class="font-medium-2 me-50"></i>
                    <span
                        class="align-middle">{{$data['taskChat']->creator->creatorInfo->gender}}</span>
                </li>
                @endif
                @if(isset($data['taskChat']->creator->creatorInfo->languages) &&
                $data['taskChat']->creator->creatorInfo->languages)
                <li class="mb-1">
                    <i data-feather="globe" class="font-medium-2 me-50"></i>
                    <span
                        class="align-middle">{{$data['taskChat']->creator->creatorInfo->languages}}</span>
                </li>
                @endif

            </ul>
        </div>
        <!--/ User's personal information -->

        <!-- User's Links -->
        <div class="more-options">
            <h6 class="section-label mb-1 mt-3">{{__('messages.order_details')}}</h6>
            <ul class="list-unstyled">
                <li class="cursor-pointer mb-1">
                    <i class="font-small-3 me-50 text-primary">{{__('messages.order_number')}}</i>
                    <span class="align-middle">{{$data['taskChat']->getTaskKey()}}</span>
                </li>
                <li class="cursor-pointer mb-1">
                    <i class="font-small-3 me-50 text-primary">{{__('messages.order_status')}}</i>
                    <span class="align-middle">{{$data['taskChat']->order->orderStatus->name}}</span>
                </li>
                <li class="cursor-pointer mb-1 ">
                    <i class="font-small-3 me-50 text-primary">{{__('messages.product_name')}}</i>
                    <span class="align-middle">{{$data['taskChat']->order->product_name}}</span>
                </li>
                <li class="cursor-pointer mb-1 ">
                    <i class="font-small-3 me-50 text-primary">{{__('messages.product_link')}}</i>
                    <span class="align-middle">{{$data['taskChat']->order->product_link}}</span>
                </li>
                <li class="cursor-pointer mb-1 ">
                    <i class="font-small-3 me-50 text-primary">{{__('messages.video_type')}}</i>
                    <span
                        class="align-middle">{{$data['taskChat']->order->videoOptionType->name}}</span>
                </li>
                <li class="cursor-pointer mb-1 ">
                    <i class="font-small-3 me-50 text-primary">{{__('messages.video_duration')}}</i>
                    <span
                        class="align-middle">{{$data['taskChat']->order->videoOptionDuration->time??''}}
                        {{__('messages.second')}}</span>
                </li>
                <li class="cursor-pointer mb-1 ">
                    <i class="font-small-3 me-50 text-primary">{{__('messages.video_aspect')}}</i>
                    <span
                        class="align-middle">{{$data['taskChat']->order->videoOptionAspect->name}}</span>
                </li>
            </ul>
        </div>
        <!--/ User's Links -->
    </div>
</div>
