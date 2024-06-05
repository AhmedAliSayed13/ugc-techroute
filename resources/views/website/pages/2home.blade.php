@extends('website.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.5.8/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.5.8/slick/slick-theme.css" />
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 home-div1">
            <header class="text-center header-ugc">
                <span>{{__('website.UGCMarketplace')}}</span>
                <br>
                {{__('website.ForVideoAds')}}
            </header>
            <p>
                {{__('website.EffortlesslyExpandYourMarketingWithMadeToOrderContent')}}
            </p>
            <a class="btn btn-primary" href="">{{__('website.orderNow')}}</a>
        </div>
    </div>
    <div class="row">

        <div class="col-12 home-div2">
            <div class="carousel">
                <video muted="" playsinline="" autoplay="" loop="" preload="none"
                    poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                    data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                    data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                    <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4" type="video/mp4">
                </video>
                <video muted="" playsinline="" autoplay="" loop=""
                    poster="https://billo.app/wp-content/uploads/2023/12/3.webp"
                    data-video-small="https://billo.app/wp-content/uploads/2023/12/3-184-x-330.mp4"
                    data-video-url="https://billo.app/wp-content/uploads/2023/12/3-405-×-721.mp4">
                    <source src="https://billo.app/wp-content/uploads/2023/12/3-184-x-330.mp4" type="video/mp4">
                </video>
                <video muted="" playsinline="" autoplay="" loop="" preload="none"
                    poster="https://billo.app/wp-content/uploads/2023/10/4.webp"
                    data-video-small="https://billo.app/wp-content/uploads/2023/10/Jessica_A_328px-1.mp4"
                    data-video-url="https://billo.app/wp-content/uploads/2023/10/Jessica-A.mp4">
                    <source src="https://billo.app/wp-content/uploads/2023/10/Jessica_A_328px-1.mp4" type="video/mp4">
                </video>
                <video muted="" playsinline="" autoplay="" loop="" preload="none"
                    poster="https://billo.app/wp-content/uploads/2023/10/9.webp"
                    data-video-small="https://billo.app/wp-content/uploads/2023/10/Austin_G_328px.mp4"
                    data-video-url="https://billo.app/wp-content/uploads/2023/10/Austin-G.mp4">
                    <source src="https://billo.app/wp-content/uploads/2023/10/Austin_G_328px.mp4" type="video/mp4">
                </video>
                <video muted="" playsinline="" autoplay="" loop="" preload="none"
                    poster="https://billo.app/wp-content/uploads/2023/10/9.webp"
                    data-video-small="https://billo.app/wp-content/uploads/2023/10/Austin_G_328px.mp4"
                    data-video-url="https://billo.app/wp-content/uploads/2023/10/Austin-G.mp4">
                    <source src="https://billo.app/wp-content/uploads/2023/10/Austin_G_328px.mp4" type="video/mp4">
                </video>
                <video muted="" playsinline="" autoplay="" loop="" preload="none"
                    poster="https://billo.app/wp-content/uploads/2023/10/10.webp"
                    data-video-small="https://billo.app/wp-content/uploads/2023/10/McKenna_I_328px.mp4"
                    data-video-url="https://billo.app/wp-content/uploads/2023/10/McKenna-L.mp4">
                    <source src="https://billo.app/wp-content/uploads/2023/10/McKenna_I_328px.mp4" type="video/mp4">
                </video>
                <video muted="" playsinline="" autoplay="" loop="" preload="none"
                    poster="https://billo.app/wp-content/uploads/2023/10/deja-g.jpg"
                    data-video-small="https://billo.app/wp-content/uploads/2023/10/Deja_G_328px-1.mp4"
                    data-video-url="https://billo.app/wp-content/uploads/2023/10/Deja-G.mp4">
                    <source src="https://billo.app/wp-content/uploads/2023/10/Deja_G_328px-1.mp4" type="video/mp4">
                </video>
            </div>
        </div>

    </div>

</div>

<div class="container">
    <div class="row home-div3">

        <div class="col-lg-2 ">
            <header>
            17,000+
            <span>
            عميل
            </span>
        </header>

        </div>
        <div class="col-lg-10 ">

<div id="ourclients">

  <div class="clients-wrap">
    <ul id="clientlogo" class="clearfix">
      <li>
        <img src="https://i.ibb.co/N92D9G3/Screenshot-2020-10-20-My-Brand-New-Logo-My-Brand-New-Logo-Logo-design-proposals-removebg-preview.png" alt="Logo">
      </li>
      <li>
        <img src="https://i.ibb.co/G31gG9y/Screenshot-2020-10-20-My-Brand-New-Logo-My-Brand-New-Logo-Create-a-logo-removebg-preview.png" alt="Logo">
      </li>
      <li>
        <img src="https://i.ibb.co/jkSTBVP/Screenshot-2020-10-20-My-Brand-New-Logo-My-Brand-New-Logo-Logo-design-proposals-2-removebg-preview.png" alt="Logo">
      </li>
      <li>
        <img src="https://i.ibb.co/KNFTLHv/Screenshot-2020-10-20-My-Brand-New-Logo-My-Brand-New-Logo-Logo-design-proposals-1.png" alt="Logo">
      </li>
      <li>
        <img src="https://i.ibb.co/G31gG9y/Screenshot-2020-10-20-My-Brand-New-Logo-My-Brand-New-Logo-Create-a-logo-removebg-preview.png" alt="Logo" hspace='100'>
      </li>
      <li>
        <img src="https://i.ibb.co/G31gG9y/Screenshot-2020-10-20-My-Brand-New-Logo-My-Brand-New-Logo-Create-a-logo-removebg-preview.png" alt="Logo" hspace='100'>
      </li>
     <li>
     </li>
    </ul>
  </div>
</div>

        </div>

    </div>
</div>
@endsection


@section('script')
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.5.8/slick/slick.min.js"></script>


<script>
    $(document).ready(function(){
        $('.carousel').slick({
            dots: true,
            // infinite: true,
            // speed: 300,
            // slidesToShow: 1,
            // centerMode: true,
            // variableWidth: true
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });

        $('.logo-slider').slick({
            dots: true,
            // infinite: true,
            slidesToShow: 7,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });


    });


    document.addEventListener("DOMContentLoaded", function() {

            jQuery('.carousel .slick-dots li:nth-child(2) button').click();
            // jQuery('.logo-slider .slick-dots li:nth-child(2) button').click();
    });
</script>
<script>
    $(function() {
  var $clientslider = $('#clientlogo');
  var clients = $clientslider.children().length;
  var clientwidth = (clients * 220);
  $clientslider.css('width', clientwidth);
  var rotating = true;
  var clientspeed = 1800;
  var seeclients = setInterval(rotateClients, clientspeed);
  $(document).on({
    mouseenter: function() {
      rotating = false;
    },
    mouseleave: function() {
      rotating = true;
    }
  }, '#ourclients');
  function rotateClients() {
    if (rotating != false) {
      var $first = $('#clientlogo li:first');
      $first.animate({
        'margin-left': '-220px'
      }, 2000, function() {
        $first.remove().css({
          'margin-left': '0px'
        });
        $('#clientlogo li:last').after($first);
      });
    }
  }
});
</script>
@endsection
