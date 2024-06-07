@extends('website.layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/extensions/nouislider.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('users-asset/css-rtl/plugins/extensions/ext-component-sliders.css')}}">
@endsection


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 price-div1">
            <header class="text-center header-ugc">
                تسعير متدرج بناءً على الأداء
            </header>
            <p>
                احصل على توصية بحزمة تتناسب مع ميزانيتك وأهدافك في الأداء. قم بتحريك الشريط واختر تفضيلات الفيديو الخاصة
                بك لمقارنة الحزم والتوفير.
            </p>

        </div>
    </div>
    <div class="row price-div2">
        <div class="col-10 m-auto">
            <div class="row">

                <div class="col-4 result-div">
                    <div class="blue-div">
                        <header>الإطلاق للأفراد والفرق</header>
                        <p>الإطلاق للأفراد والفرق التي تعمل بجد لتحقيق النجاح بموارد محدودة</p>
                    </div>
                    <div class="details-div">
                        <p class="mt-2">حتى </p>
                        <p class="mt-3"><span>100</span> فيديو </p>
                        <p class="mt-1">$<b class="slider-value">500</b></p>
                        <p class="mt-1"> إضف إلى الرصيد:
                            <b class="slider-value">500</b>
                            دولار
                        </p>
                        <div class="text-center mt-2">
                            <a class="btn btn-relief-primary mr-3 ml-3" href="#"
                                role="button">{{__('website.orderNow')}}</a>
                        </div>

                    </div>

                </div>
                <div class="col-8 select-div">
                    <div class="row">
                        <div class="col-12">
                            <div class="price-slider">
                                <header class="price-title">حدد ميزانيتك.</header>
                                <div class="price-slider-body">
                                    <div class="range-slider mt-2" id="price-slider"></div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-3">
                            <div class="price-slider-result bg-div-gray">

                                <header>التوفير النقدي

                                    <i data-feather='info'></i>
                                </header>
                                <p class="color-text">$35,972</p>
                            </div>
                        </div>
                        <div class=" col-3">
                            <div class="price-slider-result bg-div-gray">

                                <header>التوفير النقدي
                                    <i data-feather='info'></i>
                                </header>
                                <p class="color-text">$35,972</p>
                            </div>
                        </div>
                        <div class=" col-3">
                            <div class="price-slider-result bg-div-gray">
                                <header>التوفير النقدي
                                    <i data-feather='info'></i>
                                </header>
                                <p class="color-text">$35,972</p>
                            </div>
                        </div>
                        <div class=" col-3">
                            <div class="price-slider-result bg-div-gray">
                                <header>التوفير النقدي
                                    <i data-feather='info'></i>
                                </header>
                                <p class="color-text">$35,972</p>
                            </div>
                        </div>

                    </div>




                </div>



            </div>

        </div>

    </div>

    <div class="row price-div3">
        <div class="col-8 mt-3 m-auto">
            <div class="row">
                <div class="col-12 bg-div-gray">
                    <header></header>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection


@section('script')
<script src="{{asset('users-asset/vendors/js/extensions/wNumb.min.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/extensions/nouislider.min.js')}}"></script>
{{-- <script src="{{asset('users-asset/js/scripts/pages/app-ecommerce.js')}}"></script> --}}
<script>
    priceSlider = document.getElementById('price-slider');

                noUiSlider.create(priceSlider, {
      start: [500], // Initial value
      range: {
        'min': [500],
        '20%': [1000],
        '40%': [2500],
        '60%': [5000],
        '80%': [10000],
        'max': [15000]
      },
      snap: true,
      format: {
        to: function (value) {
          return value.toFixed(0);
        },
        from: function (value) {
          return Number(value);
        }
      },
      pips: {
        mode: 'values',
        values: [500, 1000, 2500, 5000, 10000, 15000],
        density: 20 // Hide density pips
      }
    });

    // Display the current value

//    $('.slider-value').noUiSlider.on('update', function (values, handle) {
//       sliderValue.innerHTML = values[handle];
//     });
var sliderValues = document.getElementsByClassName('slider-value');
    priceSlider.noUiSlider.on('update', function (values, handle) {
      for (var i = 0; i < sliderValues.length; i++) {
        sliderValues[i].innerHTML = values[handle];
      }
    });

</script>
@endsection
