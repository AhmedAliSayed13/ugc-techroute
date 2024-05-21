@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
<x-breadcrumb :section="'Service Types'" :sectionUrl="route('ads.index')"
        :title="'Edit Ad'" />
















<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                

                <div class="row">
                    <div class="col-lg-12">
                        

                        <form method="POST" action="{{ route('ads.update',$data['ad']->id) }}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h3><b>Customer:  </b>{{ $data['ad']->customer}}</h3>
                            <h3><b>Service:  </b>{{ $data['ad']->marketing_service_type}}</h3>
                            <h3><b>Category:  </b>{{ isset($data['ad']->category)?$data['ad']->category->name:''}}</h3>
                            {{-- <x-FormInput :type="'text'" :title="'Name'" :name="'name'" :value="$data['ad']->name"  :width="'12'" /> --}}
                            {{-- <x-FormSelect  :title="'Customers'" :name="'customer_id'" :options="$data['customers']" :value="$data['ad']->customer_id"  :width="'12'" /> --}}
                            {{-- <x-FormSelect  :title="'Types'" :name="'marketing_service_type_id'" :options="$data['serviceTypes']" :value="$data['ad']->marketing_service_type_id"  :width="'12'" /> --}}
                            <x-FormInput :type="'time'" :title="'Time'" :name="'time'" :value="$data['ad']->time"  :width="'12'" />
                            <x-FormInput :type="'date'" :title="'Date'" :name="'date'" :value="$data['ad']->date" :width="'12'" />
                            <x-FormShowFile :items="$data['ad']->adsFiles" :key="'url'"  :title="'Medias'"   :width="'12'" :delete="true" />
                            <x-FormFile :type="'file'" :title="'Medias'" :name="'medias[]'"  :width="'12'" :multiple="true" />
                            <x-FormSwitch  :title="'Publish'" :name="'publish'" :value="$data['ad']->publish" :width="'12'"  />
                            <x-FormTextarea  :title="'Details'" :name="'details'" :value="$data['ad']->details" :width="'12'" />
                            <x-FormTextarea  :title="'Notes'" :name="'notes'" :value="$data['ad']->notes" :width="'12'" /> 
                            

                            
                            
                            
                            <x-FormSubmit  :title='"Edit"'  />
                        </form>
                    </div> <!-- end col -->

                    
                </div>
                <!-- end row-->

            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
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