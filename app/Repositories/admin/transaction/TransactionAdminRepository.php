<?php namespace App\Repositories\admin\transaction;

use App\Models\Transaction;
use App\Models\MainOption;
use App\Models\TransactionStatus;
use Illuminate\Support\Facades\DB;

class TransactionAdminRepository implements TransactionAdminInterface
{

    public function index(): array
    {
        $transactions = Transaction::AcceptRequest(getFillableSort('Transaction'))
            ->filter()
            ->orderBy(request()->get('sort') ?? 'id')
            ->paginate(request()->get('perpage'), ['*'], 'page');
        $data = array(
            "transactions" => $transactions
        );
        return $data;
    }
    public function edit($id): array
    {
        $transaction = Transaction::find($id);
        $transactionStatuses=TransactionStatus::all();
        $data = array(
            "transaction" => $transaction,
            "transactionStatuses" => $transactionStatuses,
        );
        return $data;
    }
    public function update($request, $id): bool
    {
        try {

            DB::beginTransaction();
            $transaction = Transaction::find($id);
            if($transaction->amount > $transaction->wallet->balance){
                toastr()->error(__('messages.error'), __('messages.Insufficient_balance'));
                return false;
            }
            if($request->transaction_status_id==2 && $transaction->transaction_status_id!=2 && $transaction->type=='posit'){
                $transaction->wallet->decrementBalance($transaction->amount);
            }
            $transaction->transaction_status_id = $request->transaction_status_id;
            $transaction->save();

            DB::commit();
            toastr()->success('Item Has Been Updated Successfully');
            return true;
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }


}
