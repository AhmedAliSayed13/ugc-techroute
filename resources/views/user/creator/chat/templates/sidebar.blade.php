<div id="users-list" class="chat-user-list-wrapper list-group">
    <h4 class="chat-list-title">{{__('messages.chats')}}</h4>
    <ul class="chat-users-list chat-list media-list">
        @foreach ($data['tasks'] as $task )
        <a href="{{route('creator.chats.show', $task->id)}}">
            <li>
                <span class="avatar"><img src="{{getUserProfileImage($task->client->img)}}"
                        height="42" width="42" alt="Generic placeholder image" />
                    {{-- <span class="avatar-status-offline"></span> --}}
                </span>
                <div class="chat-info flex-grow-1">
                    <h5 class="mb-0">{{$task->client->name}}</h5>
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
