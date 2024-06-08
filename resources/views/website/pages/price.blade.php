@extends('website.layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/extensions/nouislider.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('users-asset/css-rtl/plugins/extensions/ext-component-sliders.css')}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
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
        <div class="col-8 bg-div-gray mt-3 m-auto div-main-continer">
            <div class="row ">
                <div class="col-2 text-center img-div">
                    <img src="https://billo.app/wp-content/uploads/2024/01/Group-33745.svg" alt="">
                </div>
                <div class="col-10 text-div">
                    <header>ما هو رصيد VIDOO الخاص بك؟</header>
                    <p>اشترِ حزمة وسيتم إضافة القيمة الكاملة (سعر الشراء + المكافأة) على الفور إلى رصيد VIDOO الخاص بك.
                        يمكن استخدام الأموال المضافة إلى رصيدك لأي محتوى أو خدمات مقدمة على منصتنا.</p>
                    <a href="">اعرف المزيد</a>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-3 pt-4 price-div4 bg-div-gray">
        <div class="col-10 m-auto ">
            <div class="row">
                <div class="col-6 text-center"><img
                        src="https://billo.app/wp-content/uploads/2023/12/EXPORT-THIS-IN-2X.png"></div>
                <div class="col-6 text-div">
                    <header>تحتاج إلى المزيد لإعداد استراتيجيتك التسويقية؟</header>
                    <ul>
                        <li>
                            <i data-feather='check'></i>
                            <span>احجز مكالمة:</span>
                            حدد موعدًا لاستشارة لمناقشة احتياجاتك.
                        </li>
                        <li>
                            <i data-feather='check'></i>
                            <span>احجز مكالمة:</span>
                            حدد موعدًا لاستشارة لمناقشة احتياجاتك.
                        </li>
                        <li>
                            <i data-feather='check'></i>
                            <span>احجز مكالمة:</span>
                            حدد موعدًا لاستشارة لمناقشة احتياجاتك.
                        </li>

                    </ul>

                    <a class="btn btn-relief-primary mr-3 ml-3" href="#" role="button">{{__('website.orderNow')}}</a>
                </div>
                <div class="col-12">
                    <hr>
                </div>
                <div class="col-12 title-div">
                    <header>أكثر من <span>17,000</span> علامة تجارية ووكالة تختار VIDOO</header>
                </div>
                <div class="col-12 mt-4 mb-4">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img
                                    src="https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg"
                                    alt="Logo"></div>
                            <div class="swiper-slide"><img
                                    src="https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg" alt="Logo">
                            </div>
                            <div class="swiper-slide"><img
                                    src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg" alt="Logo">
                            </div>
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


        </div>
    </div>

    <div class="row mt-3 price-div5">
        <div class="col-10 m-auto ">
            <div class="row">
                <div class="col-6 img-div"><img src="https://billo.app/wp-content/uploads/2024/01/Group-121417510.png"
                        alt=""></div>
                <div class="col-6 text-div">
                    <header>
                        احصل على مبدعين جدد بسرعة أكبر مع
                        <span>مدير نجاح مخصص</span>

                    </header>
                    <p>
                        تعظيم قيمة VIDOO: خطة تدريب ونجاح لاختيار أفضل المواهب والحصول على مبدعين جدد
                        <span>
                            عاليي الأداء بسرعة أكبر
                        </span>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 price-div6">
        <div class="col-10 m-auto main-container-div bg-div-gray">
            <div class="row pt-5 pb-5">
                <div class="col-6  item1-div">
                    <img src="https://billo.app/wp-content/uploads/2023/08/icon1.webp" alt="">
                    <header>ادفع مرة واحدة، واحصل على إعلانات طوال العام</header>
                    <p>
                        اشترِ مرة واحدة، وستظل أموالك سارية لمدة 12 شهرًا. خذ كل الوقت الذي تحتاجه لتعديل وتحقيق رؤيتك.
                    </p>
                </div>

                <div class="col-6 item2-div">
                    <img src="https://billo.app/wp-content/uploads/2023/08/icon2.webp" alt="">
                    <header>ادفع مرة واحدة، واحصل على إعلانات طوال العام</header>
                    <p>
                        اشترِ مرة واحدة، وستظل أموالك سارية لمدة 12 شهرًا. خذ كل الوقت الذي تحتاجه لتعديل وتحقيق رؤيتك.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="row price-div7 mt-5 mb-5 bg-div-gray">
        <div class="col-10 m-auto ">
            <div class="row">
                <div class="col-3">
                    <header>
                        أسئلة متكررة
                    </header>
                </div>
                <div class="col-9">

                    <div class="accordion accordion-margin mt-2" id="faq-payment-qna">
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="paymentOne">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                    data-bs-target="#faq-payment-one" aria-expanded="false"
                                    aria-controls="faq-payment-one">
                                    Does my subscription automatically renew?
                                </button>
                            </h2>

                            <div id="faq-payment-one" class="collapse accordion-collapse" aria-labelledby="paymentOne"
                                data-bs-parent="#faq-payment-qna">
                                <div class="accordion-body">
                                    Pastry pudding cookie toffee bonbon jujubes jujubes powder topping. Jelly beans
                                    gummi
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
                                    data-bs-target="#faq-payment-two" aria-expanded="true"
                                    aria-controls="faq-payment-two">
                                    Can I store the item on an intranet so everyone has access?
                                </button>
                            </h2>
                            <div id="faq-payment-two" class="collapse " aria-labelledby="paymentTwo"
                                data-bs-parent="#faq-payment-qna">
                                <div class="accordion-body">
                                    Sweet pie candy jelly. Sesame snaps biscuit sugar plum. Sweet roll topping
                                    fruitcake.
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
        </div>
    </div>
</div>

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
    // pagination: {
    //   el: '.swiper-pagination',
    //   clickable: true,
    // },
  });
</script>
@endsection