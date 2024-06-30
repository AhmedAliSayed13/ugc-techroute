@extends('user.client.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/wizard/bs-stepper.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-wizard.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/components.css')}}">

@endsection


@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <x-breadcrumb_user :section="'حسابي'" :sectionUrl="route('client.profile')" :title="'تعديل البيانات'" />

        </div>
        <div class="container-fluid mt-2">
            <div class="row">
                <div class="content-body">
                    <!-- Modern Horizontal Wizard -->
                    <section class="modern-horizontal-wizard">
                        <div class="bs-stepper wizard-modern modern-wizard-example">
                            @include('user.client.order.tap_header')
                            <div class="bs-stepper-content">
                                <div class="content-header mb-2">
                                    <h5 class="mb-0">{{__('messages.criteria')}}</h5>
                                    <small class="text-muted"> {{__('messages.criteriaForEachVideo')}}</small>
                                </div>
                                <form class="row  mb-2" action="{{route('client.order.criteria',$data['key'])}}"
                                    method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6 ">
                                            <div class="mb-1">
                                                <label for="country_id"
                                                    class="form-label">{{__('messages.country')}}</label>
                                                <select class="form-select" id="country_id" name="country_id" required>
                                                    <option value="">{{__('messages.selectOption')}}</option>
                                                    @foreach($data['countries'] as $country)
                                                    <option {{OptionSelect($country->id,$data['order']->country_id)}}
                                                        value="{{$country->id}}">{{$country->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('country_id')
                                                <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="mb-1">
                                                <label for="gender" class="form-label">{{__('messages.gender')}}</label>
                                                <select class="form-select" id="gender" name="gender" required>
                                                    <option value="">{{__('messages.selectOption')}}</option>
                                                    <option {{OptionSelect('ذكر',$data['order']->gender)}}
                                                        value="ذكر">ذكر</option>
                                                    <option {{OptionSelect('انثي',$data['order']->gender)}}
                                                        value="انثي">انثي</option>
                                                </select>
                                                @error('gender')
                                                <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        @foreach ($data['mainOptions'] as $mainOption )
                                        <div class="col-md-6 mb-1">
                                            <input type="hidden" name="mainOptions[]" value="{{$mainOption->id}}">
                                            <label class="form-label"
                                                for="select2-multiple">{{$mainOption->name_client}}</label>
                                            <select class="select2 form-select"
                                                name="valueOptions[{{$mainOption->id}}][]"
                                                id="select{{$mainOption->id}}" multiple>
                                                @foreach ($mainOption->valueOptions as $valueOption)
                                                <option value="{{$valueOption->id}}">{{$valueOption->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @endforeach
                                    </div>


                                    <h3 class="mb-2 mt-2">
                                        {{__('messages.mentionsAndScenes')}}
                                    </h3>

                                        <div class="row  mb-2 text-area-row">
                                            <div class="col-5 ">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                        for="scenes">{{__('messages.scenes')}}</label>
                                                    <textarea class="form-control" name="scenes[]" id="scenes"
                                                        rows="3" required> {{old('scenes')}}</textarea>
                                                    @error('scenes')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-5 ">
                                                <div class="mb-1">
                                                    <label class="form-label"
                                                        for="mentions">{{__('messages.mentions')}}</label>
                                                    <textarea class="form-control" name="mentions[]" id="mentions"
                                                        rows="3" required> {{old('mentions')}}</textarea>
                                                    @error('mentions')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="col-2 mt-3 text-center">
                                                <button class="deleteRow btn btn-danger"><i
                                                        data-feather='trash'></i></button>
                                            </div> --}}


                                        </div>

                                    <div id="rowsContainer"></div>
                                    <div class="row">
                                        <div class="col-12 text-center">

                                            <button type="button" id="addRow" class="btn btn-primary mb-2">{{__('messages.add')}} <i data-feather='plus'></i></button>
                                        </div>
                                    </div>







                                    @include('user.client.order.tap_footer')
                                </form>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')


<script src="{{asset('users-asset/vendors/js/forms/wizard/bs-stepper.min.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-wizard.js')}}"></script>
<script src="{{asset('users-asset/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-number-input.js')}}"></script>

<script src="{{asset('users-asset/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-select2.js')}}"></script>
<script>
    $(document).ready(function() {
    $('#addRow').click(function() {
        $('#rowsContainer').append(`
            <div class="row mb-2 text-area-row">
                <div class="col-5">
                    <div class="mb-1">
                        <label class="form-label" for="scenes">{{__('messages.scenes')}}</label>
                        <textarea class="form-control" name="scenes[]" id="scenes" rows="3" required>{{old('scenes')}}</textarea>
                        @error('scenes')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-5">
                    <div class="mb-1">
                        <label class="form-label" for="mentions">{{__('messages.mentions')}}</label>
                        <textarea class="form-control" name="mentions[]" id="mentions" rows="3" required>{{old('mentions')}}</textarea>
                        @error('mentions')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-2 mt-3 text-center">
                    <button class="deleteRow btn btn-danger">{{__('messages.delete')}}</button>
                </div>
            </div>
        `);
    });

    // Delegate event to dynamically added delete buttons
    $('#rowsContainer').on('click', '.deleteRow', function() {
        $(this).closest('.text-area-row').remove();
    });
});


</script>
@endsection
