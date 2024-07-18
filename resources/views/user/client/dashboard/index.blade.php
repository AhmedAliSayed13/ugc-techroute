@extends('user.client.layouts.master')
@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        {{-- <div class="content-header row">
            <x-breadcrumb_user :section="__('messages.Dashboards')" :sectionUrl="route('client.dashboard')"
                :title="__('messages.Dashboards')" />
        </div> --}}
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-12">
                    <div class="card card-statistics">
                        <div class="card-header">
                            <h4 class="card-title">{{__('messages.Statistics')}}</h4>
                            {{-- <div class="d-flex align-items-center">
                                <p class="card-text font-small-2 me-25 mb-0">Updated 1 month ago</p>
                            </div> --}}
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
                                            <h4 class="fw-bolder mb-0">{{count($data['orders'])}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{__('messages.order_count')}}</p>
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
                                            <h4 class="fw-bolder mb-0">{{count($data['orders']->where('status',6))}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{__('messages.order_complete_count')}}</p>
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
                                            <h4 class="fw-bolder mb-0">{{count($data['orders']->whereIn('status',[4,5]))}}</h4>
                                            <p class="card-text font-small-3 mb-0">{{__('messages.order_in_process_count')}}</p>
                                        </div>
                                    </div>
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
