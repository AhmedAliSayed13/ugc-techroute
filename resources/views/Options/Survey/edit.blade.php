@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
<x-breadcrumb :section="'Surveys'" :sectionUrl="route('surveys.index')"
        :title="'Edit Survey'" />
















<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                

                <div class="row">
                    <div class="col-lg-12">
                        

                        <form method="POST" action="{{ route('surveys.update',$data['survey']->id) }}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            
                            <x-FormInput :type="'email'" :title="'email'" :name="'email'" :value="$data['survey']->email" :width="'12'" />
                            <x-FormInput :type="'text'" :title="'Key'" :name="'key'" :value="$data['survey']->key" :width="'12'" :disable="'1'" />
                                <x-FormTextarea  :title="'Reason'" :name="'reason'" :value="$data['survey']->reason" :width="'12'" />

                                <x-FormSwitch  :title="'Answer'" :name="'answer'" :value="$data['survey']->answer" :width="'12'"  />

                               

                               
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