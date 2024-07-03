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

        <div class="row">
            <div class="col-12">
                @include('user.client.myorder.tab-header')
            </div>






            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('messages.brief')}}</h4>
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
                                                <span class="fw-bold">{{__('messages.product_name')}}</span>
                                            </td>
                                            <td>{{$data['order']->product_name}}</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{__('messages.product_description')}}</span>
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
                                                <span class="fw-bold">{{__('messages.product_instructions')}}</span>
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
                                                <span class="fw-bold">{{$orderOption->mainOption->name_client}}</span>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('messages.order_price')}}</h4>
                    </div>
                    <div class="card-body">
                        <!-- app e-commerce details start -->

                        <div class="row my-2">
                            <div class="col-12 ">


                                <table class="table ">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{__('messages.order_total')}}</span>
                                            </td>
                                            <td class="fw-bolder text-success">{{$data['order']->total}} $</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{__('messages.video_price_on_order')}}</span>
                                            </td>
                                            <td class="fw-bolder text-success">{{$data['order']->video_price}} $</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{__('messages.payment_status')}}</span>
                                            </td>
                                            <td >@if($data['order']->paid)
                                                <span class="fw-bolder text-success">{{__('messages.paid')}}</span>
                                                @else
                                                <span class="fw-bolder text-danger">{{__('messages.unpaid')}}</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">{{__('messages.order_status')}}</span>
                                            </td>
                                            <td >
                                                {{$data['order']->status}}


                                            </td>
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


        </div>




    </div>
</div>
@endsection
@section('script')

@endsection
