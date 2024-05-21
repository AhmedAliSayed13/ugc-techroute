@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Contracts'" :sectionUrl="route('contracts.index')"
        :title="'Create Contract'" />

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    

                    <div class="row">
                        <div class="col-lg-12">
                            

                            <form method="POST" action="{{ route('contracts.store') }}" class="form-horizontal"  enctype="multipart/form-data">
                                @csrf
                                <x-FormSelect  :title="'Contract Type'" :name="'contract_type_id'" :options="$data['contractTypes']"  :width="'12'" />
                                <x-FormSelect  :title="'Customer'" :name="'customer_id'" :options="$data['customers']"  :width="'12'" />
                                <x-FormInput :type="'text'" :title="'Name'" :name="'name'"  :width="'12'" />
                                <x-FormInput :type="'text'" :title="'Phone'" :name="'phone'"  :width="'12'" />
                                <x-FormInput :type="'integer'" :title="'Price'" :name="'price'"  :width="'12'" />
                                <x-FormInput :type="'text'" :title="'Payment Method'" :name="'payment_method'"  :width="'12'" />
                                <x-FormInput :type="'date'" :title="'First Payment'" :name="'date_first_payment'"  :width="'12'" />
                                <x-FormInput :type="'date'" :title="'Second Payment'" :name="'date_second_payment'"  :width="'12'" />
                                <x-FormInput :type="'date'" :title="'Third Payment'" :name="'date_third_payment'"  :width="'12'" />
                                <x-FormInput :type="'date'" :title="'New Payment Date'" :name="'new_payment_date'"  :width="'12'" />
                                <x-FormSwitch  :title="'payment status'" :name="'payment_status'"  :width="'12'" />
                                <x-FormTextarea  :title="'reason delayed payment'" :name="'reason_delayed_payment'"  :width="'12'" />
                                <h4 class="header-title">Contract Details </h4>
                                @foreach ($data['services'] as $service)
                                <input type="hidden" name="services[]"  value="{{$service->id}}" style="display:none">
                                <x-FormInput :type="'number'" :title="$service->name" :name="'values[]'"  :width="'4'" />

                                @endforeach
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