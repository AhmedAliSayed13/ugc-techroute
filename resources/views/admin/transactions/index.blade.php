@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <!-- start page title -->

    <x-breadcrumb :section="'Transactions'" :sectionUrl="route('admin.transactions.index')"
        :title="'List Transactions'" />
    <x-search :addUrl="''" :modelName="'Transaction'" />



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-sm mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Wallet Type</th>
                                            <th>Wallet balance</th>
                                            <th>User</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Transaction Type</th>
                                            <th> created at</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['transactions'] as $transaction)
                                        <tr>
                                            <th scope="row">{{$transaction->id}}</th>
                                            <td>{{isset($transaction->walletType->name)?$transaction->walletType->name:'-'}}
                                            </td>
                                            <td>{{isset($transaction->wallet->balance)?$transaction->wallet->balance:'-'}}
                                            </td>
                                            <td>{{isset($transaction->wallet->user)?$transaction->wallet->user->name:'-'}}
                                            </td>
                                            <td>
                                                <span class="badge bg-primary ">
                                                    {{isset($transaction->amount)?$transaction->amount:'-'}} $
                                                </span>
                                            </td>

                                            <td>{{isset($transaction->transactionStatus->name)?$transaction->transactionStatus->name:'-'}}</td>
                                            <td>
                                                @if($transaction->transaction_status_id == 1)
                                                    <span class="badge bg-warning">{{$transaction->transactionStatus->name}}</span>
                                                @elseif($transaction->transaction_status_id == 2)
                                                    <span class="badge bg-success">{{$transaction->transactionStatus->name}}</span>
                                                @elseif($transaction->transaction_status_id == 3)
                                                    <span class="badge bg-danger">{{$transaction->transactionStatus->name}}</span>
                                                @endif
                                            </td>
                                            <td>{{$transaction->created_at}}</td>
                                            <td>

                                                <x-button_acttion :item="$transaction" :id="$transaction->id"
                                                    :show="route('admin.transactions.show',$transaction->id)"
                                                    :edit="route('admin.transactions.edit',$transaction->id)" />
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <x-pagination :items="$data['transactions']" />
                        </div>



                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
