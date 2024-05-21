@extends('layouts.master')
@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            {{-- <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-soft-secondary border-secondary border">
                                    <i class="d-flex fas fa-mobile-alt font-22 avatar-title text-secondary"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$data['Ads']}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Ads</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}


            {{-- <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                    <i class="d-flex fas fa-clock font-22 avatar-title text-success"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$data['AdsToday']}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Ads Today</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                    <i class="d-flex fas fa-rss font-22 avatar-title text-primary"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$data['MarketingServiceTypes']}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                    <i class="fe-users font-22 avatar-title text-info"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$data['Users']}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Users</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div>

            {{-- <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                    <i class="fe-user font-22 avatar-title text-warning"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$data['Customers']}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Customers</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> --}}

            {{-- <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                    <i class="d-flex fas fa-user-shield font-22 avatar-title text-danger"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$data['Roles']}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Roles</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> --}}
{{--
            <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-soft-dark border-dark border">
                                    <i class="fe-flag font-22 avatar-title text-dark"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$data['Emirate']}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Emirates</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> --}}


            {{-- <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-soft-blue border-blue border">
                                    <i class=" d-flex fas fa-file font-22 avatar-title text-blue"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$data['Contracts']}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Contracts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="col-md-4 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="avatar-lg rounded-circle bg-soft-pink border-pink border">
                                    <i class=" d-flex fas fa-file font-22 avatar-title text-pink"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$data['ContractTypes']}}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Contract Types</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}





        </div>
    </div>
@endsection
