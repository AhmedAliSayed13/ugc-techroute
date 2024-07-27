@extends('user.creator.layouts.master')
@section('content')


<div class="row">
    @if(isset($data['shippings']) && count($data['shippings'])>0)
    <div class="accordion accordion-margin mt-2" id="faq-payment-qna">
        @foreach ($data['shippings'] as $shipping)

        <div class="card accordion-item">
            <h2 class="accordion-header" id="item{{$shipping->id}}">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                    data-bs-target="#shipping{{$shipping->id}}" aria-expanded="false"
                    aria-controls="shipping{{$shipping->id}}">
                    {{__('messages.order_key')}}: {{ $shipping->task->getTaskKey() }} <span
                        class="m-1 text-primary font-12"><i data-feather='chevron-right'></i></span>
                    {{__('messages.product')}}: {{ $shipping->order->product_name }}

                </button>
            </h2>
            <div id="shipping{{$shipping->id}}" class="collapse accordion-collapse"
                aria-labelledby="item{{$shipping->id}}" data-bs-parent="#faq-payment-qna">
                <div class="accordion-body">

                    <div class="row">
                        <div class="col-12 col-sm-12 mb-1">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>{{__('messages.shipping_key')}}</td>
                                            <td>{{$shipping->key}}</td>
                                        </tr>

                                        <tr>
                                            <td>{{__('messages.tracking_url')}}</td>
                                            <td><a href="{{$shipping->tracking}}" target="_blank">{{$shipping->tracking}}</a></td>
                                        </tr>
                                        <tr>
                                            <td>{{__('messages.order_details')}}</td>
                                            <td class="d-flex">
                                                {{__('messages.forShowOrderdetailsClickHere')}}

                                                <a class="icon-l" data-bs-toggle="offcanvas" data-bs-target="#taskDetails{{$shipping->task->id}}" aria-controls="task{{$shipping->task->id}}" >
                                                        <i  data-feather='list' class="text-primary icon-f-l  "></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>{{__('messages.shippings_instraction_title')}}</td>
                                            <td class="d-flex">
                                                {{__('messages.shippings_instraction_description')}}

                                                <a href="{{route('creator.chats.show', $shipping->task_id)}}" >
                                                    <div class="icon-wrapper">

                                                        <i data-feather='message-circle' class="text-primary me-1"></i>
                                                    </div>
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>

        <x-order_creator :task="$shipping->task" />
            {{-- <button class="btn btn-outline-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#taskDetails{{$shipping->task->id}}" aria-controls="task{{$shipping->task->id}}">
                Toggle End
            </button> --}}
        @endforeach

    </div>
    <p>
        {{$data['shippings']->appends(Request::except('page'))->links('pagination::bootstrap-4')}}

    </p>


    @else
    @include('widgets.wedgets_data_not_found')
    @endif
</div>




</div>
@endsection
