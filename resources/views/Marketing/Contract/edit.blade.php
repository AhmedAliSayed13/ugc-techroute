@extends('layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">
<x-breadcrumb :section="'Contracts'" :sectionUrl="route('contracts.index')"
        :title="'Edit Contract'" />
















<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                

                <div class="row">
                    <div class="col-lg-12">
                        

                        <form method="POST" action="{{ route('contracts.update',$data['contract']->id) }}" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                           
                                <x-FormSelect  :title="'Contract Type'" :name="'contract_type_id'" :value="$data['contract']->contract_type_id" :options="$data['contractTypes']"  :width="'12'" />
                                <x-FormSelect  :title="'Customer'" :name="'customer_id'" :value="$data['contract']->customer_id" :options="$data['customers']"  :width="'12'" />
                                <x-FormInput :type="'name'" :title="'Name'" :name="'name'" :value="$data['contract']->name"  :width="'12'" />
                                <x-FormInput :type="'text'" :title="'Phone'" :name="'phone'" :value="$data['contract']->phone"  :width="'12'" />
                                <x-FormInput :type="'integer'" :title="'Price'" :name="'price'" :value="$data['contract']->price"  :width="'12'" />
                                <x-FormInput :type="'text'" :title="'Payment Method'" :name="'payment_method'" :value="$data['contract']->payment_method"  :width="'12'" />
                                <x-FormInput :type="'date'" :title="'First Payment'" :name="'date_first_payment'" :value="$data['contract']->date_first_payment"  :width="'12'" />
                                <x-FormInput :type="'date'" :title="'Second Payment'" :name="'date_second_payment'" :value="$data['contract']->date_second_payment"  :width="'12'" />
                                <x-FormInput :type="'date'" :title="'Third Payment'" :name="'date_third_payment'" :value="$data['contract']->date_third_payment"  :width="'12'" />
                                <x-FormInput :type="'date'" :title="'New Payment Date'" :name="'new_payment_date'" :value="$data['contract']->new_payment_date"  :width="'12'" />
                                <x-FormSwitch  :title="'payment status'" :name="'payment_status'" :value="$data['contract']->payment_status"  :width="'12'" />
                                <x-FormTextarea  :title="'reason delayed payment'" :name="'reason_delayed_payment'" :value="$data['contract']->reason_delayed_payment"  :width="'12'" />
                                <h4 class="header-title">Contract Details </h4>
                                @foreach ($data['services'] as $type)
                                @php
                                $option=\App\Models\Option::where(['marketing_service_type_id'=>$type->id,'contract_id'=>$data['contract']->id])->first();
                                @endphp

                                @if($option)
                                    <input type="hidden" name="options[]"  value="{{$option->id}}" style="display:none">
                                    <x-FormInput :type="'number'" :title="$type->name" :value="$option->value" :name="'values[]'"  :width="'4'" />
                                @else
                                    <input type="hidden" name="newOptions[]"  value="{{$type->id}}" style="display:none">
                                    <x-FormInput :type="'number'" :title="$type->name" :name="'newValues[]'" :value="'0'"  :width="'4'" />
                                @endif
                                @endforeach
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