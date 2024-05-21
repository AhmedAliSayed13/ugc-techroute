@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->
    <x-breadcrumb :section="'Dashboard'" :sectionUrl="route('setting')"
        :title="'Change Password'" />
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="POST" action="{{ route('change.password.save') }}" class="form-horizontal"  >
                                @csrf
                                <x-FormInput :type="'password'" :title="'Current Password'" :name="'old_password'"  :width="'12'" />
                                <x-FormInput :type="'password'" :title="'New Password'" :name="'password'"   :width="'12'" />
                                <x-FormInput :type="'password'" :title="'Confirm New Password'" :name="'password_confirmation'"  :width="'12'" />
                                <x-FormSubmit  :title='"Save"'  />
                            </form>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
</div>
@endsection