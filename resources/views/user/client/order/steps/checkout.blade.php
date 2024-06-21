@extends('user.client.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/wizard/bs-stepper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-wizard.css')}}">
<script src="https://js.stripe.com/v3/"></script>
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
                                <form class="row  mb-2" action="{{route('client.order.checkout',$data['key'])}}"
                                    method="POST" id="payment-form">
                                    @csrf
                                    <div class="row  mb-2">
                                        <div class="col-12 ">
                                            <label class="form-label" for="cvv">
                                                بطاقة الائتمان أو الخصم
                                            </label>
                                            <div id="card-element" class="form-control">

                                            </div>
                                            <div id="card-errors" role="alert"></div>
                                            @error('cvv')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
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

                                {{-- <form action="{{ route('stripe.payment') }}" method="POST" id="payment-form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input type="number" name="amount" id="amount" class="form-control"
                                            placeholder="Enter Amount" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="card-element">Credit or Debit Card</label>
                                        <div id="card-element" class="form-control">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Submit Payment</button>
                                </form> --}}

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

<script>
    var stripe = Stripe('{{ config('services.stripe.key') }}');
    var elements = stripe.elements();
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
    var card = elements.create('card', {style: style});
    card.mount('#card-element');

    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });

    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                stripeTokenHandler(result.token);
            }
        });
    });

    function stripeTokenHandler(token) {
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        form.submit();
    }
</script>
<script src="{{asset('users-asset/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-wizard.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-number-input.js')}}"></script>
@endsection
