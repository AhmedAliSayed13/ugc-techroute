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
<link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">

@endsection
@section('content')

<!-- BEGIN: Content-->
<div class=" content chat-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper container-xxl p-0">
        <div class="sidebar-left">
            <div class="sidebar">


                <!-- Chat Sidebar area -->
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
                    @include('user.creator.chat.templates.sidebar')
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
                        <div class="start-chat-area">
                            <div class="mb-1 start-chat-icon">
                                <i data-feather="message-square"></i>
                            </div>
                            <h4 class="sidebar-toggle start-chat-text">{{__('messages.start_conversation')}}</h4>
                        </div>
                        <!--/ To load Conversation -->


                    </section>
                    <!--/ Main chat area -->



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
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
@endsection
