@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Services'" :sectionUrl="route('services.index')" :title="'List Services'" />
    <x-search :addUrl="route('services.create')" :modelName="'Service'" />
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>sdp username</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['services'] as $service)
                                <tr>
                                    <th scope="row">{{$service->id}}</th>

                                    <td>{{isset($service->name)?$service->name:''}}</td>
                                    <td>{{$service->sdp_username}}</td>



                                    <td class=" d-flex">
                                        <x-button_acttion :item="$service" :id="$service->id"
                                            :show="route('services.show',$service->id)"
                                            :edit="route('services.edit',$service)"
                                            :delete="route('services.destroy',$service->id)" />
                                    </td>
                                </tr>
                                @endforeach




                            </tbody>
                        </table>
                        <div class="mt-4">
                            <x-pagination :items="$data['services']" />
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
