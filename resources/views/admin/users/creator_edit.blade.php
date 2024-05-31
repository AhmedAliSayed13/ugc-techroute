@extends('admin.layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">

    <x-breadcrumb :section="'Users'" :sectionUrl="route('admin.users.index')" :title="'Edit Users'" />


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="{{route('admin.users.creator.update',$data['user']->id)}}" method="post">
                            @csrf
                            {{-- @method('PATCH') --}}

                            <x-FormInput :type="'text'" :title="'name'" :name="'name'" :value="$data['user']->name"
                                :width="'6'" />
                            <x-FormInput :type="'email'" :title="'email'" :name="'email'" :value="$data['user']->email"
                                :width="'6'" />
                            <x-FormInput :type="'text'" :title="'phone'" :name="'phone'" :value="$data['user']->phone"
                                :width="'6'" />
                            <x-FormSwitch :title="'active'" :name="'is_active'" :value="$data['user']->is_active"
                                :width="'6'" />
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
