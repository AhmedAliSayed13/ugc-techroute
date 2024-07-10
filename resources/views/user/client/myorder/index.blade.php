@extends('user.client.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
@endsection
{{-- @section('breadcrumb')

@endsection --}}

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('client.my-orders.index')"
                :title="__('messages.myOrders')" />
        </div>

        <div class="content-body">
            <div class="container-fluid mt-4">
                <div class="row">

                    <div class="row">
                        <div class="col-12">



                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('messages.myOrders')}}</h4>
                                </div>
                                <div class="card-body py-2 my-25">





                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>{{__('messages.order_key')}}</th>
                                                    <th>{{__('messages.video_count')}}</th>
                                                    <th>{{__('messages.totalPrice')}}</th>
                                                    <th>{{__('messages.paid')}}</th>
                                                    <th>{{__('messages.status')}}</th>
                                                    <th>{{__('messages.RequestsCount')}}</th>
                                                    <th>{{__('messages.actions')}}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data['orders'] as $order)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$order->key}}</td>
                                                    <td>{{$order->video_count}}</td>
                                                    <td>{{$order->total}}</td>
                                                    <td>
                                                        @if($order->paid==1)
                                                        <span
                                                            class="badge rounded-pill badge-light-success me-1">{{__('messages.paid')}}</span>
                                                        @else
                                                        <span
                                                            class="badge rounded-pill badge-light-danger me-1">{{__('messages.not_paid')}}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if($order->status>=4)
                                                        <span
                                                            class="badge rounded-pill badge-light-success me-1">{{$order->orderStatus->name}}</span>
                                                        @else
                                                        <span
                                                            class="badge rounded-pill badge-light-danger me-1">{{$order->orderStatus->name}} </span>
                                                        @endif
                                                    </td>

                                                    <td>{{$order->orderRequests->count()}}</td>
                                                    <td>
                                                        <a type="button" class="btn  btn-success " href="{{route('client.my-orders.show',$order->id)}}">
                                                            <i data-feather="eye"> </i> {{__('messages.view')}}
                                                        </a>
                                                        @if($order->status<4)
                                                        <a type="button" class="btn btn-primary " href="{{route('client.my-orders.edit',$order->id)}}">
                                                            <i data-feather="edit"></i>  {{__('messages.continues')}}
                                                        </a>
                                                        {{-- @else
                                                        <a type="button" class="btn btn-sm btn-info " href="{{route('client.my-orders.requests.review',$order->id)}}">
                                                            <i data-feather="users"></i>
                                                        </a> --}}
                                                        @endif

                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    {{ $data['orders']->links('pagination::bootstrap-4') }}
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
