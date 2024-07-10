@extends('user.client.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/wizard/bs-stepper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-wizard.css')}}">


@endsection


@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        {{-- <div class="content-header row">
            <x-breadcrumb_user :section="'حسابي'" :sectionUrl="route('client.profile')" :title="'تعديل البيانات'" />

        </div> --}}
        <div class="container-fluid mt-2">
            <div class="row">
                <div class="content-body">
                    <!-- Modern Horizontal Wizard -->
                    <section class="modern-horizontal-wizard">
                        <div class="bs-stepper wizard-modern modern-wizard-example">
                            @include('user.client.order.tap_header')
                            <div class="bs-stepper-content">




                                <div class="content-header">
                                    <h5 class="mb-0">{{__('messages.product')}}</h5>
                                    <small class="text-muted"> {{__('messages.productDetails')}}</small>
                                </div>
                                <form class="row  mb-2" action="{{route('client.order.product',$data['key'])}}"
                                    method="POST" id="payment-form">
                                    @csrf
                                    <div class="row  mb-2">
                                        <div class="col-6 ">
                                            <div class="mb-1">
                                                <label class="form-label"
                                                    for="product_name">{{__('messages.product_name')}}</label>
                                                <input type="text" class="form-control" id="product_name" value="{{old('product_name',$data['order']->product_name)}}"
                                                    name="product_name" required>
                                                @error('product_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="mb-1">
                                                <label class="form-label"
                                                    for="product_link">{{__('messages.product_link')}}</label>
                                                <input type="text" class="form-control" id="product_link" value="{{old('product_link',$data['order']->product_link)}}"
                                                    name="product_link" required>
                                                @error('product_link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="mb-1">
                                                <label class="form-label"
                                                    for="product_instructions">{{__('messages.product_instructions')}}</label>
                                                    <textarea class="form-control" name="product_instructions" id="product_instructions" rows="3" required> {{old('product_instructions',$data['order']->product_instructions)}}</textarea>
                                                @error('product_instructions')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="mb-1">
                                                <label class="form-label"
                                                    for="product_description">{{__('messages.product_description')}}</label>
                                                    <textarea class="form-control" name="product_description" id="product_description" rows="3" required> {{old('product_description',$data['order']->product_description)}}</textarea>
                                                @error('product_description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    @include('user.client.order.tap_footer')
                                </form>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')


<script src="{{asset('users-asset/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-wizard.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-number-input.js')}}"></script>
@endsection
