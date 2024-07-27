<div class="offcanvas offcanvas-end" tabindex="-1" id="taskDetails{{$task->id}}" aria-labelledby="taskDetails{{$task->id}}">
    <div class="offcanvas-header">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body my-auto mx-0 ">
        <header class="user-profile-header text-center">
            <div class="header-profile-sidebar">
                <div class="avatar box-shadow-1 avatar-border avatar-xl">
                    <img src="{{getUserProfileImage($task->client->img)}}" alt="user_avatar" height="70" width="70" />
                    {{-- <span class="avatar-status-busy avatar-status-lg"></span> --}}
                </div>
                <h4 class="chat-user-name">{{$task->client->name}}</h4>
                <span class="user-post">{{__('messages.order_number')}} :
                    {{$task->getTaskKey()}}</span>
            </div>
        </header>
        <div class="user-profile-sidebar-area">
            <!-- User's Links -->
            <div class="more-options">
                <h6 class="section-label mb-1 mt-3">{{__('messages.order_details')}}</h6>
                <ul class="list-unstyled">
                    <li class="cursor-pointer mb-1">
                        <i class="font-small-3 me-50 text-primary">{{__('messages.order_number')}}</i>
                        <span class="align-middle">{{$task->getTaskKey()}}</span>
                    </li>
                    <li class="cursor-pointer mb-1">
                        <i class="font-small-3 me-50 text-primary">{{__('messages.order_status')}}</i>
                        <span class="align-middle">{{$task->order->orderStatus->name}}</span>
                    </li>
                    <li class="cursor-pointer mb-1 ">
                        <i class="font-small-3 me-50 text-primary">{{__('messages.product_name')}}</i>
                        <span class="align-middle">{{$task->order->product_name}}</span>
                    </li>
                    <li class="cursor-pointer mb-1 ">
                        <i class="font-small-3 me-50 text-primary">{{__('messages.product_link')}}</i>
                        <span class="align-middle">{{$task->order->product_link}}</span>
                    </li>
                    <li class="cursor-pointer mb-1 ">
                        <i class="font-small-3 me-50 text-primary">{{__('messages.video_type')}}</i>
                        <span class="align-middle">{{$task->order->videoOptionType->name}}</span>
                    </li>
                    <li class="cursor-pointer mb-1 ">
                        <i class="font-small-3 me-50 text-primary">{{__('messages.video_duration')}}</i>
                        <span class="align-middle">{{$task->order->videoOptionDuration->time??''}}
                            {{__('messages.second')}}</span>
                    </li>
                    <li class="cursor-pointer mb-1 ">
                        <i class="font-small-3 me-50 text-primary">{{__('messages.video_aspect')}}</i>
                        <span class="align-middle">{{$task->order->videoOptionAspect->name}}</span>
                    </li>
                </ul>
            </div>
            <!--/ User's Links -->

            <div class="personal-info">
                <h6 class="section-label mb-1 mt-3">{{__('messages.options')}}</h6>
                <ul class="list-unstyled">
                    @foreach ($task->order->orderOptions as $orderOption )
                        <li class="cursor-pointer mb-1">
                            <i class="font-small-3 me-50 text-primary">{{$orderOption->mainOption->name_creator}}</i>
                            <br>
                            <span class="align-middle">{{getValuesOptionCommaNameByIds($orderOption->value_options)}}</span>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>

<!--/ End Offcanvas-->
