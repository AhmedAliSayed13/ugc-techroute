@extends('website.layouts.master')

@section('style')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />

<link rel="stylesheet" type="text/css" href="{{asset('website/css/base.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/style.css')}}">
<link rel="stylesheet" href="{{asset('website/css/btns.css')}}" />

<link rel="stylesheet" href="{{asset('website/css/for-agency.css')}}" />

@endsection

@section('content')



page code here






@endsection


@section('script')


<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function () {


    $().ready(function () {
        tt = $('.slick-ecommerce').slick({
            // arrows: true,
            loop:true,
            centerPadding: "150px",
            infinite: true,

            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            // centerMode: true,
            // focusOnSelect: true,
            // activeOnSelect:true

              responsive: [

                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,


                  }
                }

              ]
        });
    });


    });

</script>

@endsection
