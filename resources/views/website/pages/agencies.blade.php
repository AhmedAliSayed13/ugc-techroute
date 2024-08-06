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



<section>
    <div class="exclusive-agency">
        <div class="content text-center">

            <span>Billo 💜 Agencies</span>
            <h1>The go-to hub forvideo ads for agencies</h1>
            <video playsinline="true" width="800" style="object-fit: cover" autoplay="true" muted="true" loop="true"
                preload="auto">
                <source src="https://billo.app/wp-content/uploads/2022/08/By_Client_Type_Agencies_MB_01.mp4"
                    type="video/mp4" />
                Sorry, your browser doesn't support embedded videos.
            </video>

            <h6>Gain access to a network of video creators and editors trusted by 17,000+ brands and agencies.</h6>
            <button class="btn main-btn m-auto text-nowrap w-auto">Get exclusive agency offers</button>

        </div>
    </div>
</section>


<div class="container">

    <section class="my-4">
        <div class="row align-items-center">
            <div class="col-md-3">
                <p class="fw-bold">17,000+</p>
                <p>marketing agencies trust Billo</p>
            </div>
            <div class="col-md-9">

                <div class="slick-agency" dir="ltr" style="direction: ltr;">

                    <div class="slide-content mx-2 img-fluid">
                        <img src="https://billo.app/wp-content/uploads/2024/04/adore-me-cropped.svg" alt="" srcset="">
                    </div>
                    <div class="slide-content mx-2 img-fluid">
                        <img src="https://billo.app/wp-content/uploads/2024/05/coola-1.webp" alt="" srcset="">
                    </div>
                    <div class="slide-content mx-2 img-fluid">
                        <img src="	https://billo.app/wp-content/uploads/2024/04/hellofresh-logo-black-1-e1697794896904.webp"
                            alt="" srcset="">
                    </div>
                    <div class="slide-content mx-2 img-fluid">
                        <img src="https://billo.app/wp-content/uploads/2024/05/image-38.webp" alt="" srcset="">
                    </div>
                    <div class="slide-content mx-2 img-fluid">
                        <img src="https://billo.app/wp-content/uploads/2024/04/adore-me-cropped.svg" alt="" srcset="">
                    </div>
                    <div class="slide-content mx-2 img-fluid">
                        <img src="https://billo.app/wp-content/uploads/2024/04/adore-me-cropped.svg" alt="" srcset="">
                    </div>
                    <div class="slide-content mx-2 img-fluid">
                        <img src="https://billo.app/wp-content/uploads/2024/04/adore-me-cropped.svg" alt="" srcset="">
                    </div>
                    <div class="slide-content mx-2 img-fluid">
                        <img src="https://billo.app/wp-content/uploads/2024/04/adore-me-cropped.svg" alt="" srcset="">
                    </div>
                    <div class="slide-content mx-2 img-fluid">
                        <img src="https://billo.app/wp-content/uploads/2024/04/adore-me-cropped.svg" alt="" srcset="">
                    </div>
                    <div class="slide-content mx-2 img-fluid">
                        <img src="https://billo.app/wp-content/uploads/2024/04/adore-me-cropped.svg" alt="" srcset="">
                    </div>



                </div>
            </div>
    </section>

    <section class="my-4">
        <div class="row align-items-center my-2">
            <div class="col-md-4">
                <h1>Get cost-effective video ads for agencies</h1>
                <p>
                    Wondering why our video services are exceptionally affordable? It’s a straightforward process –
                    we
                    cut out the middlemen to bring you cost-effective content fast!

                    At Billo, we specialize in connecting marketing agencies (and eCommerce brands) with an
                    extensive
                    network of vetted video creators.
                </p>
            </div>
            <div class="col-md-8">
                <img src="	https://billo.app/wp-content/uploads/2022/07/home-studios-800x505.png.webp" alt="" srcset=""
                    class="img-fluid">
            </div>
        </div>
    </section>
</div>

