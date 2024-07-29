@extends('admin.layouts.master')
@section('style')
<link href="{{asset('assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container-fluid">

    <x-breadcrumb :section="'Transactions'" :sectionUrl="route('admin.transactions.index')" :title="'Edit Transaction'" />


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <form action="{{route('admin.transactions.update',$data['transaction']->id)}}" method="post">
                            @csrf
                            @method('PATCH')

                            <x-FormInput :type="'hidden'" :title="''" :name="'id'" :value="$data['transaction']->id"
                                :width="'12'" />
                            <x-FormSelect  :title="'Status'" :name="'transaction_status_id'"
                                :value="$data['transaction']->transaction_status_id" :width="'12'" :options="$data['transactionStatuses']" :width="'12'" />

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
