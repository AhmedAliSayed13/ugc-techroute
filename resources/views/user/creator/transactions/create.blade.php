@extends('user.creator.layouts.master')
@section('content')
<div class="container-fluid mt-4">

    <div class="row">


        <div class="col-12">


            <!-- profile -->
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{__('messages.wallet_balance')}}: <span
                            class="text-primary">${{Auth::user()->wallet(1)->balance}}</span>
                    </h4>
                </div>
                <div class="card-body ">
                    <form class="validate-form" method="POST"
                        action="{{route('creator.transactions.store')}}">
                        @csrf
                        <!-- form -->
                        <div class="row">
                            <div class="col-12 col-sm-12 mb-1">
                                <div class="mb-1">
                                    <label class="form-label" for="current_password">{{__('messages.transaction_amount')}}</label>
                                    <input type="number" min="1" step="0.01" class="form-control" id="amount"
                                        name="amount" required />
                                        <p><small class="text-muted">{{__('messages.transaction_amount_description')}}</small></p>
                                </div>
                                @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>



                            <div class="col-12">
                                <button type="submit"
                                    class="btn btn-primary mt-1 me-1">{{__('messages.saveChanges')}}</button>
                                <button type="reset"
                                    class="btn btn-outline-secondary mt-1">{{__('messages.discard')}}</button>
                            </div>
                        </div>
                    </form>
                    <!--/ form -->
                </div>
            </div>


        </div>


</div>

</div>
@endsection
