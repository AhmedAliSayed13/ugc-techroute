@extends('user.client.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
{{--
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/vendors-rtl.min.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/wizard/bs-stepper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">
{{--
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/core/menu/menu-types/horizontal-menu.css')}}">
--}}
{{--
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-wizard.css')}}">
<style>
    .bootstrap-touchspin.input-group {
        width: 24rem;
    }

    .bootstrap-touchspin .bootstrap-touchspin-injected .bootstrap-touchspin-down,
    .bootstrap-touchspin .bootstrap-touchspin-injected .bootstrap-touchspin-up {
        min-width: 40px;
        min-height: 40px;
    }

    .input-group-btn.bootstrap-touchspin-injected input {
        font-size: 18px;
    }
</style>
@endsection


@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <x-breadcrumb_user :section="'حسابي'" :sectionUrl="route('client.profile')" :title="'تعديل البيانات'" />

        </div>
        <div class="container-fluid mt-2">
            <div class="row">
                <div class="content-body">
                    <!-- Modern Horizontal Wizard -->
                    <section class="modern-horizontal-wizard">
                        <div class="bs-stepper wizard-modern modern-wizard-example">
                            @include('user.client.order.tap_header')
                            <div class="bs-stepper-content">




                                <div class="content-header">
                                    <h5 class="mb-0">الدفع</h5>
                                    <small class="text-muted">دفع تمن الخدمة المقدمة</small>
                                </div>
                                {{-- <div class="card-information">
                                    <img class="mb-1 img-fluid" src="{{asset('users-asset/images/stripe-logo.png')}}"
                                        alt="Master Card">
                                    <div class="d-flex align-items-center mb-50">
                                        <h6 class="mb-0 badge badge-light-primary">Stripe</h6>
                                    </div>

                                </div> --}}
                                <form class="row  mb-2">
                                    @csrf
                                    <div class="row  mb-2">

                                        <div class="col-6">
                                            <label class="form-label" for="modalAddCardNumber">رقم البطاقة
                                            </label>
                                            <div class="input-group input-group-merge">
                                                <input id="modalAddCardNumber" name="modalAddCard"
                                                    class="form-control add-credit-card-mask" type="text"
                                                    aria-describedby="modalAddCard2"
                                                    data-msg="Please enter your credit card number">
                                                <span class="input-group-text cursor-pointer p-25" id="modalAddCard2">
                                                    <span class="add-card-type"></span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label" for="modalAddCardName">الاسم على
                                                البطاقة</label>
                                            <input type="text" id="modalAddCardName" class="form-control">
                                        </div>

                                        <div class="col-6 ">
                                            <label class="form-label" for="modalAddCardExpiryDate">تاريخ انتهاء
                                                البطاقة</label>
                                            <input type="text" id="modalAddCardExpiryDate"
                                                class="form-control add-expiry-date-mask" placeholder="MM/YY">
                                        </div>

                                        <div class="col-6 ">
                                            <label class="form-label" for="modalAddCardCvv">
                                                قيمة التحقق من البطاقة (CVV)
                                            </label>
                                            <input type="text" id="modalAddCardCvv"
                                                class="form-control add-cvv-code-mask" maxlength="3">
                                        </div>


                                    </div>



                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-outline-secondary btn-prev" disabled>
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">السايق</span>
                                        </button>
                                        <button class="btn btn-primary btn-next">
                                            <span class="align-middle d-sm-inline-block d-none">التالي</span>
                                            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                        </button>
                                    </div>
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
