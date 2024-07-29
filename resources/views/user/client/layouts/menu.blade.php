<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border container-xxl" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand" href="{{route('home')}}"><span class="brand-logo">
                            <img src="{{asset('users-asset/images/logo/logo-2.png')}}" alt="logo">
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item {{checkActiveRoute('client.dashboard')}}" >
                   <a class=" nav-link d-flex align-items-center" href="{{route('client.dashboard')}}" ><i data-feather="home">
                        </i><span data-i18n="Dashboards">{{__('messages.Dashboards')}}</span></a>
                </li>
                <li class="dropdown nav-item {{checkActiveRoute('client.my-orders.index')}}" >
                   <a class=" nav-link d-flex align-items-center" href="{{route('client.my-orders.index')}}" ><i data-feather="shopping-bag">
                        </i><span data-i18n="Dashboards">{{__('messages.myOrders')}}</span></a>
                </li>
                <li class="dropdown nav-item {{checkActiveRoute('client.videos')}}" >
                   <a class=" nav-link d-flex align-items-center" href="{{route('client.videos')}}" ><i data-feather="video">
                        </i><span data-i18n="Dashboards">{{__('messages.videos')}}</span></a>
                </li>
                <li class="dropdown nav-item {{checkActiveRoute('client.creators')}}" >
                   <a class=" nav-link d-flex align-items-center" href="{{route('client.creators')}}" ><i data-feather="users">
                        </i><span data-i18n="Dashboards">{{__('messages.creators')}}</span></a>
                </li>
                <li class="dropdown nav-item {{checkActiveRoute('client.shippings.index')}}" >
                   <a class=" nav-link d-flex align-items-center" href="{{route('client.shippings.index')}}" ><i data-feather="gift">
                        </i><span data-i18n="Dashboards">{{__('messages.shippings')}}</span></a>

                </li>


            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->
