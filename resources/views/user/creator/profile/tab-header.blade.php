<ul class="nav nav-pills mb-2">

    <li class="nav-item">
        <a class="nav-link {{checkActiveRoute('creator.profile')}}" href="{{route('creator.profile')}}">
            <i data-feather="alert-circle" class="font-medium-3 me-50"></i>

            <span class="fw-bold">{{__('messages.myAccountDetails')}}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{checkActiveRoute('creator.feature.videos')}}" href="{{route('creator.feature.videos')}}">
            <i data-feather="video" class="font-medium-3 me-50"></i>

            <span class="fw-bold">الفديوهات المميزه</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{checkActiveRoute('creator.options')}}" href="{{route('creator.options')}}">
            <i data-feather="list" class="font-medium-3 me-50"></i>
            <span class="fw-bold">الخصائص </span>
        </a>
    </li>

</ul>