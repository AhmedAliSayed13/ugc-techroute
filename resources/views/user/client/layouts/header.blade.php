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

                <a href="{{route('client.order.details')}}" class="btn  btn-relief-primary mr-1 ">{{__('messages.orderNow')}}</a>

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

            {{-- <li class="nav-item "><a class="nav-link nav-link-style"><i class="ficon"
                        data-feather="moon"></i>
                        <span class="badge rounded-pill bg-danger badge-up">{{getCountUnReadMessages()}}</span>
                    </a>

                    </li> --}}

            {{-- <li class="nav-item dropdown dropdown-cart me-25"><a class="nav-link" href="#" data-bs-toggle="dropdown"><i
                        class="ficon" data-feather="shopping-cart"></i><span
                        class="badge rounded-pill bg-primary badge-up cart-item-count">6</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-end">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header d-flex">
                            <h4 class="notification-title mb-0 me-auto">My Cart</h4>
                            <div class="badge rounded-pill badge-light-primary">4 Items</div>
                        </div>
                    </li>
                    <li class="scrollable-container media-list">
                        <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                src="{{asset('users-asset/images/pages/eCommerce/1.png')}}" alt="donuts" width="62">
                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                    data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html">
                                            Apple watch 5</a></h6><small class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="1">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$374.90</h5>
                            </div>
                        </div>
                        <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                src="{{asset('users-asset/images/pages/eCommerce/7.png')}}" alt="donuts" width="62">
                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                    data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html">
                                            Google Home Mini</a></h6><small class="cart-item-by">By Google</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="3">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$129.40</h5>
                            </div>
                        </div>
                        <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                src="{{asset('users-asset/images/pages/eCommerce/2.png')}}" alt="donuts" width="62">
                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                    data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html">
                                            iPhone 11 Pro</a></h6><small class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="2">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$699.00</h5>
                            </div>
                        </div>
                        <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                src="{{asset('users-asset/images/pages/eCommerce/3.png')}}" alt="donuts" width="62">
                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                    data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html">
                                            iMac Pro</a></h6><small class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="1">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$4,999.00</h5>
                            </div>
                        </div>
                        <div class="list-item align-items-center"><img class="d-block rounded me-1"
                                src="{{asset('users-asset/images/pages/eCommerce/5.png')}}" alt="donuts" width="62">
                            <div class="list-item-body flex-grow-1"><i class="ficon cart-item-remove"
                                    data-feather="x"></i>
                                <div class="media-heading">
                                    <h6 class="cart-item-title"><a class="text-body" href="app-ecommerce-details.html">
                                            MacBook Pro</a></h6><small class="cart-item-by">By Apple</small>
                                </div>
                                <div class="cart-item-qty">
                                    <div class="input-group">
                                        <input class="touchspin-cart" type="number" value="1">
                                    </div>
                                </div>
                                <h5 class="cart-item-price">$2,999.00</h5>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-menu-footer">
                        <div class="d-flex justify-content-between mb-1">
                            <h6 class="fw-bolder mb-0">Total:</h6>
                            <h6 class="text-primary fw-bolder mb-0">$10,999.00</h6>
                        </div><a class="btn btn-primary w-100" href="app-ecommerce-checkout.html">Checkout</a>
                    </li>
                </ul>
            </li> --}}

            <li class="nav-item  me-25">
                <a class="nav-link" href="{{route('client.chats.index')}}">
                    <i class="ficon" data-feather="message-circle"></i>
                    @if(getCountUnReadMessages()>0)
                    <span class="badge rounded-pill bg-danger badge-up">{{getCountUnReadMessages()}}</span>
                    @endif
                </a>

            </li>

            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span
                            class="user-name fw-bolder">{{auth()->user()->name}}</span><span
                            class="user-status">{{__('messages.client')}}</span></div><span class="avatar"><img
                            class="round" src="{{getUserProfileImage(auth()->user()->img)}}" alt="avatar" height="40"
                            width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    {{-- <a class="dropdown-item" href="page-profile.html"><i class="me-50" data-feather="user"></i>
                        Profile
                    </a>

                    <a class="dropdown-item" href="app-email.html"><i class="me-50" data-feather="mail"></i>
                        Inbox
                    </a>
                    <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item" href="{{route('client.profile')}}"><i class="me-50"
                            data-feather="user"></i>
                        {{__('messages.Settings')}}
                    </a>
                    <a class="dropdown-item" href="{{route('client.change.password')}}"><i class="me-50"
                            data-feather="settings"></i>
                        {{__('messages.changePassword')}}
                    </a>
                    <a class="dropdown-item" href="{{route('client.wallet.topup')}}"><i class="me-50"
                            data-feather="plus-circle"></i>
                        {{__('messages.topUpWallet')}}
                    </a>
                    <a class="dropdown-item" href="{{route('user.logout')}}"><i class="me-50" data-feather="power"></i>
                        {{__('messages.logout')}}</a>
                </div>
            </li>

        </ul>
    </div>
</nav>


<!-- END: Header-->
