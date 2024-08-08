@extends('website.layouts.master')
@section('style')


<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/vendors-rtl.min.css')}}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/themes/bordered-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/themes/semi-dark-layout.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/core/menu/menu-types/horizontal-menu.css')}}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/custom-rtl.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/assets/css/style-rtl.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/custom-website.css')}}">
<!-- END: Custom CSS-->
@if (App::getLocale() === 'en')
<link href="{{ asset('users-asset/system/css/rtl.css') }}" rel="stylesheet">
@endif

<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/extensions/nouislider.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('users-asset/css-rtl/plugins/extensions/ext-component-sliders.css')}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

@endsection


@section('content')

code here

@endsection


@section('script')
<script src="{{asset('users-asset/vendors/js/extensions/wNumb.min.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/extensions/nouislider.min.js')}}"></script>
{{-- <script src="{{asset('users-asset/js/scripts/pages/app-ecommerce.js')}}"></script> --}}
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
<script>
    var swiper = new Swiper('.swiper-container', {
    slidesPerView: 6,
    spaceBetween: 1,
    loop: true,
    autoplay: {
        delay: 5000,  // Delay between transitions in milliseconds
        disableOnInteraction: false,
      },
      speed: 2000,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });
</script>
@endsection
