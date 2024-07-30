<div class="col-md-3 col-sm-12">
    <div class="card">

        <div class="card-body">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link {{checkActiveRoute('client.profile')}} " id="stacked-pill-1"
                        href="{{route('client.profile')}}" aria-expanded="true">
                        <i class="me-50"
                        data-feather="user"></i>
                        {{__('messages.Settings')}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{checkActiveRoute('client.change.password')}} " id="stacked-pill-1"
                        href="{{route('client.change.password')}}" aria-expanded="true">
                        <i class="me-50"
                        data-feather="settings"></i>
                        {{__('messages.changePassword')}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{checkActiveRoute('client.wallet.transactions')}} " id="stacked-pill-1"
                        href="{{route('client.wallet.transactions')}}" aria-expanded="true">
                        <i class="me-50"
                        data-feather="credit-card"></i>
                        {{__('messages.wallet')}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{checkActiveRoute('user.logout')}} " id="stacked-pill-1"
                        href="{{route('user.logout')}}" aria-expanded="true">
                        <i class="me-50"
                        data-feather="power"></i>
                        {{__('messages.logout')}}
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
