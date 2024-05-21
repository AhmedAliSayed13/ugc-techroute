@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Contract Types'" :sectionUrl="route('contract-types.index')"
        :title="'List ContractTypes'" />
        <x-search 
        :addUrl="route('contract-types.create')"
        :modelName="'ContractType'"
         />
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
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['contractTypes'] as $contractType)
                                    <tr>
                                        <th scope="row">{{$contractType->id}}</th>
                                        <td>{{$contractType->name}}</td>
                                        
                                        <td class=" d-flex">
                                            <x-button_acttion 
                                                :item="$contractType" 
                                                :id="$contractType->id" 
                                                :show="route('contract-types.show',$contractType->id)" 
                                                :edit="route('contract-types.edit',$contractType)" 
                                                :delete="route('contract-types.destroy',$contractType->id)"  />
                                        </td>
                                    </tr>
                                @endforeach
                               
                                
                                
                               
                            </tbody>
                        </table>
                        <div class="mt-4">
                        <x-pagination  :items="$data['contractTypes']" /> 
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

