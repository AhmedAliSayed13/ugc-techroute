@extends('website.layouts.master')

@section('style')

{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> --}}

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />

<link rel="stylesheet" type="text/css" href="{{asset('website/css/base.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/btns.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('website/css/home.css')}}">
@endsection

@section('content')

<div class="container">
    <section class="my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="text-md-start text-center mb-2">
                    <h1>
                        Excel on paid social with
                        <span class="authentic-creator">authentic creator</span> videos
                    </h1>
                    <p>
                        200,000+ videos created. 22,000 brands served. You too can match
                        with our talented creators and get authentic videos optimized
                        for social ads performance. On time, on demand, and starting at
                        just $99/video.
                    </p>
                    <button class="btn main-btn m-md-0 m-auto">See Pricing</button>
                </div>
                <div class="social my-4">
                    <p>Experts in:</p>
                    <div class="experts-in-img">
                        <img src="https://billo.app/wp-content/uploads/2024/07/Meta_Platforms_Inc._logo-1.webp"
                            loading="lazy" class="img-fluid mx-2" />
                        <img src="https://billo.app/wp-content/uploads/2024/07/TikTok_logo-1.webp" loading="lazy"
                            class="img-fluid mx-2" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">




                <!-- <div class="swiper-container">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <video class="swiper-video" controls poster="poster1.jpg">
                          <source src="video1.mp4" type="video/mp4">
                        </video>
                      </div>
                      <div class="swiper-slide">
                        <video class="swiper-video" controls poster="poster2.jpg">
                          <source src="video2.mp4" type="video/mp4">
                        </video>
                      </div>
                      <div class="swiper-slide">
                        <video class="swiper-video" controls poster="poster3.jpg">
                          <source src="video3.mp4" type="video/mp4">
                        </video>
                      </div>

                    </div>
                  </div> -->
                <!-- <div
                    class="swiper swiper-videos swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-8d101bbcd81e18181" aria-live="off"
                        style="transition-duration: 0ms; transform: translate3d(488.667px, 0px, 0px); transition-delay: 0ms;">

                        <div class="swiper-slide" role="group" aria-label="7 / 10" data-swiper-slide-index="6"
                            style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="8 / 10" data-swiper-slide-index="7"
                            style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="9 / 10" data-swiper-slide-index="8"
                            style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="10 / 10"
                            data-swiper-slide-index="9" style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 10"
                            data-swiper-slide-index="0" style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 10"
                            data-swiper-slide-index="1" style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="3 / 10" data-swiper-slide-index="2"
                            style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 10" data-swiper-slide-index="3"
                            style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="5 / 10" data-swiper-slide-index="4"
                            style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="6 / 10" data-swiper-slide-index="5"
                            style="width: 121.167px; margin-left: 1px;">
                            <video muted="" playsinline="" autoplay="" loop="" preload="none"
                                poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div> -->



                <div class="slick-carousel" dir="ltr" style="direction: ltr;">
                    <div>
                        <div class="slide-content" onclick="playVideo('video1')">
                            <video autoplay="true" class="allvideos" muted="" playsinline="" loop="" preload="none"
                                id="video1" poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div>
                        <div class="slide-content" onclick="playVideo('video2')">


                            <video autoplay="true" class="lazy-video allvideos" playsinline="" id="video2" muted=""
                                loop="" preload="none" poster="https://billo.app/wp-content/uploads/2024/06/6.webp">
                                <source src="https://billo.app/wp-content/uploads/2024/07/6.mp4" type="video/mp4">
                            </video>


                        </div>
                    </div>
                    <div>
                        <div class="slide-content" onclick="playVideo('video3')">

                            <video autoplay="true" class="allvideos lazy-video" muted="" loop="" id="video3" preload=""
                                poster="https://billo.app/wp-content/uploads/2024/06/3.webp">
                                <source src="https://billo.app/wp-content/uploads/2024/07/3.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <section class="my-5">
        <h3 class="text-center">
            البحث عن الإبداعات الفائزة من المحتوى الذي ينشئه المستخدمون (UGC).
        </h3>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="six-box-div">
                    <img src="https://billo.app/wp-content/uploads/2024/07/Frame-1214135875.webp" alt="" srcset="" />
                    <h5 class="mt-4">مبدعون لكل علامة تجارية</h5>
                    <p>
                        تبحث عن مبدعي المحتوى القدامى؟ مبدعين لديهم وشوم؟ شيء آخر
                        تمامًا؟ اختر من بين أكثر من 5000 مبدع يتميزون بتنوع
                        الديموغرافيات والأساليب والاهتمامات، وانتقِ أولئك الذين يتمتعون
                        بالخلفية والمهارات والمعدات التي تتطلبها رؤيتك.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="six-box-div">
                    <img src="https://billo.app/wp-content/uploads/2024/07/Frame-1214135875.webp" alt="" srcset="" />
                    <h5 class="mt-4">مبدعون لكل علامة تجارية</h5>
                    <p>
                        تبحث عن مبدعي المحتوى القدامى؟ مبدعين لديهم وشوم؟ شيء آخر
                        تمامًا؟ اختر من بين أكثر من 5000 مبدع يتميزون بتنوع
                        الديموغرافيات والأساليب والاهتمامات، وانتقِ أولئك الذين يتمتعون
                        بالخلفية والمهارات والمعدات التي تتطلبها رؤيتك.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="six-box-div">
                    <img src="https://billo.app/wp-content/uploads/2024/07/Frame-1214135875.webp" alt="" srcset="" />
                    <h5 class="mt-4">مبدعون لكل علامة تجارية</h5>
                    <p>
                        تبحث عن مبدعي المحتوى القدامى؟ مبدعين لديهم وشوم؟ شيء آخر
                        تمامًا؟ اختر من بين أكثر من 5000 مبدع يتميزون بتنوع
                        الديموغرافيات والأساليب والاهتمامات، وانتقِ أولئك الذين يتمتعون
                        بالخلفية والمهارات والمعدات التي تتطلبها رؤيتك.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="six-box-div">
                    <img src="https://billo.app/wp-content/uploads/2024/07/Frame-1214135875.webp" alt="" srcset="" />
                    <h5 class="mt-4">مبدعون لكل علامة تجارية</h5>
                    <p>
                        تبحث عن مبدعي المحتوى القدامى؟ مبدعين لديهم وشوم؟ شيء آخر
                        تمامًا؟ اختر من بين أكثر من 5000 مبدع يتميزون بتنوع
                        الديموغرافيات والأساليب والاهتمامات، وانتقِ أولئك الذين يتمتعون
                        بالخلفية والمهارات والمعدات التي تتطلبها رؤيتك.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="six-box-div">
                    <img src="https://billo.app/wp-content/uploads/2024/07/Frame-1214135875.webp" alt="" srcset="" />
                    <h5 class="mt-4">مبدعون لكل علامة تجارية</h5>
                    <p>
                        تبحث عن مبدعي المحتوى القدامى؟ مبدعين لديهم وشوم؟ شيء آخر
                        تمامًا؟ اختر من بين أكثر من 5000 مبدع يتميزون بتنوع
                        الديموغرافيات والأساليب والاهتمامات، وانتقِ أولئك الذين يتمتعون
                        بالخلفية والمهارات والمعدات التي تتطلبها رؤيتك.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="six-box-div">
                    <img src="https://billo.app/wp-content/uploads/2024/07/Frame-1214135875.webp" alt="" srcset="" />
                    <h5 class="mt-4">مبدعون لكل علامة تجارية</h5>
                    <p>
                        تبحث عن مبدعي المحتوى القدامى؟ مبدعين لديهم وشوم؟ شيء آخر
                        تمامًا؟ اختر من بين أكثر من 5000 مبدع يتميزون بتنوع
                        الديموغرافيات والأساليب والاهتمامات، وانتقِ أولئك الذين يتمتعون
                        بالخلفية والمهارات والمعدات التي تتطلبها رؤيتك.
                    </p>
                </div>
            </div>
        </div>

        <button class="btn main-btn mt-5 m-auto">See Pricing</button>
    </section>

    <section class="my-5">
        <h3 class="text-center">Here’s how others succeed with Billo</h3>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="case-study-box">
                    <a href="https://billo.app/pineapple-products-case-study/">
                        <img class="lazyloaded" decoding="async"
                            src="https://billo.app/wp-content/uploads/2024/06/Asset-min-1.jpg"
                            data-orig-src="https://billo.app/wp-content/uploads/2024/06/Asset-min-1.jpg"
                            alt="Billo.app | Best UGC Videos Platform" />
                    </a>
                    <div class="case-study-box-text-div">
                        <h5 data-fontsize="44" style="--fontSize: 44; line-height: 1.23" data-lineheight="54.12px"
                            class="fusion-responsive-typography-calculated">
                            10.75%
                        </h5>
                        <p>ROI increase with Billo videos</p>
                    </div>
                    <h4 data-fontsize="26" style="--fontSize: 26; line-height: 1.23" data-lineheight="31.98px"
                        class="fusion-responsive-typography-calculated">
                        Supplement brand spikes sales and engagement with Billo
                    </h4>
                    <p>
                        Pineapple beefed up customer engagement resulting in a 10.75%
                        ROI increase through varied, strategic placement of Billo
                        videos.
                    </p>
                    <a href="https://billo.app/pineapple-products-case-study/">Read story</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="case-study-box">
                    <a href="https://billo.app/pineapple-products-case-study/">
                        <img class="lazyloaded" decoding="async"
                            src="https://billo.app/wp-content/uploads/2024/06/Asset-min-1.jpg"
                            data-orig-src="https://billo.app/wp-content/uploads/2024/06/Asset-min-1.jpg"
                            alt="Billo.app | Best UGC Videos Platform" />
                    </a>
                    <div class="case-study-box-text-div">
                        <h5 data-fontsize="44" style="--fontSize: 44; line-height: 1.23" data-lineheight="54.12px"
                            class="fusion-responsive-typography-calculated">
                            10.75%
                        </h5>
                        <p>ROI increase with Billo videos</p>
                    </div>
                    <h4 data-fontsize="26" style="--fontSize: 26; line-height: 1.23" data-lineheight="31.98px"
                        class="fusion-responsive-typography-calculated">
                        Supplement brand spikes sales and engagement with Billo
                    </h4>
                    <p>
                        Pineapple beefed up customer engagement resulting in a 10.75%
                        ROI increase through varied, strategic placement of Billo
                        videos.
                    </p>
                    <a href="https://billo.app/pineapple-products-case-study/">Read story</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="case-study-box">
                    <a href="https://billo.app/pineapple-products-case-study/">
                        <img class="lazyloaded" decoding="async"
                            src="https://billo.app/wp-content/uploads/2024/06/Asset-min-1.jpg"
                            data-orig-src="https://billo.app/wp-content/uploads/2024/06/Asset-min-1.jpg"
                            alt="Billo.app | Best UGC Videos Platform" />
                    </a>
                    <div class="case-study-box-text-div">
                        <h5 data-fontsize="44" style="--fontSize: 44; line-height: 1.23" data-lineheight="54.12px"
                            class="fusion-responsive-typography-calculated">
                            10.75%
                        </h5>
                        <p>ROI increase with Billo videos</p>
                    </div>
                    <h4 data-fontsize="26" style="--fontSize: 26; line-height: 1.23" data-lineheight="31.98px"
                        class="fusion-responsive-typography-calculated">
                        Supplement brand spikes sales and engagement with Billo
                    </h4>
                    <p>
                        Pineapple beefed up customer engagement resulting in a 10.75%
                        ROI increase through varied, strategic placement of Billo
                        videos.
                    </p>
                    <a href="https://billo.app/pineapple-products-case-study/">Read story</a>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <h3>One platform, simple process</h3>
        <p>Order creator videos in just 4 steps:</p>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="four-step-box">
                    <div class="four-step-box-left">
                        <p>1.</p>
                    </div>
                    <div class="four-step-box-right">
                        <h5 data-fontsize="21" style="--fontSize: 21; line-height: 1.24" data-lineheight="26px"
                            class="fusion-responsive-typography-calculated">
                            Decide what you need
                        </h5>
                        <p>
                            Choose between UGC video ads and organic content, select the
                            video details, and decide how many videos you want to order.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="four-step-box">
                    <div class="four-step-box-left">
                        <p>2.</p>
                    </div>
                    <div class="four-step-box-right">
                        <h5 data-fontsize="21" style="--fontSize: 21; line-height: 1.24" data-lineheight="26px"
                            class="fusion-responsive-typography-calculated">
                            Decide what you need
                        </h5>
                        <p>
                            Choose between UGC video ads and organic content, select the
                            video details, and decide how many videos you want to order.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="four-step-box">
                    <div class="four-step-box-left">
                        <p>3.</p>
                    </div>
                    <div class="four-step-box-right">
                        <h5 data-fontsize="21" style="--fontSize: 21; line-height: 1.24" data-lineheight="26px"
                            class="fusion-responsive-typography-calculated">
                            Decide what you need
                        </h5>
                        <p>
                            Choose between UGC video ads and organic content, select the
                            video details, and decide how many videos you want to order.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="four-step-box">
                    <div class="four-step-box-left">
                        <p>4.</p>
                    </div>
                    <div class="four-step-box-right">
                        <h5 data-fontsize="21" style="--fontSize: 21; line-height: 1.24" data-lineheight="26px"
                            class="fusion-responsive-typography-calculated">
                            Decide what you need
                        </h5>
                        <p>
                            Choose between UGC video ads and organic content, select the
                            video details, and decide how many videos you want to order.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <h3 class="text-center">Why Billo?</h3>
        <p class="text-center">
            Here’s how you benefit when you order high-performing Billo videos.
        </p>
        <div class="mt-5">
            <div class="table-responsive">
                <table class="table table-striped table-vidoo">
                    <thead class="thead-vidoo">
                        <tr class="vidoo-compare-tr-head">
                            <th class="vidoo-first-th-width"></th>
                            <th class="background-for-vidoo-in-table all-next-vidoo-width">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/04/logo.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/04/logo.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </th>
                            <th class="all-next-vidoo-width">Influencers</th>
                            <th class="all-next-vidoo-width">Production agency</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="vidoo-compare-tr-body">
                            <td class="all-next-vidoo-width">Cost-effective</td>
                            <td class="all-next-vidoo-width background-for-billo-in-table">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Check-circle-filled.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Check-circle-filled.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </td>

                            <td class="all-next-vidoo-width">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </td>

                            <td class="all-next-vidoo-width">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </td>
                        </tr>

                        <tr class="vidoo-compare-tr-body">
                            <td class="all-next-vidoo-width">Cost-effective</td>
                            <td class="all-next-vidoo-width background-for-billo-in-table">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Check-circle-filled.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Check-circle-filled.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </td>

                            <td class="all-next-vidoo-width">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </td>

                            <td class="all-next-vidoo-width">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </td>
                        </tr>
                        <tr class="vidoo-compare-tr-body">
                            <td class="all-next-vidoo-width">Cost-effective</td>
                            <td class="all-next-vidoo-width background-for-billo-in-table">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Check-circle-filled.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Check-circle-filled.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </td>

                            <td class="all-next-vidoo-width">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </td>

                            <td class="all-next-vidoo-width">
                                <img class="ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Close_round.svg"
                                    alt="Billo.app | Best UGC Videos Platform" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="my-5">

        <h3 class="text-center">Discover authentic faces for any niche</h3>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="text-md-start text-center mb-2">
                    <h5>5,000+ vetted creators to choose from</h5>
                    <p>
                        Tap into a vast network of US-based creators, hand-picked for exceptional quality.
                        Find your perfect match across a number of demographics, styles, and niches to get
                        your brand noticed on TikTok and Meta.
                    </p>

                    <div class="discover-box-with-icons">
                        <div class="discover-box">
                            <div class="discover-box-left">
                                <img class=" ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Facebook-25.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Facebook-25.svg"
                                    alt="Billo.app | Best UGC Videos Platform">
                            </div>
                            <div class="discover-box-right">
                                <h5 data-fontsize="21" style="--fontSize: 21; line-height: 1.24;" data-lineheight="26px"
                                    class="fusion-responsive-typography-calculated">4.95/5
                                </h5>
                                <p>Average user rating</p>
                            </div>
                        </div>
                        <div class="discover-box">
                            <div class="discover-box-left">
                                <img class=" ls-is-cached lazyloaded" decoding="async"
                                    src="https://billo.app/wp-content/uploads/2024/06/Facebook-26.svg"
                                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Facebook-26.svg"
                                    alt="Billo.app | Best UGC Videos Platform">
                            </div>
                            <div class="discover-box-right">
                                <h5 data-fontsize="21" style="--fontSize: 21; line-height: 1.24;" data-lineheight="26px"
                                    class="fusion-responsive-typography-calculated">18-70
                                </h5>
                                <p>Age of creators</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn sec-button m-auto">See Pricing</button>
                </div>

            </div>
            <div class="col-md-6">



                <div class="slick-carousel" dir="ltr" style="direction: ltr;">
                    <div>
                        <div class="slide-content" onclick="playVideo('video1')">
                            <video autoplay="true" class="allvideos" muted="" playsinline="" loop="" preload="none"
                                id="video1" poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                                data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                                <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div>
                        <div class="slide-content" onclick="playVideo('video2')">


                            <video autoplay="true" class="lazy-video allvideos" playsinline="" id="video2" muted=""
                                loop="" preload="none" poster="https://billo.app/wp-content/uploads/2024/06/6.webp">
                                <source src="https://billo.app/wp-content/uploads/2024/07/6.mp4" type="video/mp4">
                            </video>


                        </div>
                    </div>
                    <div>
                        <div class="slide-content" onclick="playVideo('video3')">

                            <video autoplay="true" class="allvideos lazy-video" muted="" loop="" id="video3" preload=""
                                poster="https://billo.app/wp-content/uploads/2024/06/3.webp">
                                <source src="https://billo.app/wp-content/uploads/2024/07/3.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>


    <section class="my-5">

        <div class="info-section d-md-grid my-4">
            <div class="cta-div-left">
                <img class=" lazyloaded" decoding="async" height="500px"
                    src="https://billo.app/wp-content/uploads/2024/06/Frame-830-1.png"
                    data-orig-src="https://billo.app/wp-content/uploads/2024/06/Frame-830-1.png"
                    alt="Billo.app | Best UGC Videos Platform">
            </div>
            <div class="cta-div-right">
                <h3>Get videos that perform with Billo</h3>
                <p>Elevate your brand with Billo’s creator videos for paid social. By harnessing authentic customer
                    voices, you're not just advertising; you're building trust, community, and lasting customer
                    relationships. Use our winning ad structures today and transform your performance tomorrow.</p>
                <button class="button-black m-md-0 m-auto">Talk to us</button>
            </div>
        </div>

    </section>
