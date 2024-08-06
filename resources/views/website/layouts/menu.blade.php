

<nav class="navbar sticky-lg-top navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset('users-asset/images/logo/logo.png')}}" alt="logo"
             class="vidoo_logo img-fluid" height="50" width="100">
        </a>
      <button class="navbar-toggler" type="button" onclick="toggleNav()" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
     
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{checkActiveRoute('home')}}" aria-current="page"
                    href="{{route('home')}}">{{__('website.home')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{checkActiveRoute('price')}} " aria-current="page"
                    href="{{route('price')}}">{{__('website.pricing')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{checkActiveRoute('agencies')}} " aria-current="page"
                    href="{{route('agencies')}}">{{__('website.forAgencies')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{checkActiveRoute('ecommerce')}} " aria-current="page"
                    href="{{route('ecommerce')}}">{{__('website.ecommerce')}}</a>
            </li>

            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}


        </ul>
        <div class="d-md-flex align-items-center">
            <span class="navbar-text mx-4 fw-bold my-md-0 my-2"> 
                login
              </span>
          <button class="btn log-in-button my-md-0 my-2" type="submit"> ابدأ الان</button>
        </div>
      </div>
    </div>
  </nav>