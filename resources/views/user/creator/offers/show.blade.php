@extends('user.creator.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/pages/app-ecommerce.css')}}">
<style>
    .btn-wishlist.text-danger svg {
        fill: #EA5455;
    }

    .btn-wishlist.text-danger span {
        color: black !important;
    }
</style>
@endsection


@section('content')
<div class=" content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        {{-- <div class="content-header row">
            <x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('creator.offers.index')"
                :title="__('messages.offers')" />
        </div> --}}

        <div class="content-body">
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body ">
                                <div class=" text-center">
                                    @if($data['order']->hasUserSentRequest( ))
                                        <a href="{{route('creator.offers.request.send', $data['order']->id)}}"
                                            class="btn btn-primary  me-0 me-sm-1 mb-1 mb-sm-0">
                                            <i data-feather="shopping-cart" class="me-50"></i>
                                            <span class="add-to-cart">{{__('messages.send_request')}}</span>
                                        </a>
                                        @else
                                        <button  href="" disabled
                                            class="btn btn-primary  me-0 me-sm-1 mb-1 mb-sm-0">
                                            <i data-feather="shopping-cart" class="me-50"></i>
                                            <span class="add-to-cart">{{__('messages.sent_request')}}</span>
                                        </button>
                                    @endif
                                    <a href="{{route('creator.offers.whitelist', $data['order']->id)}}"
                                        class="btn btn-outline-secondary btn-wishlist @if($data['order']->hasWhitelist()) text-danger @endif me-0 me-sm-1 mb-1 mb-sm-0">

                                            <i data-feather="heart" class="me-50 "></i>

                                        <span>{{__('messages.Wishlist')}}</span>
                                    </a>
                                    {{-- <div class="btn-group dropdown-icon-wrapper btn-share">
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
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="col-12">



                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('messages.orderInformation')}}</h4>
                            </div>
                            <div class="card-body">
                                <!-- app e-commerce details start -->

                                <div class="row my-2">
                                    <div class="col-12 ">


                                        <table class="table ">

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.order_number')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->key}}</td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.order_price')}}</span>
                                                    </td>
                                                    <td > <span class="badge rounded-pill badge-light-primary">{{$data['order']->video_price}} $</span></td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.publish_date')}}</span>
                                                    </td>
                                                    <td > @php \Carbon\Carbon::setLocale('ar') @endphp
                                                        <span> {{$data['order']->created_at->diffForHumans()}}</span></td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.product_name')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->product_name}}</td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="fw-bold">{{__('messages.product_description')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->product_description}}</td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.product_link')}}</span>
                                                    </td>
                                                    <td><a href="{{$data['order']->product_link}}"
                                                            target="_blank">{{$data['order']->product_link}}</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="fw-bold">{{__('messages.product_instructions')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->product_instructions}}</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>


                                    <!-- Product Details ends -->




                                </div>

                                <!-- app e-commerce details end -->

                            </div>
                        </div>


                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('messages.Video_specifications')}}</h4>
                            </div>
                            <div class="card-body">
                                <!-- app e-commerce details start -->

                                <div class="row my-2">
                                    <div class="col-12 ">


                                        <table class="table ">

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.video_count')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->video_count}} {{__('messages.video')}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.video_type')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->videoOptionType->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.video_duration')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->videoOptionDuration->time??''}}
                                                        {{__('messages.second')}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.video_aspect')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->videoOptionAspect->name}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.scenes')}}</span>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                @foreach ($data['order']->orderVideos as $key=> $order_video)
                                                <tr>
                                                    <td>{{__('messages.scene')}} #{{$key+1}}</td>
                                                    <td>{{$order_video->scenes}}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.mentions')}}</span>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                @foreach ($data['order']->orderVideos as $key=>$order_video)
                                                <tr>
                                                    <td>{{__('messages.mention')}} #{{$key+1}}</td>
                                                    <td>{{$order_video->mentions}}</td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>


                                    <!-- Product Details ends -->




                                </div>

                                <!-- app e-commerce details end -->

                            </div>
                        </div>


                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{__('messages.video_criteria')}}</h4>
                            </div>
                            <div class="card-body">
                                <!-- app e-commerce details start -->

                                <div class="row my-2">
                                    <div class="col-12 ">


                                        <table class="table ">

                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.gender')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->gender}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.country')}}</span>
                                                    </td>
                                                    <td>{{$data['order']->country->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-bold">{{__('messages.video_options')}}</span>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                @foreach ($data['order']->orderOptions as $orderOption)
                                                <tr>
                                                    <td>
                                                        <span
                                                            class="fw-bold">{{$orderOption->mainOption->name_creator}}</span>
                                                    </td>
                                                    <td>
                                                        {{getValuesOptionCommaNameByIds($orderOption->value_options)}}
                                                    </td>
                                                </tr>
                                                @endforeach




                                            </tbody>
                                        </table>
                                    </div>


                                    <!-- Product Details ends -->




                                </div>

                                <!-- app e-commerce details end -->

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
