<?php namespace App\Repositories\user\creator\transactions;

use App\Models\Order;
use App\Models\Task;
use App\Models\Transaction;
use App\Models\Whitelist;
use App\Helpers\FileManager;
use App\Helpers\FilePublicManager;
use Illuminate\Support\Facades\Auth;
class TransactionsCreatorUserRepository implements TransactionsCreatorUserInterface
{

    public function index(): array
    {
        $wallet=Auth::user()->wallets(1)->first();
        $transactions=Transaction::where('wallet_id',$wallet->id)->orderBy('id','desc')->paginate(10);
        $data = array(
            'wallet' => $wallet,
            'transactions' => $transactions,
        );
        return $data;
    }
    public function create(): array
    {
        $data = array(
            // 'task' => $task,
            // 'order' => $task->order,
        );
        return $data;
    }
    public function store($request): bool
    {
        try {
            $transaction=Transaction::create([
                'wallet_id' => Auth::user()->wallets(1)->first()->id,
                'amount' => $request->amount,
                'wallet_type_id' => 1,
                'type' => 'posit',

            ]);
            toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));

            return true;
        } catch (\Throwable $th) {
            toastr()->error(__('messages.error'), $th->getMessage());
            return false;
        }
    }
    
}
