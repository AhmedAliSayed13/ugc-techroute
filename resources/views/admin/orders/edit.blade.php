@extends('admin.layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">

    <x-breadcrumb :section="'Orders'" :sectionUrl="route('admin.orders.index')" :title="'Edit Order'" />


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        {{-- <form action="{{route('admin.orders.update',$data['order']->id)}}" method="post">
                            @csrf
                            @method('PATCH') --}}

                            here will display order details
                            {{-- <x-FormSwitch :title="'active'" :name="'is_active'" :value="$data['order']->is_active"
                                :width="'12'" /> --}}







                            {{-- <x-FormSubmit :title="'Update'" /> --}}


                        {{-- </form> --}}



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
