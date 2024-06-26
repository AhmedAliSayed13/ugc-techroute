@extends('user.creator.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/vendors/css/forms/select/select2.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/components.css')}}">




@endsection
@section('breadcrumb')
<x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('creator.profile')" :title="__('messages.profile')" />
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


                <!-- profile -->
                <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">{{__('messages.profile')}}</h4>
                    </div>
                    <div class="card-body py-2 my-25">
                        <form class="validate-form mt-2 pt-50" method="POST" action="{{route('creator.profile')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- header section -->
                            <div class="d-flex">
                                <a href="#" class="me-25">
                                    <img src="{{getUserProfileImage(auth()->user()->img)}}" id="account-upload-img"
                                        class="uploadedAvatar rounded me-50" alt="profile image" height="100"
                                        width="100" />
                                    @error('img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </a>
                                <!-- upload and reset button -->
                                <div class="d-flex align-items-end mt-75 ms-1">
                                    <div>
                                        <label for="account-upload"
                                            class="btn btn-sm btn-primary mb-75 me-75">{{__('messages.upload')}}</label>
                                        <input type="file" id="account-upload" name="img" hidden accept="image/*" />
                                        <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                    </div>

                                </div>

                                <!--/ upload and reset button -->
                            </div>
                            <!--/ header section -->

                            <!-- form -->

                            <div class="row">
                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="name">{{__('messages.name')}}</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="John"
                                        value="{{old('name',auth()->user()->name)}}" required />
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="email">{{__('messages.email')}}</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                        value="{{old('email',auth()->user()->email)}}" />
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="phone">{{__('messages.phone')}}</label>
                                    <input type="text" class="form-control account-number-mask" id="phone" name="phone"
                                        value="{{old('phone',auth()->user()->phone)}}" />
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="address">{{__('messages.address')}}</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        value="{{old('address',auth()->user()->address)}}" />
                                    @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="birthdate">{{__('messages.birthdate')}}</label>
                                    <input type="date" class="form-control" id="birthdate" name="birthdate"
                                        value="{{old('birthdate',auth()->user()->CreatorInfo->birthdate)}}" />
                                    @error('birthdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="country_id">{{__('messages.country')}}</label>
                                    <select class="select2 form-select" id="country_id" name="country_id">
                                        <option>{{__('messages.selectOption')}}</option>
                                        @foreach($data['countries'] as $country)
                                        <option value="{{$country->id}}" {{old('country_id',auth()->user()->CreatorInfo->country_id)
                                            == $country->id ? 'selected' : ''}}>{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="gender">{{__('messages.gender')}}</label>
                                    <select class="select2 form-select" id="gender" name="gender">
                                        <option>{{__('messages.selectOption')}}</option>
                                        <option {{OptionSelect(Auth::user()->CreatorInfo->gender,'ذكر')}} value="ذكر">ذكر</option>
                                        <option {{OptionSelect(Auth::user()->CreatorInfo->gender,'انثي')}} value="انثي">انثي</option>
                                    </select>
                                    @error('gender')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-sm-6 mb-1">
                                    <label class="form-label" for="languages">{{__('messages.languages')}}</label>
                                    <select class="select2 form-select" multiple id="languages" name="languages[]">
                                        <option>{{__('messages.selectOption')}}</option>
                                        <option {{OptionSelectMulitpleCommaString(Auth::user()->CreatorInfo->languages,'عربي')}} value="عربي">عربي</option>
                                        <option {{OptionSelectMulitpleCommaString(Auth::user()->CreatorInfo->languages,'انجليزي')}} value="انجليزي">انجليزي</option>
                                    </select>
                                    @error('languages')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="describe">نبذه</label>
                                        <textarea class="form-control" id="describe" name="describe" rows="3"
                                            >{{old('describe',auth()->user()->CreatorInfo->describe)}}</textarea>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn-primary mt-1 me-1">{{__('messages.saveChanges')}}</button>
                                    <button type="reset"
                                        class="btn btn-outline-secondary mt-1">{{__('messages.discard')}}</button>
                                </div>
                            </div>
                        </form>
                        <!--/ form -->
                    </div>
                </div>

                <!-- deactivate account  -->
                {{-- <div class="card">
                    <div class="card-header border-bottom">
                        <h4 class="card-title">Delete Account</h4>
                    </div>
                    <div class="card-body py-2 my-25">
                        <div class="alert alert-warning">
                            <h4 class="alert-heading">Are you sure you want to delete your account?</h4>
                            <div class="alert-body fw-normal">
                                Once you delete your account, there is no going back. Please be certain.
                            </div>
                        </div>

                        <form id="formAccountDeactivation" class="validate-form" onsubmit="return false">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="accountActivation"
                                    id="accountActivation" data-msg="Please confirm you want to delete account" />
                                <label class="form-check-label font-small-3" for="accountActivation">
                                    I confirm my account deactivation
                                </label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-danger deactivate-account mt-1">Deactivate
                                    Account</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
                <!--/ profile -->
            </div>
        </div>


</div>
@endsection
@section('script')
<script src="{{asset('users-asset/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('users-asset/js/scripts/forms/form-select2.js')}}"></script>
@endsection
