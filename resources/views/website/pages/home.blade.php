@extends('website.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
            <a class="btn btn-relief-primary" href="{{route('creator.register')}}">{{__('website.orderNow')}}</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 home-div2">
            <div class="swiper swiper-videos">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="swiper-slide">
                        <video muted="" playsinline="" autoplay="" loop="" preload="none"
                            poster="https://billo.app/wp-content/uploads/2023/10/1.webp"
                            data-video-small="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                            data-video-url="https://billo.app/wp-content/uploads/2023/10/Alexis-A.mp4">
                            <source src="https://billo.app/wp-content/uploads/2023/10/Alexis_A_328px-1.mp4"
                                type="video/mp4">
                        </video>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="row home-div3">

        <div class="col-lg-2 staticsic ">
            <header>
                17,000+
                <span>
                    عميل
                </span>
            </header>

        </div>
        <div class="col-lg-10 ">

            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img
                            src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"
                            alt="Logo"></div>
                    <div class="swiper-slide"><img src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg"
                            alt="Logo"></div>
                    <div class="swiper-slide"><img
                            src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg" alt="Logo"></div>
                    <div class="swiper-slide"><img
                            src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"
                            alt="Logo"></div>
                    <div class="swiper-slide"><img
                            src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"
                            alt="Logo"></div>
                    <div class="swiper-slide"><img
                            src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"
                            alt="Logo"></div>
                    <div class="swiper-slide"><img
                            src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"
                            alt="Logo"></div>

                </div>

                <div class="swiper-pagination"></div>
            </div>

        </div>

    </div>

    <div class="row home-div4 mt-5">
        <div class="col-10 m-auto mt-2">
            <div class="col-12  m-auto">
                <header class="pr-3">
                    البحث عن الإبداعات الفائزة من المحتوى الذي ينشئه المستخدمون (UGC).
                </header>
            </div>
            <div class="row mt-4">


                <div class="col-6 div-img">
                    <img src="https://billo.app/wp-content/uploads/2023/10/2-1.webp" alt="Logo">
                    <header>مبدعون لكل علامة تجارية.</header>
                    <p>تبحث عن مبدعي المحتوى القدامى؟ مبدعين لديهم وشوم؟ شيء آخر تمامًا؟ اختر من بين أكثر من 5000 مبدع
                        يتميزون بتنوع الديموغرافيات والأساليب والاهتمامات، وانتقِ أولئك الذين يتمتعون بالخلفية والمهارات
                        والمعدات التي تتطلبها رؤيتك.</p>
                </div>
                <div class="col-6 div-img">
                    <img src="https://billo.app/wp-content/uploads/2023/10/2-1.webp" alt="Logo">
                    <header>مبدعون لكل علامة تجارية.</header>
                    <p>تبحث عن مبدعي المحتوى القدامى؟ مبدعين لديهم وشوم؟ شيء آخر تمامًا؟ اختر من بين أكثر من 5000 مبدع
                        يتميزون بتنوع الديموغرافيات والأساليب والاهتمامات، وانتقِ أولئك الذين يتمتعون بالخلفية والمهارات
                        والمعدات التي تتطلبها رؤيتك.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row home-div5 ">

        <div class="col-12 ">
            <header>
                Improve your conversion metrics
            </header>
        </div>
        <div class="col-lg-6 home-div5-div1">
            <div class="col-10 m-auto home-div5-div-inner1 bg-grey">
                <header class="sub-header">Grab attention and drive performance</header>
                <p>
                    Maximize your ad impact and reduce costs and workloads with versatile designed for diverse formats,
                    channels, and audiences.
                </p>
                <a class="btn btn-relief-primary " href="{{route('creator.register')}}">{{__('website.orderNow')}}</a>
            </div>
            <div class="col-10 m-auto">
                <!-- frequent answer and question  collapse  -->
                <div class="accordion accordion-margin mt-2" id="faq-payment-qna">
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="paymentOne">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                data-bs-target="#faq-payment-one" aria-expanded="false" aria-controls="faq-payment-one">
                                Does my subscription automatically renew?
                            </button>
                        </h2>

                        <div id="faq-payment-one" class="collapse accordion-collapse" aria-labelledby="paymentOne"
                            data-bs-parent="#faq-payment-qna">
                            <div class="accordion-body">
                                Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans gummi
                                bears sweet roll
                                bonbon muffin liquorice. Wafer lollipop sesame snaps. Brownie macaroon cookie muffin
                                cupcake candy
                                caramels tiramisu. Oat cake chocolate cake sweet jelly-o brownie biscuit marzipan.
                                Jujubes donut
                                marzipan chocolate bar. Jujubes sugar plum jelly beans tiramisu icing cheesecake.
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="paymentTwo">
                            <button class="accordion-button" data-bs-toggle="collapse" role="button"
                                data-bs-target="#faq-payment-two" aria-expanded="true" aria-controls="faq-payment-two">
                                Can I store the item on an intranet so everyone has access?
                            </button>
                        </h2>
                        <div id="faq-payment-two" class="collapse show" aria-labelledby="paymentTwo"
                            data-bs-parent="#faq-payment-qna">
                            <div class="accordion-body">
                                Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping fruitcake.
                                Caramels
                                liquorice biscuit ice cream fruitcake cotton candy tart. Donut caramels gingerbread
                                jelly-o
                                gingerbread pudding. Gummi bears pastry marshmallow candy canes pie. Pie apple pie
                                carrot cake.
                            </div>
                        </div>
                    </div>
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="paymentThree">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                data-bs-target="#faq-payment-three" aria-expanded="false"
                                aria-controls="faq-payment-three">
                                What does non-exclusive mean?
                            </button>
                        </h2>
                        <div id="faq-payment-three" class="collapse" aria-labelledby="paymentThree"
                            data-bs-parent="#faq-payment-qna">
                            <div class="accordion-body">
                                Tart gummies dragée lollipop fruitcake pastry oat cake. Cookie jelly jelly macaroon
                                icing jelly beans
                                soufflé cake sweet. Macaroon sesame snaps cheesecake tart cake sugar plum. Dessert
                                jelly-o sweet
                                muffin chocolate candy pie tootsie roll marzipan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 home-div5-div2">
            <img src="{{asset('website/images/home/home1.png')}}">
        </div>

    </div>

    <div class="row home-div6 mt-5">
        <div class="col-10 m-auto mt-2">
            <div class="col-12  m-auto">
                <header class="pr-3">
                    Engage effortlessly
                </header>
            </div>
            <div class="row mt-4">


                <div class="col-6 div-icon">
                    <div class="row">
                        <div class="col-4 div-icon-div-img">
                            <img src="{{asset('website/images/home/icon-1.webp')}}" class="img-icon" alt="">
                        </div>
                        <div class="col-8 div-icon-div-desc">
                            <header>
                                Dedicated success managers
                            </header>
                            <p>
                                Get expert help from a dedicated account manager to create tasks, build briefs, and
                                choose UGC creators for you.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-6 div-icon">
                    <div class="row">
                        <div class="col-4 div-icon-div-img">
                            <img src="{{asset('website/images/home/icon-2.webp')}}" class="img-icon" alt="">
                        </div>
                        <div class="col-8 div-icon-div-desc">
                            <header>
                                Dedicated success managers
                            </header>
                            <p>
                                Get expert help from a dedicated account manager to create tasks, build briefs, and
                                choose UGC creators for you.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-6 div-icon">
                    <div class="row">
                        <div class="col-4 div-icon-div-img">
                            <img src="{{asset('website/images/home/icon-3.webp')}}" class="img-icon" alt="">
                        </div>
                        <div class="col-8 div-icon-div-desc">
                            <header>
                                Dedicated success managers
                            </header>
                            <p>
                                Get expert help from a dedicated account manager to create tasks, build briefs, and
                                choose UGC creators for you.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-6 div-icon">
                    <div class="row">
                        <div class="col-4 div-icon-div-img">
                            <img src="{{asset('website/images/home/icon-4.webp')}}" class="img-icon" alt="">
                        </div>
                        <div class="col-8 div-icon-div-desc">
                            <header>
                                Dedicated success managers
                            </header>
                            <p>
                                Get expert help from a dedicated account manager to create tasks, build briefs, and
                                choose UGC creators for you.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="col-12 text-center mt-3">
                    <a class="btn btn-relief-primary" href="{{route('creator.register')}}">{{__('website.orderNow')}}</a>
                </div>

            </div>
        </div>
    </div>


    <div class="row home-div7 bg-grey mt-5">
        <div class="col-10 m-auto mt-2">
            <div class="row mt-4">
                <div class="col-5 ">
                    <div class="div-video">
                        <video playsinline="true"
                            poster="https://billo.app/wp-content/uploads/2024/06/onboard-poster.webp" width="100%"
                            style="object-fit: cover;" autoplay="true" muted="true" loop="true" preload="auto">
                            <source
                                src="https://billo.app/wp-content/uploads/2024/06/05-BenefitsDrivenAdWithPointing-Universal.mp4"
                                type="video/mp4">
                        </video>
                    </div>

                </div>
                <div class="col-7 ">
                    <header>Boost ad performance with Billo</header>
                    <ol>
                        <li>Get a detailed report of your ad performance</li>
                        <li>Get a detailed report of your ad performance</li>
                        <li>Get a detailed report of your ad performance</li>
                    </ol>
                    <a class="btn btn-relief-primary" href="{{route('creator.register')}}"> {{__('website.orderNow')}}</a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


@section('script')


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-videos', {
    slidesPerView: 6,
    spaceBetween: 1,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      speed: 2000,
    // pagination: {
    //   el: '.swiper-pagination-vedios',
    //   clickable: true,
    // },
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
    // pagination: {
    //   el: '.swiper-pagination',
    //   clickable: true,
    // },
  });
</script>

@endsection
