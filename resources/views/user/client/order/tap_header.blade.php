<div class="bs-stepper-header">
    <div class="step {{checkActiveRoute('client.order.details')}}" data-target="#account-details-modern" role="tab"
        id="account-details-modern-trigger">
        <button type="button " class="step-trigger" >
            <span class="bs-stepper-box">
                <i data-feather="info" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
                <span class="bs-stepper-title">  {{__('messages.order_details')}}</span>
                <span class="bs-stepper-subtitle">{{__('messages.order_details_desc')}}</span>
            </span>
        </button>
    </div>
    <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
    </div>
    <div class="step {{checkActiveRoute('client.order.checkout')}}" data-target="#personal-info-modern" role="tab" id="personal-info-modern-trigger">
        <a type="button" class="step-trigger" >
            <span class="bs-stepper-box">
                <i data-feather="info" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
                <span class="bs-stepper-title">{{__('messages.payment')}}</span>
                <span class="bs-stepper-subtitle">{{__('messages.payment_desc')}} </span>
            </span>
        </a>
    </div>
    <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
    </div>
    <div class="step {{checkActiveRoute('client.order.product')}}" data-target="#address-step-modern" role="tab" id="address-step-modern-trigger">
        <button type="button" class="step-trigger" >
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
    <div class="step {{checkActiveRoute('client.order.criteria')}}" data-target="#social-links-modern" role="tab" id="social-links-modern-trigger">
        <button type="button" class="step-trigger" >
            <span class="bs-stepper-box">
                <i data-feather="info" class="font-medium-3"></i>
            </span>
            <span class="bs-stepper-label">
                <span class="bs-stepper-title">{{__('messages.criteria')}}</span>
                <span class="bs-stepper-subtitle">{{__('messages.criteriaForEachVideo')}}</span>
            </span>
        </button>
    </div>
</div>
