@extends('user.creator.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/pages/app-ecommerce.css')}}">
@endsection
@section('breadcrumb')
<x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('creator.offers.index')"
    :title="__('messages.offers')" />
@endsection

@section('content')
<div class="container-fluid mt-4">
    <div class="row">

        <div class="app-content content ecommerce-application">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">

                <x-breadcrumb_user :section="__('messages.search')" :sectionUrl="route('client.my-orders.index')"
                    :title="__('messages.offers')" />

                <div class="content-detached content-right">
                    <div class="content-body">
                        <!-- E-commerce Content Section Starts -->
                        <section id="ecommerce-header">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="ecommerce-header-items">
                                        <div class="result-toggler">
                                            <button class="navbar-toggler shop-sidebar-toggler" type="button"
                                                data-bs-toggle="collapse">
                                                <span class="navbar-toggler-icon d-block d-lg-none"><i
                                                        data-feather="menu"></i></span>
                                            </button>
                                            <div class="search-results">111111
                                                {{__('messages.resultsFound')}}</div>
                                        </div>
                                        <div class="view-options d-flex">
                                            <div class="btn-group dropdown-sort">
                                                <button type="button"
                                                    class="btn btn-outline-primary dropdown-toggle me-1"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <span class="active-sorting">Featured</span>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Featured</a>
                                                    <a class="dropdown-item" href="#">Lowest</a>
                                                    <a class="dropdown-item" href="#">Highest</a>
                                                </div>
                                            </div>
                                            <div class="btn-group" role="group">
                                                <input type="radio" class="btn-check" name="radio_options"
                                                    id="radio_option1" autocomplete="off" checked />
                                                <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn"
                                                    for="radio_option1"><i data-feather="grid"
                                                        class="font-medium-3"></i></label>
                                                <input type="radio" class="btn-check" name="radio_options"
                                                    id="radio_option2" autocomplete="off" />
                                                <label class="btn btn-icon btn-outline-primary view-btn list-view-btn"
                                                    for="radio_option2"><i data-feather="list"
                                                        class="font-medium-3"></i></label>
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
                                            <p>{{$offer->product_name}}</p>
                                        </div>
                                        <div>
                                            <h6 class="item-price">
                                                <a href="{{$offer->product_link}}" target="_blank"
                                                    title="{{__('messages.viewProduct')}}">
                                                    <i data-feather='external-link'></i>
                                                </a>

                                            </h6>
                                        </div>
                                    </div>
                                    <h6 class="item-name">


                                        <p class="text-body">
                                            <span>{{__('messages.country')}}:{{$offer->country->name}}</span>
                                        </p>
                                        <p class="text-body">
                                            <span>{{__('messages.gender')}}:{{$offer->gender}}</span>
                                        </p>


                                    </h6>

                                    <p class="card-text item-description">
                                        {{$offer->product_description}}
                                    </p>
                                </div>
                                <div class="item-options text-center">

                                    <a href="#" class="btn btn-light btn-wishlist">
                                        <i data-feather="heart"></i>
                                        <span>{{__('messages.wishlist')}}</span>
                                    </a>
                                    <a href="{{route('creator.offers.show', $offer->id)}}"
                                        class="btn btn-primary ">
                                        <i data-feather="eye"></i>
                                        <span class="add-to-cart">{{__('messages.showDetails')}}</span>
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
                                    <nav aria-label="Page navigation example text-center">
                                        {{$data['offers']->links('pagination::bootstrap-4')}}
                                    </nav>
                                </div>
                            </div>
                        </section>
                        <!-- E-commerce Pagination Ends -->

                    </div>
                </div>
                <div class="sidebar-detached sidebar-left">
                    <div class="sidebar">
                        <!-- Ecommerce Sidebar Starts -->
                        <div class="sidebar-shop">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h6 class="filter-heading d-none d-lg-block">{{__('messages.filter')}}</h6>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <!--  name Filter starts -->
                                    <div class="multi-range-price">
                                        <h6 class="filter-title mt-0">{{__('messages.name')}}</h6>
                                        <input type="text" class="form-control">
                                    </div>
                                    <!-- name Filter ends -->

                                    <!-- country Filter starts -->
                                    <div class="multi-range-price mt-2">
                                        <h6 class="filter-title mt-0">{{__('messages.country')}}</h6>
                                        <select class="form-select">
                                            <option>{{__('messages.all')}}</option>
                                            <option>{{__('messages.egypt')}}</option>
                                            <option>{{__('messages.kuwait')}}</option>
                                            <option>{{__('messages.qatar')}}</option>
                                            <option>{{__('messages.oman')}}</option>
                                        </select>
                                    </div>
                                    <!-- country Filter ends -->

                                    <!-- gender starts -->
                                    <div class="brands">
                                        <h6 class="filter-title">{{__('messages.gender')}}</h6>
                                        <ul class="list-unstyled brand-list">
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="productBrand1" />
                                                    <label class="form-check-label"
                                                        for="productBrand1">{{__('messages.male')}}</label>
                                                </div>

                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="productBrand2"
                                                        checked />
                                                    <label class="form-check-label"
                                                        for="productBrand2">{{__('messages.female')}}</label>
                                                </div>

                                            </li>

                                        </ul>
                                    </div>
                                    <!-- gender ends -->

                                    <!-- Rating starts -->
                                    <div id="ratings">
                                        <h6 class="filter-title">Ratings</h6>
                                        <div class="ratings-list">
                                            <a href="#">
                                                <ul class="unstyled-list list-inline">
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li>& up</li>
                                                </ul>
                                            </a>
                                            <div class="stars-received">160</div>
                                        </div>
                                        <div class="ratings-list">
                                            <a href="#">
                                                <ul class="unstyled-list list-inline">
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li>& up</li>
                                                </ul>
                                            </a>
                                            <div class="stars-received">176</div>
                                        </div>
                                        <div class="ratings-list">
                                            <a href="#">
                                                <ul class="unstyled-list list-inline">
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li>& up</li>
                                                </ul>
                                            </a>
                                            <div class="stars-received">291</div>
                                        </div>
                                        <div class="ratings-list">
                                            <a href="#">
                                                <ul class="unstyled-list list-inline">
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="filled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li class="ratings-list-item"><i data-feather="star"
                                                            class="unfilled-star"></i></li>
                                                    <li>& up</li>
                                                </ul>
                                            </a>
                                            <div class="stars-received">190</div>
                                        </div>
                                    </div>
                                    <!-- Rating ends -->

                                    <!-- Clear Filters Starts -->
                                    <div id="clear-filters">
                                        <button type="button"
                                            class="btn w-100 btn-primary">{{__('messages.search')}}</button>
                                    </div>
                                    <!-- Clear Filters Ends -->
                                </div>
                            </div>
                        </div>
                        <!-- Ecommerce Sidebar Ends -->

                    </div>
                </div>
            </div>
        </div>

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
