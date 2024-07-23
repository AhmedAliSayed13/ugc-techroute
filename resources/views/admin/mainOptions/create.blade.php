@extends('admin.layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">

    <x-breadcrumb :section="'Options'" :sectionUrl="route('admin.main-options.index')" :title="'Create Option'" />


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="{{route('admin.main-options.store')}}" method="post">
                            @csrf

                            <x-FormInput :type="'text'" :title="'title for client'" :name="'name_client'" :width="'12'" />
                            <x-FormInput :type="'text'" :title="'title for creator'" :name="'name_creator'" :width="'12'" />
                            <x-FormSwitch :title="'active'" :name="'is_active'" :width="'12'" />
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
<script src="{{asset('assets/libs/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/pages/form-advanced.init.js')}}"></script>
@endsection
