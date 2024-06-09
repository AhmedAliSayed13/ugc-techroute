@extends('admin.layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">

    <x-breadcrumb :section="'Options'" :sectionUrl="route('admin.value-options.index',$data['mainOption']->id)"
        :title="'Create Option '" />


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="{{route('admin.value-options.store',$data['mainOption']->id)}}" method="post">
                            @csrf
                            <x-FormInput :type="'text'" :title="'name'" :name="'name'" :width="'12'" />
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