<section class="my-4 agencies">

    <div class="bg-light p-5">
        <h1 class="text-center">Why agencies choose Billo for video ads?</h1>

    </div>
    <div class="row justify-content-center bg-light">
        <div class="col-md-3 d-grid gap-4 bg-white">
            <div class="p-5">



                <p class="fw-bold">Budget-friendly video ads</p>
                <p>
                    We offer exclusive partner programs
                    and the biggest possible discounts for marketing
                    agencies to ensure their clients get the best
                    possible deal.
                </p>
            </div>
        </div>

        <div class="col-md-3 d-grid gap-4 bg-white">
            <div class="p-5">


                <p class="fw-bold">Effortless content creation</p>
                <p>
                    Save time, energy, and
                    head-space with a dedicated Billo manager
                    who will take over all the hands-on work
                    of preparing videos for your clients.
                </p>
            </div>
        </div>
        <div class="col-md-3 d-grid gap-4 bg-white">
            <div class="p-5">


                <p class="fw-bold">Vetted creators only</p>
                <p>
                    Forget chasing influencers!
                    We offer a pool of vetted and unique
                    selection of creators who can start
                    working on your video tasks right away.
                </p>
            </div>
        </div>
    </div>
    <div class="text-center">

        <button class="btn outline-btn m-auto text-center">Get video ads for your agency</button>
    </div>
</section>

<div class="container">

    <section class="my-5">
        <div class="row client_review align-items-center">
            <div class="col-md-6 content_review">
                <h1>Our creative asset production process is a breeze now!</h1>

                <p>When budget, timing constraints, or ownership concerns hold us back from working with influencers,
                    we recommend Billo. Billo allows us to work with creators to develop native feeling content.</p>

                <p>While these creatives don’t have the polish of a 30s TV spot, these lo-fi creatives develop
                    authentic bonds with audiences and,importantly, mesh with other content found on social
                    platforms while still standing out enough to convert.</p>
            </div>
            <div class="col-md-6 media_review">
                <img decoding="async" src="https://billo.app/wp-content/uploads/2022/07/pointing-arrow.svg"
                    data-orig-src="https://billo.app/wp-content/uploads/2022/07/pointing-arrow.svg"
                    class="pin1 lazyloaded" alt="For Agencies">
                <img decoding="async" src="https://billo.app/wp-content/uploads/2022/07/lines.svg"
                    data-orig-src="https://billo.app/wp-content/uploads/2022/07/lines.svg" class="pin2 lazyloaded"
                    alt="For Agencies">
                <div class="thumbnail_client">

                    <img class="image_client"
                        src="https://billo.app/wp-content/uploads/2023/01/1645737319959-768x768.jpeg" alt="" srcset="">
                    <div class="play">
                        <img class=" lazyloaded img-fluid" decoding="async"
                            src="https://billo.app/wp-content/uploads/2022/07/play.svg"
                            data-orig-src="https://billo.app/wp-content/uploads/2022/07/play.svg" alt="For Agencies">
                    </div>

                    <div class="client">Amanda Sousa, Design Team Lead, Gupta Media</div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-4 ">
        <div class="agency-form">
            <h1 class="agency-form-title">Interested in exclusive offers we have for marketing agencies?</h1>
            <p>Get access to the biggest possible discounts and our generous referral program!</p>
            <div class="row">

                <div class="col-md-6 my-2">

                    <label class="fw-bold mb-2">Agency Name</label>
                    <input type="text" class="form-control agency-form-input" placeholder="Your Company Name*">
                </div>
                <div class="col-md-6 my-2">

                    <label class="fw-bold mb-2">Agency Website</label>
                    <input type="text" class="form-control agency-form-input" placeholder="Your Company Website*">
                </div>
                <div class="col-md-6 my-2">

                    <label class="fw-bold mb-2">Email Address</label>
                    <input type="text" class="form-control agency-form-input" placeholder="Your Email Address*">
                </div>
                <div class="col-md-6 my-2">

                    <label class="fw-bold mb-2">Phone</label>
                    <input type="text" class="form-control agency-form-input" placeholder="Your Phone Number*">
                </div>


            </div>
            <button class="btn sec-main-btn mt-4">Submit</button>
        </div>

    </section>
</div>




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
            $('.slick-agency').slick({
                // arrows: true,
                loop: true,
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
