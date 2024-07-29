@extends('user.client.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/wizard/bs-stepper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-wizard.css')}}">
<script src="https://js.stripe.com/v3/"></script>
<style>
    .payment-summary {
        margin-top: 20px;
        border-top: 1px solid #ddd;
        padding-top: 10px;
    }

    .payment-summary h6 {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 5px;
    }

    .summary-item.total {
        font-weight: bold;
        border-top: 1px solid #ddd;
        padding-top: 10px;
    }
</style>
@endsection

@section('content')
<div class="app-content content ">


    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                            {{-- <h2 class="fw-bolder mb-0">$ {{Auth::user()->wallet(1)->balance}} </h2> --}}
                            <h2 class="fw-bolder mb-0">
                                <div class="plan-price mt-2">
                                    <sup class="font-medium-1 fw-bold text-primary">$</sup>
                                    <span
                                        class="pricing-enterprise-value fw-bolder text-primary">{{Auth::user()->wallet(2)->balance}}</span>
                                </div>
                            </h2>
                            <p class="card-text">{{__('messages.wallet')}}</p>
                        </div>
                        <div class="avatar bg-light-warning p-50 m-0">
                            <div class="avatar-content">
                                <i data-feather='credit-card'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom mb-2">
                        <h3>{{__('messages.wallet')}}</h3>
                    </div>
                    <div class="card-body">
                        <form class="row mb-2" action="{{route('client.wallet.topup')}}" method="POST"
                            id="payment-form">
                            @csrf

                            <div class="col-12 mb-2">
                                <img src="{{asset('users-asset/images/stripe.png')}}" alt="">
                            </div>
                            <div class="col-12 mb-2">
                                <label class="form-label" for="amount">
                                    {{__('messages.amount')}}
                                </label>
                                <input type="number" step="0.01" min="0" name="amount" id="amount" class="form-control"
                                    required>
                                @error('amount')
                                <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 mb-2">
                                <label class="form-label" for="card-name">
                                    {{__('messages.nameOnCard')}}
                                </label>
                                <input type="text" id="card-name" class="form-control" required>
                            </div>
                            <div class="col-12 mb-2">
                                <label class="form-label" for="card-number">
                                    {{__('messages.cardNumber')}}
                                </label>
                                <div id="card-number" class="form-control"></div>
                            </div>
                            <div class="col-6 mb-2">
                                <label class="form-label" for="card-expiry">
                                    {{__('messages.expiryDate')}}
                                </label>
                                <div id="card-expiry" class="form-control"></div>
                            </div>
                            <div class="col-6 mb-2">
                                <label class="form-label" for="card-cvc">
                                    {{__('messages.cvc')}}
                                </label>
                                <div id="card-cvc" class="form-control"></div>
                            </div>
                            <div id="card-errors" role="alert" class="col-12 text-danger"></div>
                            <div class="col-12 mt-2">
                                <button class="btn btn-primary" id="submit-button">{{__('messages.pay')}} <i
                                        data-feather='credit-card'></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Initialize Stripe
    var stripe = Stripe('{{ config('services.stripe.key') }}');
    var elements = stripe.elements();

    // Styling for the elements
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

    // Create Stripe elements
    var cardNumber = elements.create('cardNumber', {style: style});
    var cardExpiry = elements.create('cardExpiry', {style: style});
    var cardCvc = elements.create('cardCvc', {style: style});

    // Mount the elements
    cardNumber.mount('#card-number');
    cardExpiry.mount('#card-expiry');
    cardCvc.mount('#card-cvc');

    // Handle validation errors
    function translateError(message) {
        var translations = {
            "Your card number is incomplete.": "رقم البطاقة غير مكتمل.",
            "Your card's expiration date is incomplete.": "تاريخ انتهاء البطاقة غير مكتمل.",
            "Your card's security code is incomplete.": "رمز الأمان للبطاقة غير مكتمل.",
            "Your card number is invalid.": "رقم البطاقة غير صالح.",
            "Your card has expired.": "البطاقة منتهية الصلاحية.",
            // Add more translations as needed
        };
        return translations[message] || message;
    }

    cardNumber.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = translateError(event.error.message);
        } else {
            displayError.textContent = '';
        }
    });

    // Handle form submission
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(cardNumber).then(function(result) {
            if (result.error) {
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = translateError(result.error.message);
            } else {
                stripeTokenHandler(result.token);
            }
        });
    });

    // Submit the form with the Stripe token
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