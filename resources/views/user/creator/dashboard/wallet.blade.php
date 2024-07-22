@extends('user.creator.layouts.master')
@section('content')
<div class="container-fluid mt-4">


        <div class="row" id="basic-table">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{__('messages.wallet_balance')}}: <span class="text-primary">${{Auth::user()->wallet(1)->balance}}</span></h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{__('messages.walletDescribe')}}
                        </p>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{__('messages.order_key')}}</th>
                                    <th>{{__('messages.product')}}</th>
                                    <th>{{__('messages.amount')}}</th>
                                    <th>{{__('messages.status')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($data['transactions']) && count($data['transactions'])>0)
                                @foreach ($data['transactions'] as $key => $transaction)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$transaction->task->getTaskKey()}}</td>
                                    <td>{{$transaction->order->product_name}}</td>
                                    <td><span class="text-primary">${{$transaction->getAmount()}}</span></td>
                                    <td><span class="text-success">{{__('messages.success')}}</span></td>

                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-danger text-center">{{__('messages.no_records_found')}}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <p class="card-text text-center">{{ $data['transactions']->links('pagination::bootstrap-4') }}</p>
                    </div>
                </div>
            </div>
        </div>




</div>
@endsection
