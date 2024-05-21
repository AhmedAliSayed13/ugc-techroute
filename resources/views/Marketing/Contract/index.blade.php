@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Contracts'" :sectionUrl="route('contracts.index')" :title="'List Contracts'" />
    <x-search :addUrl="route('contracts.create')" :modelName="'Contract'" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Type</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Payment Status</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['contracts'] as $contract)
                                <tr>
                                    <th scope="row">{{$contract->id}}</th>

                                    <td>{{isset($contract->customer->name)?$contract->customer->name:''}}</td>
                                    <td>{{isset($contract->marketingServiceType->name)?$contract->marketingServiceType->name:''}}
                                    </td>
                                    <td>{{$contract->name}}</td>
                                    <td>{{$contract->phone?$contract->phone:'-'}}</td>
                                    <td>
                                        @if($contract->payment_status)
                                            <x-badge :type="'success'" :text="'Paid'" />
                                        @else
                                            <x-badge :type="'danger'" :text="'Not Paid'" />
                                        @endif
                                    </td>

                                    <td class=" d-flex">
                                        <x-button_acttion :item="$contract" :id="$contract->id"
                                            :show="route('contracts.show',$contract->id)"
                                            :edit="route('contracts.edit',$contract)"
                                            :delete="route('contracts.destroy',$contract->id)" />
                                    </td>
                                </tr>
                                @endforeach




                            </tbody>
                        </table>
                        <div class="mt-4">
                            <x-pagination :items="$data['contracts']" />
                        </div>
                    </div> <!-- end table-responsive-->
                </div>
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
</div>
@endsection
@section('script')
<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>

<script src="{{asset('assets/libs/selectize/js/standalone/selectize.min.js')}}"></script>
<script src="{{asset('assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
{{-- <script src="{{asset('assets/libs/multiselect/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery-mockjax/jquery.mockjax.min.js')}}"></script>
<script src="{{asset('assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script> --}}
<script src="{{asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
@endsection