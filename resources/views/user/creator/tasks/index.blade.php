@extends('user.creator.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/pages/app-ecommerce.css')}}">
<style>
    .ecommerce-application .list-view .ecommerce-card {
        grid-template-columns: 1fr 0.5fr !important;
    }

    .btn-wishlist.text-danger svg {
        fill: #EA5455;
    }

    .btn-wishlist.text-danger span {
        color: black !important;
    }
</style>
@endsection
@section('breadcrumb')
<x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('creator.tasks.index')"
    :title="__('messages.tasks')" />
@endsection

@section('content')


<div class=" content ecommerce-application">
    <div class="content-body">
        <section id="accordion">
            <div class="row">
                <div class="col-sm-12">
                    <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">

                        <div class="">
                            <h4 class="card-title">{{__('messages.tasks')}}</h4>
                        </div>

                        <div class="accordion" id="accordionExample" data-toggle-hover="true">
                            @foreach ($data['tasks'] as $task )
                            <div class="card">
                                <div class="card-body">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#task{{$task->id}}"
                                                aria-expanded="false" aria-controls="task{{$task->id}}">
                                                {{__('messages.orderNumber')}}: {{$task->getTaskKey()}}
                                                -
                                                {{isset($task->order->videoOptionType)?$task->order->videoOptionType->name:''}}
                                            </button>
                                        </h2>
                                        <div id="task{{$task->id}}" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                            <div class="accordion-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>{{__('messages.orderNumber')}}</th>
                                                                <th>{{__('messages.order_price')}}</th>
                                                                <th>{{__('messages.video_type')}}</th>
                                                                <th>{{__('messages.video_duration')}}</th>
                                                                <th>{{__('messages.video_aspect')}}</th>
                                                                <th>{{__('messages.order_status')}}</th>
                                                                <th>{{__('messages.action')}}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>{{$task->getTaskKey()}}</td>
                                                                <td>{{$task->order->video_price}}</td>
                                                                <td>{{isset($task->order->videoOptionType)?$task->order->videoOptionType->name:''}}
                                                                </td>
                                                                <td>{{isset($task->order->videoOptionDuration)?$task->order->videoOptionDuration->time:''}}
                                                                    {{__('messages.second')}}</td>
                                                                <td>{{isset($task->order->videoOptionAspect)?$task->order->videoOptionAspect->name:''}}
                                                                </td>
                                                                <td><span class="badge rounded-pill badge-light-primary">{{isset($task->taskStatus)?$task->taskStatus->name:''}}</span></td>
                                                                <td><a href="{{route('creator.tasks.show', $task->id)}}" class="btn btn-primary">{{__('messages.showDetails')}}</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>


                    </div>
                </div>
                <div class="col-sm-12">
                    {{ $data['tasks']->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </section>

    </div>
</div>


@endsection
@section('script')
<script src="{{asset('users-asset/vendors/js/extensions/wNumb.min.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/extensions/nouislider.min.js')}}"></script>

<script src="{{asset('users-asset/js/scripts/pages/app-ecommerce.js')}}"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
</script>
@endsection
