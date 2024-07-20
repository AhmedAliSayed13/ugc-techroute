<div class="sidebar-content">
    <span class="sidebar-close-icon">
        <i data-feather="x"></i>
    </span>
    <!-- Sidebar header start -->
    <div class="chat-fixed-search">
        <div class="d-flex align-items-center w-100">
            <div class="">
                <div class="avatar avatar-border">
                    <img src="{{getUserProfileImage(auth()->user()->img)}}" alt="user_avatar"
                        height="42" width="42" />
                    {{-- <span class="avatar-status-online"></span> --}}
                </div>
            </div>
            <div class="input-group input-group-merge ms-1 w-100">
                <span class="input-group-text round"><i data-feather="search"
                        class="text-muted"></i></span>
                <input type="text" class="form-control round" id="chat-search"
                    placeholder="{{__('messages.Search_start_new_chat')}}" aria-label="Search..."
                    aria-describedby="chat-search" />
            </div>
        </div>
    </div>
    <!-- Sidebar header end -->

    <!-- Sidebar Users start -->
    <div id="users-list" class="chat-user-list-wrapper list-group">
        <h4 class="chat-list-title">{{__('messages.chats')}}</h4>
        <ul class="chat-users-list chat-list media-list">
            @foreach ($data['tasks'] as $task )
            <a href="{{route('client.chats.show', $task->id)}}">
                <li>
                    <span class="avatar"><img src="{{getUserProfileImage($task->creator->img)}}"
                            height="42" width="42" alt="Generic placeholder image" />
                        {{-- <span class="avatar-status-offline"></span> --}}
                    </span>
                    <div class="chat-info flex-grow-1">
                        <h5 class="mb-0">{{$task->creator->name}}</h5>
                        <p class="card-text text-truncate">
                            {{__('messages.order_number')}} : {{$task->getTaskKey()}}
                        </p>
                    </div>
                    <div class="chat-meta text-nowrap">
                        {{-- <small class="float-end mb-25 chat-time">4:14 PM</small> --}}
                        @if($task->countMessageUnRead()>0)
                            <span class="badge bg-danger rounded-pill float-end">{{$task->countMessageUnRead()}}</span>
                        @endif
                    </div>
                </li>
            </a>
            @endforeach
        </ul>

    </div>
    <!-- Sidebar Users end -->
</div>
