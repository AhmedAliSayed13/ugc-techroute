@extends('user.client.layouts.master')
@section('content')

<div class="app-content content ">
<div class="container-fluid mt-4">


    <div class="row" >
        <div class="col-8 m-auto">

                <div class="card">
                    <div class="card-header">
                        <div>
                            <h2 class="fw-bolder mb-0 fw-bolder text-primary">$ {{Auth::user()->wallet(2)->balance}} </h2>
                            <p class="card-text">{{__('messages.wallet_balance')}}</p>
                        </div>
                        <div class="  p-50 m-0">

                            <a type="button" href="{{route('client.wallet.topup')}}" class="btn btn-outline-primary waves-effect">
                                <i data-feather='plus'></i>
                                <span>{{__('messages.topUpWallet')}}</span>
                            </a>

                        </div>
                    </div>
                </div>

        </div>
        <div class="col-12" id="basic-table">
            <div class="card">
                {{-- <div class="card-header">
                    <h4 class="card-title">{{__('messages.wallet_balance')}}: <span
                            class="text-primary">${{Auth::user()->wallet(2)->balance}}</span>
                    </h4>
                </div> --}}
                <div class="card-body">
                    <p>
                        {{__('messages.walletDescribe')}}
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    {{-- <th>{{__('messages.order_key')}}</th>
                                    <th>{{__('messages.product')}}</th> --}}
                                    <th>{{__('messages.type')}}</th>
                                    <th>{{__('messages.amount')}}</th>
                                    <th>{{__('messages.status')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($data['transactions']) && count($data['transactions'])>0)
                                @foreach ($data['transactions'] as $key => $transaction)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    {{-- <td>{{isset($transaction->task)?$transaction->task->getTaskKey():'-'}}</td>
                                    <td>{{isset($transaction->order)?$transaction->order->product_name:'-'}}</td> --}}
                                    <td>{{__('messages.'.$transaction->type)}}</td>
                                    <td><span class="text-primary">${{$transaction->getAmount()}}</span></td>
                                    <td>
                                        @if($transaction->transaction_status_id == 1)
                                        <span class="text-warning">{{$transaction->transactionStatus->name}}</span>
                                        @elseif($transaction->transaction_status_id == 2)
                                        <span class="text-success">{{$transaction->transactionStatus->name}}</span>
                                        @elseif($transaction->transaction_status_id == 3)
                                        <span class="text-danger">{{$transaction->transactionStatus->name}}</span>
                                        @endif
                                    </td>

                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-danger text-center">{{__('messages.no_records_found')}}
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <p class="card-text text-center">{{ $data['transactions']->links('pagination::bootstrap-4') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
