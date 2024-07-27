@extends('user.client.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<style>
    .card-apply-job .apply-job-package {
        display: contents !important;
    }

    .video-container {
        position: relative;
        width: 100%;

        height: 400px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .video-container-profile {
        position: relative;
        width: 100%;
        height: 600px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .video-container video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* This ensures the video covers the entire container without maintaining the aspect ratio */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: black;
        /* Make sure the icons are visible on your video */
    }
</style>

@endsection

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="row">
            {{-- {{isset($id)?$id:'null'}} --}}
            <ul class="nav justify-content-center nav-pills nav-pill-primary my-2 ">
                <li class="nav-item border border-primary  rounded m-1 ">
                    <a class="nav-link {{checkParamaterInUrl('status','false')}}" href="?status=false" >{{__('messages.Due_to_ship')}}</a>
                </li>
                <li class="nav-item border border-primary  rounded m-1">
                    <a class="nav-link {{checkParamaterInUrl('status','true')}}" href="?status=true" >{{__('messages.shipped')}}</a>
                </li>
                <li class="nav-item border border-primary  rounded m-1">
                    <a class="nav-link {{checkParamaterInUrl('status','all')}}" href="?status=all" >{{__('messages.all_shippments')}}</a>
                </li>

            </ul>
        </div>

        <div class="row">
            @if(isset($data['shippings']) && count($data['shippings'])>0)
            <div class="accordion accordion-margin mt-2" id="faq-payment-qna">
                @foreach ($data['shippings'] as $shipping)

                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="item{{$shipping->id}}">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" role="button"
                                data-bs-target="#shipping{{$shipping->id}}" aria-expanded="false" aria-controls="shipping{{$shipping->id}}">
                            {{__('messages.order_key')}}:  {{ $shipping->task->getTaskKey() }} <span class="m-1 text-primary font-12"><i data-feather='chevron-right'></i></span> {{__('messages.product')}}:  {{ $shipping->order->product_name }}
                            @if($shipping->active)
                                <span class="badge badge-light-primary">{{__('messages.shipped')}}</span>
                            @endif
                        </button>

                        </h2>

                        <div id="shipping{{$shipping->id}}" class="collapse accordion-collapse" aria-labelledby="item{{$shipping->id}}"
                            data-bs-parent="#faq-payment-qna">
                            <div class="accordion-body">
                            <form  action="{{route('client.shippings.update',$shipping->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                    <div class="row">
                                        <div class="col-6 col-sm-6 mb-1">
                                            <label class="form-label" for="key">{{__('messages.shipping_key')}}</label>
                                            <input type="text" class="form-control" id="key" name="key"
                                                value="{{old('key',$shipping->key)}}" required />
                                            @error('key')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-6 col-sm-6 mb-1">
                                            <label class="form-label" for="tracking">{{__('messages.tracking_url')}}</label>
                                            <input type="text" class="form-control" id="tracking" name="tracking"
                                                value="{{old('tracking',$shipping->tracking)}}" required />
                                            @error('tracking')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-primary mt-1 me-1">{{__('messages.saveChanges')}}</button>

                                        </div>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
            <p>
                {{$data['shippings']->appends(Request::except('page'))->links('pagination::bootstrap-4')}}

            </p>


            @else
                @include('widgets.wedgets_data_not_found')
            @endif
        </div>




    </div>
</div>




@endsection
@section('script')

@endsection
