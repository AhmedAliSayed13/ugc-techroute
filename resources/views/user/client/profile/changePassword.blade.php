@extends('user.client.layouts.master')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('users-asset/css-rtl/plugins/forms/form-validation.css')}}">
@endsection
{{-- @section('breadcrumb')

@endsection --}}

@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <x-breadcrumb_user :section="__('messages.myaccount')" :sectionUrl="route('client.change.password')"
                :title="__('messages.changePassword')" />
        </div>

        <div class="content-body">
            <div class="container-fluid mt-4">
                <div class="row">

                    <div class="row">
                        <div class="col-12">


                            <!-- profile -->
                            <div class="card">

                                <div class="card-body py-2 my-25">
                                    <form class="validate-form mt-2 pt-50" method="POST"
                                        action="{{route('client.change.password')}}">
                                        @csrf


                                        <!-- form -->

                                        <div class="row">
                                            <div class="col-12 col-sm-12 mb-1">
                                                <label class="form-label"
                                                    for="current_password">{{__('messages.oldPassword')}}</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" class="form-control" id="current_password"
                                                        name="current_password" required />
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                                @error('current_password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-12 col-sm-12 mb-1">
                                                <label class="form-label"
                                                    for="password">{{__('messages.newPassword')}}</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" required />
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                                @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                            </div>
                                            <div class="col-12 col-sm-12 mb-1">
                                                <label class="form-label"
                                                    for="password_confirmation">{{__('messages.confirmPassword')}}</label>
                                                <div class="input-group form-password-toggle input-group-merge">
                                                    <input type="password" class="form-control"
                                                        id="password_confirmation" name="password_confirmation"
                                                        required />
                                                    <div class="input-group-text cursor-pointer">
                                                        <i data-feather="eye"></i>
                                                    </div>
                                                </div>
                                                @error('confirmPassword')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

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
                                                id="accountActivation"
                                                data-msg="Please confirm you want to delete account" />
                                            <label class="form-check-label font-small-3" for="accountActivation">
                                                I confirm my account deactivation
                                            </label>
                                        </div>
                                        <div>
                                            <button type="submit"
                                                class="btn btn-danger deactivate-account mt-1">Deactivate
                                                Account</button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            <!--/ profile -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
