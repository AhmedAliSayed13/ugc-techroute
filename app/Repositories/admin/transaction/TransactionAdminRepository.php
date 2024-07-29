<?php namespace App\Repositories\admin\transaction;

use App\Models\Transaction;
use App\Models\MainOption;
use App\Models\TransactionStatus;
use DB;

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
            $transaction = Transaction::find($id);
            $transaction->transaction_status_id = $request->transaction_status_id;
            $transaction->save();
            toastr()->success('Item Has Been Updated Successfully');
            return true;
        } catch (\Exception $th) {
            toastr()->error($th->getMessage());
            return false;
        }
    }


}
