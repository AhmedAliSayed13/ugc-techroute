@extends('user.creator.layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/pages/app-ecommerce.css')}}">
    <style>
        .ecommerce-application .list-view .ecommerce-card {
            grid-template-columns: 1fr 0.5fr !important;
        }

        .ibtn-wshlist.text-danger svg {
            fill: #EA5455;
        }

        .btn-wishlist.text-danger span {
            color: black !important;
        }

        .btn-send-request:hover {
            color: white !important;
        }
    </style>
@endsection

@section('content')

<div class=" content ecommerce-application">





    <div class="content-body">
        <!-- E-commerce Content Section Starts -->
        <section id="ecommerce-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="ecommerce-header-items">
                        <div class="result-toggler">
                            <button class="navbar-toggler shop-sidebar-toggler" type="button" data-bs-toggle="collapse">
                                <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
                            </button>
                            <div class="search-results">{{count($data['offers'])}}
                                {{__('messages.resultsFound')}}</div>
                        </div>
                        <div class="view-options d-flex">
                            <div class="btn-group dropdown-sort">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle me-1"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="active-sorting">{{__('messages.sort')}}</span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="?sort=asc">{{__('messages.newest')}}</a>
                                    <a class="dropdown-item" href="?sort=desc">{{__('messages.lowest')}}</a>

                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <input type="radio" class="btn-check" name="radio_options" id="radio_option1"
                                    autocomplete="off" checked />
                                <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn"
                                    for="radio_option1"><i data-feather="grid" class="font-medium-3"></i></label>
                                <input type="radio" class="btn-check" name="radio_options" id="radio_option2"
                                    autocomplete="off" />
                                <label class="btn btn-icon btn-outline-primary view-btn list-view-btn"
                                    for="radio_option2"><i data-feather="list" class="font-medium-3"></i></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- E-commerce Content Section Starts -->

        <!-- background Overlay when sidebar is shown  starts-->
        <div class="body-content-overlay"></div>
        <!-- background Overlay when sidebar is shown  ends-->



        <!-- E-commerce Products Starts -->
        <section id="ecommerce-products" class="grid-view">
            @foreach ($data['offers'] as $offer)
            <div class="card ecommerce-card">

                <div class="card-body">
                    <div class="item-wrapper">
                        <div class="item-rating">
                            <a href="{{$offer->product_link}}" target="_blank">{{$offer->product_name}}


                            </a>

                        </div>
                        <div>
                            {{-- @if(!$offer->hasUserSentRequest())
                            <h6 class="badge badge-glow bg-success">
                                {{__('messages.request_sent')}}
                            </h6>
                            @else
                            <a type="button" href="{{route('creator.offers.request.send', $offer->id)}}"
                                class="badge badge-glow bg-primary btn-send-request">
                                <i data-feather='plus-square'></i> {{__('messages.send_request')}}
                            </a>
                            @endif --}}



                            <a href="{{route('creator.offers.whitelist', $offer->id)}}"
                                title="{{__('messages.add_to_whitelist')}}"
                                class="badge badge-light-primary icon-l btn-wishlist">
                                <i class="@if($offer->hasWhitelist()) text-danger @endif" data-feather="heart"></i>
                            </a>
                            @if($offer->shipping)
                            <a title="{{__('messages.have_shipping')}}" class="badge badge-light-primary icon-l ">
                                <i data-feather="gift"></i>
                            </a>
                            @endif

                        </div>
                    </div>

                    <h6 class="item-name">


                        <p class="text-body">
                            <span>{{__('messages.country')}}:{{$offer->country->name}}</span>
                        </p>
                        <p class="text-body">
                            <span>{{__('messages.gender')}}:{{$offer->gender}}</span>
                        </p>
                        <p class="text-body">
                            <span>{{__('messages.order_price')}}: <b
                                    class="badge rounded-pill badge-light-primary">{{$offer->video_price}}$</b></span>
                        </p>
                        <p class="text-body">
                            @php \Carbon\Carbon::setLocale('ar') @endphp
                            <span>{{__('messages.publish_date')}}: {{$offer->created_at->diffForHumans()}}</span>
                        </p>
                        <p class="card-text item-description">
                            <span class="text-primary">{{__('messages.product_description')}}:</span><br>
                            {{$offer->product_description}}
                        </p>
                        @if($offer->shipping)

                        {{-- <p class="card-text item-description"></p>
                        <span class="text-primary">{{__('messages.have_shipping')}}:</span><br>
                        {{$offer->shipping}}
                        </p> --}}
                        @endif


                    </h6>


                </div>
                <div class="item-options text-center">
                    <div class="item-wrapper">
                        <div class="item-cost">
                            <h4 class="item-price"> {{$offer->video_price}}$</h4>
                        </div>

                    </div>



                    @if(!$offer->hasUserSentRequest())

                    <a class="btn btn-light btn-wishlist @if($offer->hasWhitelist()) text-danger @endif">
                        <i data-feather="send"></i>
                        <span>{{__('messages.request_sent')}}</span>
                    </a>
                    @else
                    <a href="{{route('creator.offers.request.send', $offer->id)}}" class="btn btn-light btn-wishlist ">
                        <i data-feather="send"></i>
                        <span>{{__('messages.send_request')}}</span>
                    </a>
                    @endif

                    <a href="{{route('creator.offers.show', $offer->id)}}" class="btn btn-primary btn-cart">
                        <i data-feather="eye"></i>
                        <span class="add-to-cart">{{__('messages.showDetails')}} </span>
                    </a>
                </div>
            </div>
            @endforeach
        </section>
        <!-- E-commerce Products Ends -->

        <!-- E-commerce Pagination Starts -->
        <section id="ecommerce-pagination">
            <div class="row">
                <div class="col-sm-12">
                    <nav aria-label="Page navigation example justify-content-center mt-2">
                        {{$data['offers']->links('pagination::bootstrap-4', ['class' => 'pagination
                        justify-content-center mt-2'])}}
                    </nav>
                </div>
            </div>
        </section>


        <!-- E-commerce Pagination Ends -->

    </div>


</div>

@endsection

@section('script')
    <script src="{{asset('users-asset/vendors/js/extensions/wNumb.min.js')}}"></script>
    <script src="{{asset('users-asset/vendors/js/extensions/nouislider.min.js')}}"></script>

    <script src="{{asset('users-asset/js/scripts/pages/app-ecommerce.js')}}"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })
    </script>
@endsection
