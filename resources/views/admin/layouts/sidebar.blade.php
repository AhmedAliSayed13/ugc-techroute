<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{asset('assets/images/users/user.png')}}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">Setting management</li>

                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        {{-- <span class="badge bg-info rounded-pill float-end">4</span> --}}
                        <span> Dashboard </span>
                    </a>

                </li>
                <li>
                    <a href="#Roles" data-bs-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        {{-- <span class="badge bg-info rounded-pill float-end">4</span> --}}
                        <span> Roles </span>
                    </a>
                    <div class="collapse" id="Roles">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.roles.create')}}">Create Role</a>
                            </li>
                            <li>
                                <a href="{{route('admin.roles.index')}}">List Roles</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#users" data-bs-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        {{-- <span class="badge bg-info rounded-pill float-end">4</span> --}}
                        <span> Users </span>
                    </a>
                    <div class="collapse" id="users">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.users.creator.create')}}">Create Creator </a>
                            </li>
                            <li>
                                <a href="{{route('admin.users.client.create')}}">Create Client </a>
                            </li>
                            <li>
                                <a href="{{route('admin.users.index')}}">List Users</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#mainOptions" data-bs-toggle="collapse">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        {{-- <span class="badge bg-info rounded-pill float-end">4</span> --}}
                        <span> Options </span>
                    </a>
                    <div class="collapse" id="mainOptions">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.main-options.create')}}">Create  Option </a>
                            </li>

                            <li>
                                <a href="{{route('admin.main-options.index')}}">List  Options</a>
                            </li>

                        </ul>
                    </div>
                </li>



            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
