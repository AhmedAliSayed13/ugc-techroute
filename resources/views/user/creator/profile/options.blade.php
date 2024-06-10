@extends('user.creator.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/components.css')}}">




@endsection
@section('breadcrumb')
<x-breadcrumb_user :section="'حسابي'" :sectionUrl="route('creator.profile')" :title="'تعديل البيانات'" />
@endsection

@section('content')
<div class="container-fluid ">





    <div class="row">
        <div class="col-12">
            @include('user.creator.profile.tab-header')
        </div>
    </div>



    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header border-bottom">
                    <h4 class="card-title"> الخصائص</h4>
                </div>
                <div class="card-body  py-2 my-25">
                    <form action="{{route('creator.options')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach ($data['mainOptions'] as $mainOption )

                        <div class="col-md-12 mb-1">
                            <input type="hidden" name="mainOptions[]" value="{{$mainOption->id}}">
                            <label class="form-label" for="select2-multiple">{{$mainOption->name}}</label>
                            <select class="select2 form-select" name="valueOptions[{{$mainOption->id}}][]"
                                id="select{{$mainOption->id}}" multiple>
                                @foreach ($mainOption->valueOptions as $valueOption)
                                <option {{OptionSelectMulitpleCommaString( getUserOtionsByMainId($mainOption->id,Auth::user()->id),$valueOption->id) }}
                                    value="{{$valueOption->id}}">{{$valueOption->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @endforeach
                        <div class="col-12">
                            <button class="btn btn-primary waves-effect waves-float waves-light"
                                type="submit">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





</div>




</div>
@endsection
@section('script')
<script src="{{asset('users-asset/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-select2.js')}}"></script>
@endsection
