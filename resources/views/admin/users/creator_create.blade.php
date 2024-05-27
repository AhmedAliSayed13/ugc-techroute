@extends('admin.layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/mohithg-switchery/switchery.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
<div class="container-fluid">

    <x-breadcrumb :section="'Roles'" :sectionUrl="route('admin.roles.index')" :title="'Create Roles'" />


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">



                        <form action="{{route('admin.users.creator.create')}}" method="post">
                            @csrf

                            <x-FormInput :type="'text'" :title="'name'" :name="'name'" :width="'6'" />
                            <x-FormInput :type="'email'" :title="'email'" :name="'email'" :width="'6'" />
                            <x-FormInput :type="'text'" :title="'phone'" :name="'phone'" :width="'6'" />
                            <x-FormInput :type="'password'" :title="'password'" :name="'password'" :width="'6'" />

                            {{--
                            <x-FormSwitch :title="'is_creator'" :name="'is_creator'" :width="'6'" /> --}}
                            <x-FormSwitch :title="'active'" :name="'is_active'" :width="'6'" />

                            <x-FormSubmit :title="'Create'" />


                        </form>





                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
{{-- <script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/libs/mohithg-switchery/switchery.min.js')}}"></script>
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script> --}}




@endsection