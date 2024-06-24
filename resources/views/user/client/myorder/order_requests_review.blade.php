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
                :title="__('messages.orderRequestsReview')" />
        </div>

        <div class="content-body">
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">{{__('messages.orderRequestsReview')}}</h4>
                            </div>
                            <div class="card-body pt-2">
                                <p>
                                    {{__('messages.pleaseSelect')}}
                                    {{$data['order']->video_count}}
                                    {{__('messages.creatorsOnly')}}
                                </p>

                                <!-- Connections -->
                                @foreach ($data['orderRequests'] as $orderRequest)
                                <div class="d-flex mt-2">
                                    <div class="flex-shrink-0">
                                        <img src="{{getUserProfileImage($orderRequest->creator->img)}}"
                                            alt="{{$orderRequest->creator->name}}" class="me-1" height="38" width="38">
                                    </div>
                                    <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                        <div class="me-1">
                                            <p class="fw-bolder mb-0">{{$orderRequest->creator->name}}</p>
                                            @if(isset($orderRequest->creator->creatorInfo->describe) &&
                                            !empty($orderRequest->creator->creatorInfo->describe))
                                            <span>{{$orderRequest->creator->creatorInfo->describe}} </span>
                                            @endif
                                            @if(isset($orderRequest->creator->creatorInfo) &&
                                            !empty($orderRequest->creator->creatorInfo))
                                            <span>{{$orderRequest->creator->creatorInfo->gender
                                                .' | '.$orderRequest->creator->creatorInfo->country->name}} </span>
                                            @endif
                                        </div>
                                        <div class="mt-50 mt-sm-0">
                                            <div class="form-check form-switch form-check-primary">
                                                <input type="checkbox" class="form-check-input" id="orderRequest{{$orderRequest->id}}"
                                                    checked="">
                                                <label class="form-check-label" for="orderRequest{{$orderRequest->id}}">
                                                    <span class="switch-icon-left"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-check">
                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                        </svg></span>
                                                    <span class="switch-icon-right"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-x">
                                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                                        </svg></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- /Connections -->
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