</div>

@endsection


@section('script')


{{-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>


<script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script> --}}
<script>
    // var swiper = new Swiper('.swiper-videos', {
    //     slidesPerView: 2,
    //     spaceBetween: 2,
    //     loop: true,
    //     autoplay: {
    //         delay: 2500,
    //         disableOnInteraction: false,
    //     },
    //     speed: 2000,
    //     pagination: {
    //         el: '.swiper-pagination-vedios',
    //         clickable: true,
    //     },
    //     focusOnSelect: true
    // });

    var tt;

    $(document).ready(function () {


        $().ready(function () {
            tt = $('.slick-carousel').slick({
                // arrows: true,
                centerPadding: "42px",
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                centerMode: true,
                // focusOnSelect: true,
                // activeOnSelect:true

                  responsive: [

                    {
                      breakpoint: 600,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 480,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        infinite: true,


                      }
                    }

                  ]
            });
        });

        // $('.slide-content').click(function(e){
        //     // console.log('aaa');

        // var slideno = $(this);
        // console.log(slideno);

        // $('.slick-carousel').slick('slickGoTo', 2);
        // });
    });



    function playVideo(id) {

        // const videos = document.querySelectorAll('.allvideos');
        // videos.forEach(x => {

        // if (x.id == id) {
        //     console.log(x.id);
        //     x.play();
        // } else {

        //     x.pause();
        // }
        // })

    }
</script>



@endsection
