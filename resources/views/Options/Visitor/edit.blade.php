@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
<x-breadcrumb :section="'Visitors'" :sectionUrl="route('visitors.index')"
        :title="'Edit Visitor'" />
















<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                

                <div class="row">
                    <div class="col-lg-12">
                        

                        <form method="POST" action="{{ route('visitors.update',$data['visitor']->id) }}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            
                            <x-FormInput :type="'text'" :title="'Name'" :name="'name'" :value="$data['visitor']->name" :width="'12'" />
                            <x-FormInput :type="'text'" :title="'Redirect'" :name="'redirect'" :value="$data['visitor']->redirect" :width="'12'" />
                            <x-FormInput :type="'text'" :title="'Key'" :name="'key'" :value="$data['visitor']->key" :width="'12'" />

                               

                               
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