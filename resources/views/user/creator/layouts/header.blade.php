<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center"
    data-nav="brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a class="navbar-brand"
                    href="{{route('home')}}"><span class="brand-logo">
                        <img src="{{asset('users-asset/images/logo/logo-2.png')}}" alt="logo"
                            style="max-width: 100px!important">
                </a></li>
        </ul>
    </div>
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">


            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon"
                            data-feather="menu"></i></a></li>
            </ul>

            <ul class="nav navbar-nav bookmark-icons">

                <a href="{{route('creator.tasks.index')}}" class="btn  btn-relief-primary">{{__('messages.tasks')}}
                    <i data-feather='list'></i>
                </a>
            </ul>


        </div>

        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-language"><a class="nav-link dropdown-toggle" id="dropdown-flag"
                    href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                        href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a
                        class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i>
                        French</a></div>
            </li>

            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                        data-feather="moon"></i></a></li>



            <li class="nav-item  me-25"><a class="nav-link" href="{{route('creator.chats.index')}}"
                ><i class="ficon" data-feather="message-circle"></i>
                @if(getCountUnReadMessages()>0)
                    <span class="badge rounded-pill bg-danger badge-up">{{getCountUnReadMessages()}}</span>
                @endif
                </a>
            </li>

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span
                            class="user-name fw-bolder">{{auth()->user()->name}}</span><span
                            class="user-status">{{__('messages.creator')}}</span></div><span class="avatar"><img
                            class="round" src="{{getUserProfileImage(auth()->user()->img)}}"
                            alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">

                    <a class="dropdown-item" href="{{route('creator.profile')}}"><i class="me-50"
                            data-feather="user"></i>
                        {{__('messages.Settings')}}
                    </a>
                    <a class="dropdown-item" href="{{route('creator.transactions.index')}}"><i class="me-50"
                            data-feather="credit-card"></i>
                        {{__('messages.wallet')}}
                        <span>
                                <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                <span class="pricing-enterprise-value fw-bolder text-primary">{{Auth::user()->wallet(1)->balance}}</span>
                        </span>
                    </a>
                    <a class="dropdown-item" href="{{route('creator.change.password')}}"><i class="me-50"
                            data-feather="settings"></i>
                        {{__('messages.changePassword')}}
                    </a>
                    <a class="dropdown-item" href="{{route('user.logout')}}"><i class="me-50" data-feather="power"></i>
                        {{__('messages.logout')}}</a>
                </div>
            </li>

        </ul>
    </div>
</nav>
{{-- <ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Files</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('users-asset/images/icons/xls.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
                        Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('users-asset/images/icons/jpg.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('users-asset/images/icons/pdf.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
                        Marketing Manager</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100"
            href="app-file-manager.html">
            <div class="d-flex">
                <div class="me-75"><img src="{{asset('users-asset/images/icons/doc.png')}}" alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                </div>
            </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
        </a></li>
    <li class="d-flex align-items-center"><a href="#">
            <h6 class="section-label mt-75 mb-0">Members</h6>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('users-asset/images/portrait/small/avatar-s-8.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('users-asset/images/portrait/small/avatar-s-1.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
                        Developer</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('users-asset/images/portrait/small/avatar-s-14.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing
                        Manager</small>
                </div>
            </div>
        </a></li>
    <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100"
            href="app-user-view-account.html">
            <div class="d-flex align-items-center">
                <div class="avatar me-75"><img src="{{asset('users-asset/images/portrait/small/avatar-s-6.jpg')}}"
                        alt="png" height="32"></div>
                <div class="search-data">
                    <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                </div>
            </div>
        </a></li>
</ul>
<ul class="main-search-list-defaultlist-other-list d-none">
    <li class="auto-suggestion justify-content-between"><a
            class="d-flex align-items-center justify-content-between w-100 py-50">
            <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No
                    results found.</span></div>
        </a></li>
</ul> --}}
<!-- END: Header-->
