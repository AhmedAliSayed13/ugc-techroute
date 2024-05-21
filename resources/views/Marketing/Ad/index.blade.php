@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Service Ads'" :sectionUrl="route('ads.index')"
        :title="'List Ads'" />
        <x-search 
        :addUrl="route('ads.create')"
        :modelName="'Ad'"
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
                                    <th>Marketer</th>
                                    <th>Customer</th>
                                    <th>service type</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>publish</th>
                                    <th>Files</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data['ads'] as $ad)
                                    <tr>
                                        <th scope="row">{{$ad->id}}</th>
                                        <td>{{isset($ad->user->name)?$ad->user->name:''}}</td>
                                        <td>{{$ad->customer}}</td>
                                        <td>{{$ad->marketing_service_type}}</td>
                                        <td>{{$ad->date}}</td>
                                        <td>{{$ad->time}}</td>
                                        <td>
                                            @if($ad->publish)
                                            <span class="badge bg-success "><i class="fas fa-check"></i> </span>
                                            @else
                                            <span class="badge bg-warning"><i class="fas fa-window-close"></i></span>
                                            @endif
                                            
                                        </td>
                                        <td><span class="badge bg-info">{{$ad->adsFiles->COUNT()}}</span> </td>
                                        
                                        <td class=" d-flex">
                                            

                                            <x-button_acttion 
                                                :item="$ad" 
                                                :id="$ad->id" 
                                                :show="route('ads.show',$ad->id)" 
                                                :edit="route('ads.edit',$ad)" 
                                                :delete="route('ads.destroy',$ad->id)"  />
                                        </td>
                                    </tr>
                                @endforeach
                               
                                
                                
                               
                            </tbody>
                        </table>
                        <div class="mt-4">
                        <x-pagination  :items="$data['ads']" /> 
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

