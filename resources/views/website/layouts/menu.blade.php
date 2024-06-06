<nav class="navbar navbar-expand-lg navbar-light bg-light custom-menu">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('users-asset/images/logo/logo.png')}}" alt="logo" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">{{__('website.home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{route('price')}}">{{__('website.pricing')}}</a>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}

            </ul>
            <div class="d-flex">

                <a class="btn btn-flat-primary waves-effect mr-3 ml-3" href="{{route('creator.register')}}"
                    role="button">{{__('website.becomeACreator')}}</a>
                <a class="btn btn-flat-primary waves-effect mr-3 ml-3" href="{{route('user.login')}}"
                    role="button">{{__('website.login')}}</a>
                <a class="btn btn-relief-primary mr-3 ml-3" href="#" role="button">{{__('website.orderNow')}}</a>
            </div>

        </div>
    </div>
</nav>