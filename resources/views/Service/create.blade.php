@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Services'" :sectionUrl="route('services.index')"
        :title="'Create Service'" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('services.store') }}" class="form-horizontal"  enctype="multipart/form-data">
                                @csrf
                                <x-FormInput :type="'text'" :title="'unm'" :name="'unm'"  :width="'6'" :required="'1'" />
                                <x-FormInput :type="'text'" :title="'psw'" :name="'psw'"  :width="'6'" :required="'1'" />
                                <x-FormInput :type="'text'" :title="'clb'" :name="'clb'"  :width="'6'"  :required="'1'"/>
                                <x-FormInput :type="'text'" :title="'name'" :name="'name'"  :width="'6'"  :required="'1'" />
                                <x-FormInput :type="'text'" :title="'unm_ma'" :name="'unm_ma'"  :width="'6'"  :required="'1'"/>
                                <x-FormInput :type="'text'" :title="'psw_ma'" :name="'psw_ma'"  :width="'6'"  :required="'1'"/>
                                <x-FormInput :type="'text'" :title="'clb_ma'" :name="'clb_ma'"  :width="'6'"  :required="'1'"/>
                                <x-FormInput :type="'text'" :title="'sdp_username'" :name="'sdp_username'"  :width="'6'" :required="'1'" />
                                <x-FormInput :type="'text'" :title="'sdp_password'" :name="'sdp_password'"  :width="'6'" :required="'1'" />
                                <x-FormInput :type="'text'" :title="'sdp_club'" :name="'sdp_club'"  :width="'6'" :required="'1'" />
                                <x-FormSubmit  :title='"Create"'  />
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
