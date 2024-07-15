@extends('user.creator.layouts.master')

@section('style')

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/colors.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/components.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/themes/bordered-layout.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/themes/semi-dark-layout.css">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/core/menu/menu-types/horizontal-menu.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/pages/app-chat.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/pages/app-chat-list.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/custom-rtl.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css/style-rtl.css">

@endsection
@section('content')

<!-- BEGIN: Content-->
<div class="content chat-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper container-xxl p-0">
        <div class="sidebar-left">
            <div class="sidebar">
                <!-- Admin user profile area -->
                <div class="chat-profile-sidebar">
                    <header class="chat-profile-header">
                        <span class="close-icon">
                            <i data-feather="x"></i>
                        </span>
                        <!-- User Information -->
                        {{-- <div class="header-profile-sidebar">
                            <div class="avatar box-shadow-1 avatar-xl avatar-border">
                                <img src="{{asset('users-asset')}}/images/portrait/small/avatar-s-11.jpg"
                                    alt="user_avatar" />
                                <span class="avatar-status-online avatar-status-xl"></span>
                            </div>
                            <h4 class="chat-user-name">John Doe</h4>
                            <span class="user-post">Admin</span>
                        </div> --}}
                        <!--/ User Information -->
                    </header>
                    <!-- User Details start -->
                    {{-- <div class="profile-sidebar-area">
                        <h6 class="section-label mb-1">About</h6>
                        <div class="about-user">
                            <textarea data-length="120" class="form-control char-textarea" id="textarea-counter"
                                rows="5" placeholder="About User">
                                        Dessert chocolate cake lemon drops jujubes. Biscuit cupcake ice cream bear claw brownie brownie marshmallow.</textarea>
                            <small class="counter-value float-end"><span class="char-count">108</span> / 120 </small>
                        </div>
                        <!-- To set user status -->
                        <h6 class="section-label mb-1 mt-3">Status</h6>
                        <ul class="list-unstyled user-status">
                            <li class="pb-1">
                                <div class="form-check form-check-success">
                                    <input type="radio" id="activeStatusRadio" name="userStatus"
                                        class="form-check-input" value="online" checked />
                                    <label class="form-check-label ms-25" for="activeStatusRadio">Active</label>
                                </div>
                            </li>
                            <li class="pb-1">
                                <div class="form-check form-check-danger">
                                    <input type="radio" id="dndStatusRadio" name="userStatus" class="form-check-input"
                                        value="busy" />
                                    <label class="form-check-label ms-25" for="dndStatusRadio">Do Not Disturb</label>
                                </div>
                            </li>
                            <li class="pb-1">
                                <div class="form-check form-check-warning">
                                    <input type="radio" id="awayStatusRadio" name="userStatus" class="form-check-input"
                                        value="away" />
                                    <label class="form-check-label ms-25" for="awayStatusRadio">Away</label>
                                </div>
                            </li>
                            <li class="pb-1">
                                <div class="form-check form-check-secondary">
                                    <input type="radio" id="offlineStatusRadio" name="userStatus"
                                        class="form-check-input" value="offline" />
                                    <label class="form-check-label ms-25" for="offlineStatusRadio">Offline</label>
                                </div>
                            </li>
                        </ul>
                        <!--/ To set user status -->

                        <!-- User settings -->
                        <h6 class="section-label mb-1 mt-2">Settings</h6>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="check-square" class="me-75 font-medium-3"></i>
                                    <span class="align-middle">Two-step Verification</span>
                                </div>
                                <div class="form-check form-switch me-0">
                                    <input type="checkbox" class="form-check-input" id="customSwitch1" checked />
                                    <label class="form-check-label" for="customSwitch1"></label>
                                </div>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-1">
                                <div class="d-flex align-items-center">
                                    <i data-feather="bell" class="me-75 font-medium-3"></i>
                                    <span class="align-middle">Notification</span>
                                </div>
                                <div class="form-check form-switch me-0">
                                    <input type="checkbox" class="form-check-input" id="customSwitch2" />
                                    <label class="form-check-label" for="customSwitch2"></label>
                                </div>
                            </li>
                            <li class="mb-1 d-flex align-items-center cursor-pointer">
                                <i data-feather="user" class="me-75 font-medium-3"></i>
                                <span class="align-middle">Invite Friends</span>
                            </li>
                            <li class="d-flex align-items-center cursor-pointer">
                                <i data-feather="trash" class="me-75 font-medium-3"></i>
                                <span class="align-middle">Delete Account</span>
                            </li>
                        </ul>
                        <!--/ User settings -->

                        <!-- Logout Button -->
                        <div class="mt-3">
                            <button class="btn btn-primary">
                                <span>Logout</span>
                            </button>
                        </div>
                        <!--/ Logout Button -->
                    </div> --}}
                    <!-- User Details end -->
                </div>
                <!--/ Admin user profile area -->

                <!-- Chat Sidebar area -->
                <div class="sidebar-content">
                    <span class="sidebar-close-icon">
                        <i data-feather="x"></i>
                    </span>
                    <!-- Sidebar header start -->
                    <div class="chat-fixed-search">
                        <div class="d-flex align-items-center w-100">
                            <div class="sidebar-profile-toggle">
                                <div class="avatar avatar-border">
                                    <img src="{{getUserProfileImage(auth()->user()->img)}}" alt="user_avatar"
                                        height="42" width="42" />
                                    <span class="avatar-status-online"></span>
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
                            <a href="{{route('creator.chats.show', $task->id)}}">
                                <li>
                                    <span class="avatar"><img src="{{getUserProfileImage($task->client->img)}}"
                                            height="42" width="42" alt="Generic placeholder image" />
                                        <span class="avatar-status-offline"></span>
                                    </span>
                                    <div class="chat-info flex-grow-1">
                                        <h5 class="mb-0">{{$task->client->name}}</h5>
                                        <p class="card-text text-truncate">
                                            {{__('messages.order_number')}} : {{$task->getTaskKey()}}
                                        </p>
                                    </div>
                                    <div class="chat-meta text-nowrap">
                                        {{-- <small class="float-end mb-25 chat-time">4:14 PM</small> --}}
                                        {{-- <span class="badge bg-danger rounded-pill float-end">3</span> --}}
                                    </div>
                                </li>
                            </a>
                            @endforeach
                        </ul>

                    </div>
                    <!-- Sidebar Users end -->
                </div>
                <!--/ Chat Sidebar area -->

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="body-content-overlay"></div>
                    <!-- Main chat area -->
                    <section class="chat-app-window">
                        <!-- To load Conversation -->
                        <div class="start-chat-area d-none">
                            <div class="mb-1 start-chat-icon">
                                <i data-feather="message-square"></i>
                            </div>
                            <h4 class="sidebar-toggle start-chat-text">{{__('messages.start_conversation')}}</h4>
                        </div>
                        <!--/ To load Conversation -->

                        <!-- Active Chat -->
                        <div class="active-chat ">
                            <!-- Chat Header -->
                            <div class="chat-navbar">
                                <header class="chat-header">
                                    <div class="d-flex align-items-center">
                                        <div class="sidebar-toggle d-block d-lg-none me-1">
                                            <i data-feather="menu" class="font-medium-5"></i>
                                        </div>
                                        <div class="avatar avatar-border user-profile-toggle m-0 me-1">
                                            <img src="{{getUserProfileImage($data['taskChat']->client->img)}}" alt="avatar"
                                                height="36" width="36" />
                                            <span class="avatar-status-busy"></span>
                                        </div>
                                        <h6 class="mb-0">{{$data['taskChat']->client->name}}</h6>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i data-feather="eye"
                                            class="cursor-pointer d-sm-block d-none font-medium-2 me-1 user-profile-toggle"></i>
                                        {{-- <i data-feather="video"
                                            class="cursor-pointer d-sm-block d-none font-medium-2 me-1"></i>
                                        <i data-feather="search"
                                            class="cursor-pointer d-sm-block d-none font-medium-2"></i>
                                        <div class="dropdown">
                                            <button
                                                class="btn-icon btn btn-transparent hide-arrow btn-sm dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i data-feather="more-vertical" id="chat-header-actions"
                                                    class="font-medium-2"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="chat-header-actions">
                                                <a class="dropdown-item" href="#">View Contact</a>
                                                <a class="dropdown-item" href="#">Mute Notifications</a>
                                                <a class="dropdown-item" href="#">Block Contact</a>
                                                <a class="dropdown-item" href="#">Clear Chat</a>
                                                <a class="dropdown-item" href="#">Report</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </header>
                            </div>
                            <!--/ Chat Header -->

                            <!-- User Chat messages -->
                            <div class="user-chats" id="chats">
                                <div class="chats" >
                                    @if(isset($data['messages']))
                                    @foreach ($data['messages'] as $message )
                                    @if($message->sendByMe()==true)
                                    <div class="chat chat-left">
                                        <div class="chat-avatar">
                                            <span class="avatar box-shadow-1 cursor-pointer">
                                                <img src="{{getUserProfileImage($message->user->img)}}" alt="avatar"
                                                    height="36" width="36" />
                                            </span>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>{{$message->content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif(isset($message->user) && $message->sendByMe()==false)
                                    <div class="chat">
                                        <div class="chat-avatar">
                                            <span class="avatar box-shadow-1 cursor-pointer">
                                                <img src="{{getUserProfileImage($message->user->img)}}" alt="avatar"
                                                    height="36" width="36" />
                                            </span>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>{{$message->content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif($message->sendByMe()==null)
                                    <div class="divider">
                                        <div class="divider-text">{{$message->content}}</div>
                                    </div>
                                    @endif
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <!-- User Chat messages -->

                            <!-- Submit Chat form -->
                            @if($data['taskChat']->task_status_id!=3)
                                <form class="chat-app-form" action="{{route('creator.chats.store')}}" method="post">
                                    @csrf
                                    <div class="input-group input-group-merge me-1 form-send-message">
                                        {{-- <span class="speech-to-text input-group-text"><i data-feather="mic"
                                                class="cursor-pointer"></i></span> --}}
                                        <input type="text" class="form-control message" id="content" name="content"
                                            placeholder="{{__('messages.type_your_message')}}" />
                                        <input type="hidden" class="form-control message" id="task_id" name="task_id"
                                            value="{{$data['taskChat']->id}}" />
                                        <span class="input-group-text">
                                            <label for="attach-doc" class="attachment-icon form-label mb-0">
                                                <input type="file" id="attach-doc" hidden /> </label></span>
                                    </div>
                                    <button type="submit" class="btn btn-primary send">
                                        <i data-feather="send" class="d-lg-none"></i>
                                        <span class="d-none d-lg-block">{{__('messages.send')}}</span>
                                    </button>
                                </form>
                            @endif
                            <!--/ Submit Chat form -->
                        </div>
                        <!--/ Active Chat -->
                    </section>
                    <!--/ Main chat area -->

                    <!-- User Chat profile right area -->
                    <div class="user-profile-sidebar">
                        <header class="user-profile-header">
                            <span class="close-icon">
                                <i data-feather="x"></i>
                            </span>
                            <!-- User Profile image with name -->
                            <div class="header-profile-sidebar">
                                <div class="avatar box-shadow-1 avatar-border avatar-xl">
                                    <img src="{{asset('users-asset')}}/images/portrait/small/avatar-s-7.jpg"
                                        alt="user_avatar" height="70" width="70" />
                                    <span class="avatar-status-busy avatar-status-lg"></span>
                                </div>
                                <h4 class="chat-user-name">Kristopher Candy</h4>
                                <span class="user-post">UI/UX Designer 👩🏻‍💻</span>
                            </div>
                            <!--/ User Profile image with name -->
                        </header>
                        <div class="user-profile-sidebar-area">
                            <!-- About User -->
                            <h6 class="section-label mb-1">About</h6>
                            <p>Toffee caramels jelly-o tart gummi bears cake I love ice cream lollipop.</p>
                            <!-- About User -->
                            <!-- User's personal information -->
                            <div class="personal-info">
                                <h6 class="section-label mb-1 mt-3">Personal Information</h6>
                                <ul class="list-unstyled">
                                    <li class="mb-1">
                                        <i data-feather="mail" class="font-medium-2 me-50"></i>
                                        <span class="align-middle">kristycandy@email.com</span>
                                    </li>
                                    <li class="mb-1">
                                        <i data-feather="phone-call" class="font-medium-2 me-50"></i>
                                        <span class="align-middle">+1(123) 456 - 7890</span>
                                    </li>
                                    <li>
                                        <i data-feather="clock" class="font-medium-2 me-50"></i>
                                        <span class="align-middle">Mon - Fri 10AM - 8PM</span>
                                    </li>
                                </ul>
                            </div>
                            <!--/ User's personal information -->

                            <!-- User's Links -->
                            <div class="more-options">
                                <h6 class="section-label mb-1 mt-3">Options</h6>
                                <ul class="list-unstyled">
                                    <li class="cursor-pointer mb-1">
                                        <i data-feather="tag" class="font-medium-2 me-50"></i>
                                        <span class="align-middle">Add Tag</span>
                                    </li>
                                    <li class="cursor-pointer mb-1">
                                        <i data-feather="star" class="font-medium-2 me-50"></i>
                                        <span class="align-middle">Important Contact</span>
                                    </li>
                                    <li class="cursor-pointer mb-1">
                                        <i data-feather="image" class="font-medium-2 me-50"></i>
                                        <span class="align-middle">Shared Media</span>
                                    </li>
                                    <li class="cursor-pointer mb-1">
                                        <i data-feather="trash" class="font-medium-2 me-50"></i>
                                        <span class="align-middle">Delete Contact</span>
                                    </li>
                                    <li class="cursor-pointer">
                                        <i data-feather="slash" class="font-medium-2 me-50"></i>
                                        <span class="align-middle">Block Contact</span>
                                    </li>
                                </ul>
                            </div>
                            <!--/ User's Links -->
                        </div>
                    </div>
                    <!--/ User Chat profile right area -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->



@endsection
@section('script')

<!-- BEGIN: Vendor JS-->
<script src="{{asset('users-asset')}}/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('users-asset')}}/vendors/js/ui/jquery.sticky.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('users-asset')}}/js/core/app-menu.js"></script>
<script src="{{asset('users-asset')}}/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('users-asset')}}/js/scripts/pages/app-chat.js"></script>

<script>
    window.onload = function() {
        var chatContainer = document.getElementById('chats');
        chatContainer.scrollTop = chatContainer.scrollHeight;
    };
</script>

@endsection
