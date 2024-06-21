<div class="bs-stepper-header">
    <div class="step {{checkActiveRoute('client.order.details')}}" data-target="#account-details-modern" role="tab"
        id="account-details-modern-trigger">
        <button type="button " class="step-trigger" href="{{route('client.order.details')}}">
            <span class="bs-stepper-box">
                <i data-feather="info" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
                <span class="bs-stepper-title">تفاصيل الطلب</span>
                <span class="bs-stepper-subtitle">إختار تفاصيل الطلب</span>
            </span>
        </button>
    </div>
    <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
    </div>
    <div class="step " data-target="#personal-info-modern" role="tab" id="personal-info-modern-trigger">
        <a type="button" class="step-trigger" href="">
            <span class="bs-stepper-box">
                <i data-feather="info" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
                <span class="bs-stepper-title">الدفع</span>
                <span class="bs-stepper-subtitle">دفع تمن الخدمة المقدمة</span>
            </span>
        </a>
    </div>
    <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
    </div>
    <div class="step" data-target="#address-step-modern" role="tab" id="address-step-modern-trigger">
        <button type="button" class="step-trigger" disabled="disabled">
            <span class="bs-stepper-box">
                <i data-feather="info" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
                <span class="bs-stepper-title">{{__('messages.product')}}</span>
                <span class="bs-stepper-subtitle">{{__('messages.productDetails')}}</span>
            </span>
        </button>
    </div>
    <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
    </div>
    <div class="step" data-target="#social-links-modern" role="tab" id="social-links-modern-trigger">
        <button type="button" class="step-trigger" disabled="disabled">
            <span class="bs-stepper-box">
                <i data-feather="info" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
                <span class="bs-stepper-title">Social Links</span>
                <span class="bs-stepper-subtitle">Add Social Links</span>
            </span>
        </button>
    </div>
</div>
