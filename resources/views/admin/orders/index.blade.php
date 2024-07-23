@extends('admin.layouts.master')
@section('style')
<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet"
    type="text/css" />



@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->

    <x-breadcrumb :section="'Orders'" :sectionUrl="route('admin.orders.index')" :title="'List Orders'" />
    <x-search :modelName="'Order'" />



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>key</th>
                                            <th>client</th>
                                            <th>video number</th>
                                            <th>total</th>
                                            <th>paid</th>
                                            <th>status</th>
                                            <th>created at</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['orders'] as $order)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$order->key}}</td>
                                            <td>{{isset($order->client->name)?$order->client->name:'-'}}</td>
                                            <td>{{$order->video_count}}</td>
                                            <td>${{$order->total}}</td>
                                            <td>{!!$order->paid?'<span class="badge bg-success">ON</span>':'<span
                                                    class="badge bg-danger">OFF</span>'!!}</td>
                                            <td>
                                                <span
                                                    class="badge bg-primary">{{isset($order->orderStatus->name)?$order->orderStatus->name:'-'}}</span>
                                                @if($order->status==4 && $order->paid)
                                                @include('admin.orders.elements.confirm_model')
                                                @endif
                                            </td>
                                            <td>{{$order->created_at}}</td>

                                            <td>
                                                <x-button_acttion :item="$order" :id="$order->id"
                                                    :show="route('admin.orders.show',$order->id)"
                                                    :edit="route('admin.orders.edit',$order->id)" />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <x-pagination :items="$data['orders']" />
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
<script src="{{asset('assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
<script src="{{asset('assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<!-- Init js-->
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
@endsection
