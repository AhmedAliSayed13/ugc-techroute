@extends('user.client.layouts.master')

@section('style')
<meta name="csrf-token" content="{{ csrf_token() }}">
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

                                <form action="{{route('client.order.details')}}" method="POST" id="formDetails">
                                    @csrf

                                    <input type="hidden" id="videoPriceInput" name="video_price" required>
                                    <input type="hidden" id="totalInput" name="total" required>

                                    <div class="content-header">
                                        <h5 class="mb-0">تفاصيل الطلب</h5>
                                        <small class="text-muted">إختار تفاصيل الطلب</small>
                                    </div>
                                    <div class="row">
                                        <div class=" col-md-12">



                                            <div class="card-header">
                                                <h4 class="card-title mb-1">نوع الفيديو</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row custom-options-checkable g-1">
                                                    @foreach ($data['videoTypes'] as $key=>$videoType)


                                                    <div class="col-md-3">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="video_option_type" id="videoType{{ $videoType->id }}"
                                                            value="{{ $videoType->id }}" @if($key==0) checked @endif />
                                                        <label class="custom-option-item p-1"
                                                            for="videoType{{ $videoType->id }}">
                                                            <span
                                                                class="d-flex justify-content-between flex-wrap mb-50">
                                                                <span class="fw-bolder">{{ $videoType->name
                                                                    }}</span>
                                                                <span class="fw-bolder">${{ $videoType->price
                                                                    }}</span>
                                                            </span>
                                                            {{-- <small class="d-block">Get 1 project with 1 team
                                                                member.</small> --}}
                                                        </label>

                                                    </div>
                                                    @endforeach
                                                    @error('video_option_type')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-header">
                                                <h4 class="card-title mb-1">عدد الفيديوهات / المبدعين</h4>
                                                <p>يجب عليك تقديم منتجك لكل مبدع مختار</p>
                                            </div>
                                            <div class="card-body ">


                                                <div class="input-group m-auto">
                                                    <input type="number" min="1" name="video_count"
                                                        class="touchspin-color" value="1"
                                                        data-bts-button-down-class="btn btn-primary"
                                                        data-bts-button-up-class="btn btn-primary" />
                                                </div>
                                                @error('video_count')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-lg-12">

                                            <div class="card-header">
                                                <h4 class="card-title">مدة الفيديو</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row custom-options-checkable g-1">
                                                    @foreach ($data['videoDurations'] as $key => $videoDuration)
                                                    <div class="col-md-4">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="video_option_duration"
                                                            value="{{ $videoDuration->id }}"
                                                            id="videoDuration{{$videoDuration->id }}" @if($key==0)
                                                            checked @endif />
                                                        <label class="custom-option-item text-center p-1"
                                                            for="videoDuration{{$videoDuration->id }}">
                                                            {{-- <i data-feather='clock'></i> --}}
                                                            <i data-feather="clock" class="font-large-1 mb-75"></i>
                                                            <span
                                                                class="custom-option-item-title h4 d-block">{{$videoDuration->time
                                                                }} ثانية</span>
                                                            <small>{{
                                                                generateTextTimePlus($videoDuration->price)
                                                                }}</small>
                                                        </label>

                                                    </div>
                                                    @endforeach
                                                    @error('video_option_duration')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-lg-12">

                                            <div class="card-header">
                                                <h4 class="card-title">ابعاد الفيديو</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row custom-options-checkable g-1">
                                                    @foreach ($data['videoAspects'] as $key => $videoAspect)
                                                    <div class="col-md-6">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="video_option_aspect" value="{{ $videoAspect->id }}"
                                                            id="videoAspect{{$videoAspect->id }}" @if($key==0) checked
                                                            @endif />
                                                        <label class="custom-option-item text-center p-1"
                                                            for="videoAspect{{$videoAspect->id }}">

                                                            <i data-feather="play" class="font-large-1 mb-75"></i>
                                                            <span
                                                                class="custom-option-item-title h4 d-block">{{$videoAspect->name
                                                                }} </span>
                                                            <small>{{ $videoAspect->describe }}</small>
                                                            <p><small>{{ generateTextTimePlus($videoAspect->price)
                                                                    }}</small></p>
                                                        </label>

                                                    </div>
                                                    @endforeach
                                                    @error('video_option_aspect')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center mt-2">

                                            <h4 class="mb-0 text-muted" dir="ltr">
                                                <span id="calculation-video-count"></span>
                                                فيديو
                                                x
                                                <span id="calculation-price-txt"></span>

                                            </h4>
                                            <h3 class="">
                                                اجمالي: <span id="calculation-total-txt"></span>
                                            </h3>
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

<!-- BEGIN: Page Vendor JS-->
{{-- <script src="{{asset('users-asset/vendors/js/ui/jquery.sticky.js')}}"></script> --}}
<script src="{{asset('users-asset/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
{{-- <script src="{{asset('users-asset/vendors/js/forms/select/select2.full.min.js')}}"></script> --}}
<script src="{{asset('users-asset/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
{{-- <script src="{{asset('users-asset/js/core/app-menu.js')}}"></script>
<script src="{{asset('users-asset/js/core/app.js')}}"></script> --}}
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('users-asset/js/scripts/forms/form-wizard.js')}}"></script>


<script src="{{asset('users-asset/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>

<script src="{{asset('users-asset/js/scripts/forms/form-number-input.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function() {


        function sendAjaxRequest(){
            var formData = $('#formDetails').serialize(); // Serialize the form data

            $.ajax({
                url: '{{ route("client.order.calculation.price") }}',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {

                    $('#calculation-video-count').text(response['videoCount']);
                    $('#calculation-price-txt').text(response['videoPrice']);
                    $('#calculation-total-txt').text('$'+response['total']);
                    $('#videoPriceInput').val(response['videoPrice']);
                    $('#totalInput').val(response['total']);




                },
                error: function(xhr) {

                    console.log(xhr.responseText);
                }
            });
        }
        sendAjaxRequest();
        $('form input, form select, form textarea').on('change', function() {
            sendAjaxRequest();
        });
    });
</script>


@endsection