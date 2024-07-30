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
                            <div class="">

                                <div class="row">
                                    <div class="col-5">
                                        <div class="card">
                                            <div class="card-header border-bottom mb-2">
                                                <h3>{{ __('messages.payment_header') }}</h3>
                                            </div>
                                            <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-6 text-center">
                                                            <div class="form-check form-check-inline mb-1">
                                                                <input name="payment_method" class="form-check-input"
                                                                    type="radio" id="stripe" value="stripe" checked />
                                                                <label class="form-check-label" for="stripe">{{
                                                                    __('messages.payUseStripe') }}</label>
                                                            </div>
                                                        </div>
                                                        @if (Auth::user()->CanPayByWallet($data['order']->total))
                                                            <div class="col-6 text-center">
                                                                <div class="form-check form-check-inline mb-1">
                                                                    <input name="payment_method" class="form-check-input"
                                                                        type="radio" value="wallet" id="wallet" />
                                                                    <label class="form-check-label" for="wallet">{{
                                                                        __('messages.payUseWallet') }}</label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div id="stripe-form" class="row gx-2 gy-1 ">
                                                        <form class="row gx-2 gy-1 " action="{{ route('client.order.checkout', $data['key']) }}" method="POST" id="payment-form">
                                                            @csrf
                                                            <div class="col-12 mb-2">
                                                                <img src="{{ asset('users-asset/images/stripe.png') }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="col-12 mt-0">
                                                                <label class="form-label" for="card-number">{{ __('messages.cardNumber') }}</label>
                                                                <div id="card-number" class="form-control"></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="form-label" for="card-name"> {{ __('messages.nameOnCard') }}</label>
                                                                <input type="text" id="card-name" class="form-control"
                                                                    required>
                                                            </div>

                                                            <div class="col-6 col-md-3">
                                                                <label class="form-label" for="card-expiry">تاريخ
                                                                    الانتهاء</label>
                                                                <div id="card-expiry" class="form-control"></div>
                                                            </div>
                                                            <div class="col-6 col-md-3">
                                                                <label class="form-label" for="card-cvc">رمز الأمان
                                                                    (CVC)</label>
                                                                <div id="card-cvc" class="form-control"></div>
                                                            </div>
                                                            <div id="card-errors" role="alert" class="col-12 text-danger">
                                                            </div>
                                                            @include('user.client.order.tap_footer')
                                                        </form>
                                                    </div>

                                                    <div id="wallet-form" class="row gx-2 gy-1 ">
                                                        <form class="row gx-2 gy-1 " action="{{ route('client.order.checkout.wallet', $data['key']) }}" method="POST" >
                                                            @csrf
                                                            <input type="hidden" name="total" value="{{$data['order']->total}}">
                                                            <div class="col-12 text-center">
                                                                <span>{{ __('messages.payUseWalletFirst') }}</span>

                                                                <span class="text-primary"> $ {{Auth::user()->wallet(2)->balance}}</span> <br>
                                                                {{ __('messages.payUseWalletSecond') }}
                                                                <span class="text-primary"> $ {{(Auth::user()->wallet(2)->balance-$data['order']->total) }}</span>
                                                            </div>
                                                            @include('user.client.order.tap_footer')
                                                        </form>
                                                    </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7 checkout-options">
                                        <div class="card">
                                            <div class="card-header border-bottom mb-2">
                                                <h3>{{ __('messages.summary_order') }}</h3>
                                            </div>
                                            <div class="card-body">
                                                @if ($data['order']->orderFeatureOptionCount() > 0)
                                                <div class="summary-item">
                                                    <span class="option">
                                                        <h4 class="fw-bolder text-primary">
                                                            ({{ $data['order']->orderFeatureOptionCount() }}) {{
                                                            __('messages.additional_feature') }}
                                                        </h4>
                                                    </span>
                                                </div>
                                                <div class="summary-item">
                                                    <span class="option" dir="ltr">{{
                                                        $data['order']->orderFeatureOptionPrice() }}$ X {{
                                                        $data['order']->video_count }}</span>
                                                    <span class="price" dir="ltr">{{
                                                        $data['order']->orderFeatureOptionPrice() *
                                                        $data['order']->video_count }}$</span>
                                                </div>
                                                @endif
                                                <div class="summary-item">
                                                    <span class="option">
                                                        <h4 class="fw-bolder text-primary">
                                                            ({{ $data['order']->video_count }}) {{
                                                            __('messages.videos_of_type') }} {{
                                                            $data['order']->videoOptionType->name }}
                                                        </h4>
                                                    </span>
                                                </div>
                                                <div class="summary-item">
                                                    <span class="option" dir="ltr">{{
                                                        $data['order']->videoOptionType->price }}$ X {{
                                                        $data['order']->video_count }}</span>
                                                    <span class="price" dir="ltr">{{
                                                        $data['order']->videoOptionType->price *
                                                        $data['order']->video_count }}$</span>
                                                </div>
                                                <div class="summary-item total">
                                                    <span class="option">{{ __('messages.total') }}</span>
                                                    <span class="price" dir="ltr">{{ $data['order']->total }}$</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="w-100 d-flex">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center w-25 text-center">
                                                        <img src="{{ asset('users-asset/images/money_back.png') }}"
                                                            width="150px" class="m-auto" alt="">
                                                    </div>
                                                    <div class="w-75">
                                                        <h3 class="mb-2 text-bold">{{ __('messages.money_back_header')
                                                            }}</h3>
                                                        <p>{{ __('messages.money_back_description') }}</p>
                                                    </div>
                                                </div>
                                                <div class="w-100 text-center">
                                                    <a class="badge badge-light-primary mb-1" href="#">{{
                                                        __('messages.refund_policy') }}</a>
                                                    <a class="badge badge-light-primary mb-1" href="#">{{
                                                        __('messages.privacy_policy') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



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

        if (document.getElementById('stripe').checked) {
            stripe.createToken(cardNumber).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = translateError(result.error.message);
                } else {
                    stripeTokenHandler(result.token);
                }
            });
        } else {
            form.submit();
        }
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

    // Toggle the Stripe form visibility based on selected payment method
    document.querySelectorAll('input[name="payment_method"]').forEach(function(el) {
        el.addEventListener('change', function(event) {
            if (event.target.id === 'stripe') {
                document.getElementById('stripe-form').style.display = 'inline-flex';
                document.getElementById('wallet-form').style.display = 'none';
            } else {
                document.getElementById('stripe-form').style.display = 'none';
                document.getElementById('wallet-form').style.display = 'inline-flex';
            }
        });
    });

    // Initially hide or show the Stripe form based on the selected payment method
    if (document.getElementById('stripe').checked) {
        document.getElementById('stripe-form').style.display = 'inline-flex';
        document.getElementById('wallet-form').style.display = 'none';
    } else {
        document.getElementById('stripe-form').style.display = 'none';
        document.getElementById('wallet-form').style.display = 'inline-flex';
    }
</script>
<script src="{{asset('users-asset/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-wizard.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-number-input.js')}}"></script>
@endsection
