@extends('admin.layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">

    <x-breadcrumb :section="'Roles'" :sectionUrl="route('admin.roles.index')" :title="'Edit Roles'" />


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="{{route('admin.roles.update',$data['role'])}}" method="post">
                            @csrf
                            @method('PATCH')

                            <x-FormInput :type="'text'" :title="'Name'" :name="'name'" :value="$data['role']->name"
                                :width="'12'" />
                            <x-FormCheckbox :title="'Permission'" :name="'permission[]'" :items="$data['permission']"
                                :value="$data['rolePermissions']" :width="'12'" />





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