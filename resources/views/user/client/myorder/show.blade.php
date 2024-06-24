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
                :title="__('messages.show_order')" />
        </div>

        <div class="content-body">
            <div class="container-fluid mt-4">
                <div class="row">

                    <div class="row">
                        <div class="col-12">



                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{__('messages.show_order')}}</h4>
                                </div>
                                <div class="content-body">
                                    <!-- app e-commerce details start -->
                                    <section class="app-ecommerce-details">
                                        <div class="card">
                                            <!-- Product Details starts -->
                                            <div class="card-body">
                                                <div class="row my-2">

                                                    <div class="col-12 ">
                                                        <h4>{{$data['order']->product_name}}</h4>
                                                        <span class="card-text item-company"> <a
                                                                href="{{$data['order']->product_link}}"
                                                                class="company-name"><i
                                                                    data-feather='external-link'></i></a></span>

                                                        <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                                            <h4 class="item-price me-1">{{$data['order']->gender}}</h4>
                                                            <h4 class="item-price ps-1 border-start">
                                                                {{$data['order']->country->name}}</h4>

                                                        </div>
                                                        {{-- <p class="card-text">Available - <span
                                                                class="text-success">In
                                                                stock</span></p> --}}
                                                        <p class="card-text">
                                                            <span
                                                                class="card-link">{{__('messages.product_description')}}:</span><br>
                                                            {{$data['order']->product_description}}
                                                        </p>
                                                        <p class="card-text">
                                                            <span
                                                                class="card-link">{{__('messages.product_instructions')}}</span><br>
                                                            {{$data['order']->product_instructions}}
                                                        </p>
                                                        {{-- <ul class="product-features list-unstyled">
                                                            @foreach ($data['order']->orderOptions as $orderOption)
                                                            <li>

                                                                <i data-feather="list"></i>

                                                                <span>{{$orderOption->mainOption->name}}</span>
                                                            </li>
                                                            @endforeach

                                                        </ul> --}}
                                                        <hr />
                                                        <div class="product-color-options">
                                                            @foreach ($data['order']->orderOptions as $orderOption)
                                                                <h6>{{$orderOption->mainOption->name}}</h6>
                                                                <ul class="list-unstyled mb-1">
                                                                    @foreach (getValuesOptionByIds($orderOption->value_options) as $item)

                                                                    <li class="d-inline-block selected">
                                                                        <span class="text-primary">{{$item->name}}</span> |
                                                                    </li>
                                                                    @endforeach
                                                                    {{-- {{$orderOption->value_options}} --}}
                                                                </ul>
                                                            @endforeach
                                                        </div>
                                                        {{-- <hr />
                                                        <div class="d-flex flex-column flex-sm-row pt-1">
                                                            <a href="#"
                                                                class="btn btn-primary btn-cart me-0 me-sm-1 mb-1 mb-sm-0">
                                                                <i data-feather="shopping-cart" class="me-50"></i>
                                                                <span class="add-to-cart">Add to cart</span>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-outline-secondary btn-wishlist me-0 me-sm-1 mb-1 mb-sm-0">
                                                                <i data-feather="heart" class="me-50"></i>
                                                                <span>Wishlist</span>
                                                            </a>
                                                            <div class="btn-group dropdown-icon-wrapper btn-share">
                                                                <button type="button"
                                                                    class="btn btn-icon hide-arrow btn-outline-secondary dropdown-toggle"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i data-feather="share-2"></i>
                                                                </button>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="#" class="dropdown-item">
                                                                        <i data-feather="facebook"></i>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i data-feather="twitter"></i>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i data-feather="youtube"></i>
                                                                    </a>
                                                                    <a href="#" class="dropdown-item">
                                                                        <i data-feather="instagram"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Details ends -->




                                        </div>
                                    </section>
                                    <!-- app e-commerce details end -->

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
