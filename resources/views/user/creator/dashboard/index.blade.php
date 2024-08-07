@extends('user.creator.layouts.master')
@section('content')
<div class="container-fluid mt-4">
    <div class="row">


        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    <div>
                        {{-- <h2 class="fw-bolder mb-0">$ {{Auth::user()->wallet(1)->balance}} </h2> --}}
                        <h2 class="fw-bolder mb-0">
                            <div class="plan-price mt-2">
                                <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                <span class="pricing-enterprise-value fw-bolder text-primary">{{Auth::user()->wallet(1)->balance}}</span>
                            </div>
                        </h2>
                        <p class="card-text">{{__('messages.wallet')}}</p>
                    </div>
                    <div class="avatar bg-light-warning p-50 m-0">
                        <div class="avatar-content">
                            <i data-feather='credit-card'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <h4 class="card-title">{{__('messages.Statistics')}}</h4>
                </div>
                <div class="card-body statistics-body">


                    <div class="row">
                        <div class="col-xl-4 col-sm-4 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-primary me-2">
                                    <div class="avatar-content">
                                        <i data-feather='box' class="font-medium-3 "></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{$data['tasks_count']}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('messages.tasks_count')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-4 col-12 mb-2 mb-xl-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-info me-2">
                                    <div class="avatar-content">
                                        <i data-feather='box' class="font-medium-3 "></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{$data['tasks_complete_count']}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('messages.tasks_complete_count')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-4 col-12 mb-2 mb-sm-0">
                            <div class="d-flex flex-row">
                                <div class="avatar bg-light-danger me-2">
                                    <div class="avatar-content">
                                        <i data-feather='box' class="font-medium-3 "></i>
                                    </div>
                                </div>
                                <div class="my-auto">
                                    <h4 class="fw-bolder mb-0">{{$data['tasks_in_process_count']}}</h4>
                                    <p class="card-text font-small-3 mb-0">{{__('messages.tasks_in_process_count')}}</p>
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
