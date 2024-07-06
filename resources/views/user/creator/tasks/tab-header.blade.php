<ul class="nav nav-pills mb-2">

    <li class="nav-item">
        <a class="nav-link {{checkActiveRoute('creator.tasks.show')}}"
            href="{{route('creator.tasks.show',$data['task']->id)}}">
            <i data-feather="alert-circle" class="font-medium-3 me-50"></i>

            <span class="fw-bold">{{__('messages.brief')}}</span>
        </a>
    </li>
    {{-- <li class="nav-item">
        <a class="nav-link {{checkActiveRoute('creator.tasks.delivery')}}" href="{{route('creator.tasks.delivery',$data['order']->id)}}">
            <i data-feather="video" class="font-medium-3 me-50"></i>

            <span class="fw-bold">{{__('messages.order_delivery')}}</span>
        </a>
    </li> --}}

</ul>
