@extends('user.client.layouts.master')

@section('style')
<!-- BEGIN: Vendor CSS-->
{{--
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/vendors/css/vendors-rtl.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/vendors/css/extensions/nouislider.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/vendors/css/extensions/toastr.min.css"> --}}
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
{{--
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/colors.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/components.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/themes/dark-layout.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/themes/bordered-layout.css">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset')}}/css-rtl/themes/semi-dark-layout.css"> --}}

<!-- BEGIN: Page CSS-->
{{--
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/core/menu/menu-types/horizontal-menu.css')}}">
--}}
{{--
<link rel="stylesheet" type="text/css"
    href="{{asset('users-asset/css-rtl/plugins/extensions/ext-component-sliders.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/pages/app-ecommerce.css')}}">
{{--
<link rel="stylesheet" type="text/css"
    href="{{asset('users-asset/css-rtl/plugins/extensions/ext-component-toastr.css')}}"> --}}
<!-- END: Page CSS-->



@endsection
@section('breadcrumb')

@endsection

@section('content')
<div class="app-content content ecommerce-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">

        {{-- <x-breadcrumb_user :section="__('messages.search')" :sectionUrl="route('client.change.password')"
            :title="__('messages.searchForCreators')" /> --}}

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
                                    <div class="search-results">{{$data['creators']->total()}}
                                        {{__('messages.resultsFound')}}</div>
                                </div>
                                <div class="view-options d-flex">
                                    <div class="btn-group dropdown-sort">
                                        <button type="button" class="btn btn-outline-primary dropdown-toggle me-1"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="active-sorting">Featured</span>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Featured</a>
                                            <a class="dropdown-item" href="#">Lowest</a>
                                            <a class="dropdown-item" href="#">Highest</a>
                                        </div>
                                    </div>
                                    <div class="btn-group" role="group">
                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option1"
                                            autocomplete="off" checked />
                                        <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn"
                                            for="radio_option1"><i data-feather="grid"
                                                class="font-medium-3"></i></label>
                                        <input type="radio" class="btn-check" name="radio_options" id="radio_option2"
                                            autocomplete="off" />
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

                <!-- E-commerce Search Bar Starts -->
                {{-- <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                    <div class="row mt-1">
                        <div class="col-sm-12">
                            <div class="input-group input-group-merge">
                                <input type="text" class="form-control search-product" id="shop-search"
                                    placeholder="{{__('messages.search')}}" aria-label="Search..."
                                    aria-describedby="shop-search" />
                                <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <!-- E-commerce Search Bar Ends -->

                <!-- E-commerce Products Starts -->
                <section id="ecommerce-products" class="grid-view">
                    @foreach ($data['creators'] as $creator)
                    <div class="card ecommerce-card">
                        <div class="item-img text-center">
                            <a href="app-ecommerce-details.html">
                                <img class="img-fluid card-img-top" src="{{getUserProfileImage($creator->img)}}"
                                    alt="{{__('messages.imgCreator')}}" /></a>
                        </div>
                        <div class="card-body">
                            <div class="item-wrapper">
                                <div class="item-rating">
                                    <ul class="unstyled-list list-inline">
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i>
                                        </li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i>
                                        </li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i>
                                        </li>
                                        <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i>
                                        </li>
                                        <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    {{-- <h6 class="item-price"> {{$creator->price}}</h6> --}}
                                    <h6 class="item-price">
                                        {{$creator->creatorInfo->country->name}}
                                    </h6>
                                </div>
                            </div>
                            <h6 class="item-name">
                                <a class="text-body" href="app-ecommerce-details.html">{{$creator->name}}</a>
                                {{-- <span class="card-text item-company">By <a href="#"
                                        class="company-name">Apple</a></span> --}}
                            </h6>
                            <p class="card-text item-description">
                                On Retina display that never sleeps, so it’s easy to see the time and other important
                                information, without
                                raising or tapping the display. New location features, from a built-in compass to
                                current elevation, help users
                                better navigate their day, while international emergency calling1 allows customers to
                                call emergency services
                                directly from Apple Watch in over 150 countries, even without iPhone nearby. Apple Watch
                                Series 5 is available
                                in a wider range of materials, including aluminium, stainless steel, ceramic and an
                                all-new titanium.
                            </p>
                        </div>
                        <div class="item-options text-center">
                            <div class="item-wrapper">
                                <div class="item-cost">
                                    <h4 class="item-price">{{__('messages.country')}}</h4>
                                </div>
                            </div>
                            <a href="#" class="btn btn-light btn-wishlist">
                                <i data-feather="heart"></i>
                                <span>{{__('messages.wishlist')}}</span>
                            </a>
                            <a href="#" class="btn btn-primary btn-cart">
                                <i data-feather="shopping-cart"></i>
                                <span class="add-to-cart">{{__('messages.requestVideo')}}</span>
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
                                {{$data['creators']->links('pagination::bootstrap-4')}}
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



                            <!-- Categories Starts -->
                            {{-- <div id="product-categories">
                                <h6 class="filter-title">Categories</h6>
                                <ul class="list-unstyled categories-list">
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category1" name="category-filter"
                                                class="form-check-input" checked />
                                            <label class="form-check-label"
                                                for="category1">{{__('messages.male')}}</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category2" name="category-filter"
                                                class="form-check-input" />
                                            <label class="form-check-label"
                                                for="category2">{{__('messages.female')}}</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category3" name="category-filter"
                                                class="form-check-input" />
                                            <label class="form-check-label" for="category3">Cameras & Camcorders</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category4" name="category-filter"
                                                class="form-check-input" />
                                            <label class="form-check-label" for="category4">Car Electronics &
                                                GPS</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category5" name="category-filter"
                                                class="form-check-input" />
                                            <label class="form-check-label" for="category5">Cell Phones</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category6" name="category-filter"
                                                class="form-check-input" />
                                            <label class="form-check-label" for="category6">Computers & Tablets</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category7" name="category-filter"
                                                class="form-check-input" />
                                            <label class="form-check-label" for="category7">Health, Fitness &
                                                Beauty</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category8" name="category-filter"
                                                class="form-check-input" />
                                            <label class="form-check-label" for="category8">Office & School
                                                Supplies</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category9" name="category-filter"
                                                class="form-check-input" />
                                            <label class="form-check-label" for="category9">TV & Home Theater</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input type="radio" id="category10" name="category-filter"
                                                class="form-check-input" />
                                            <label class="form-check-label" for="category10">Video Games</label>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                            <!-- Categories Ends -->

                            <!-- gender starts -->
                            <div class="brands">
                                <h6 class="filter-title">{{__('messages.gender')}}</h6>
                                <ul class="list-unstyled brand-list">
                                    <li>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="productBrand1" />
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
                                <button type="button" class="btn w-100 btn-primary">{{__('messages.search')}}</button>
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

@endsection

@section('script')


<!-- BEGIN: Vendor JS-->
{{-- <script src="{{asset('users-asset/vendors/js/vendors.min.js')}}"></script> --}}
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
{{-- <script src="{{asset('users-asset/vendors/js/ui/jquery.sticky.js')}}"></script> --}}
<script src="{{asset('users-asset/vendors/js/extensions/wNumb.min.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/extensions/nouislider.min.js')}}"></script>
{{-- <script src="{{asset('users-asset')}}/vendors/js/extensions/toastr.min.js"></script> --}}
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
{{-- <script src="{{asset('users-asset/js/core/app-menu.js')}}"></script> --}}
{{-- <script src="{{asset('users-asset/js/core/app.js')}}"></script> --}}
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
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
