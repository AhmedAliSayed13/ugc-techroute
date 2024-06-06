@extends('website.layouts.master')

@section('style')

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
                        <p class="mt-1">$500</p>
                        <p class="mt-1">" إضف إلى الرصيد: 500 دولار"</p>
                        <div class="text-center mt-2">
                            <a class="btn btn-relief-primary mr-3 ml-3" href="#"
                                role="button">{{__('website.orderNow')}}</a>
                        </div>

                    </div>

                </div>
                <div class="col-8 select-div">
                    11111


                </div>
            </div>
        </div>

    </div>
</div>

@endsection


@section('script')

@endsection
