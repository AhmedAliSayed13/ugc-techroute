<ul class="nav nav-pills mb-2">

    <li class="nav-item">
        <a class="nav-link {{checkActiveRoute('client.my-orders.show')}}"
            href="{{route('client.my-orders.show',$data['order']->id)}}">
            <i data-feather="alert-circle" class="font-medium-3 me-50"></i>

            <span class="fw-bold">{{__('messages.brief')}}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{checkActiveRoute('client.my-orders.creators')}}"
            href="{{route('client.my-orders.creators',$data['order']->id)}}">
            <i data-feather="user-plus" class="font-medium-3 me-50"></i>

            <span class="fw-bold">{{__('messages.creators')}}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{checkActiveRoute('creator.options')}}" href="{{route('creator.options')}}">
            <i data-feather="video" class="font-medium-3 me-50"></i>

            <span class="fw-bold">{{__('messages.order_delivery')}}</span>
        </a>
    </li>

</ul>
