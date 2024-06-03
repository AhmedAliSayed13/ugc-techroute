@extends('admin.layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">

    <x-breadcrumb :section="'Location Options'" :sectionUrl="route('admin.location-options.index')"
        :title="'Edit Location Options'" />


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="{{route('admin.location-options.update',$data['locationOption']->id)}}" method="post">
                            @csrf
                            @method('PATCH')

                            <x-FormInput :type="'hidden'" :title="''" :name="'id'" :value="$data['locationOption']->id"
                                :width="'12'" />
                            <x-FormInput :type="'text'" :title="'Name'" :name="'name'"
                                :value="$data['locationOption']->name" :width="'12'" />
                            <x-FormSwitch :title="'active'" :name="'is_active'" :value="$data['locationOption']->is_active"
                                :width="'12'" />





                            <x-FormSubmit :title="'Update'" />


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
