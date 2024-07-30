<?php namespace App\Repositories\user\client\wallet;

use App\Helpers\FilePublicManager;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Transaction;
class WalletClientUserRepository implements WalletClientUserInterface
{

    public function topUp(): array
    {
        $data = array(
        );
        return $data;
    }
    public function topUpSave($request): bool
    {
        try {
            Stripe::setApiKey(config('services.stripe.secret'));
            $charge = Charge::create([
                'amount' => $request->amount * 100,
                'currency' => 'usd',
                'source' => $request->stripeToken,
                'description' => 'top up wallet with amount ' . $request->amount,
            ]);
            $user=Auth::user();
            $wallet = $user->wallet(2);

            $purchaseTransaction = Transaction::create([
                'wallet_type_id' => 2,
                'wallet_id' => $wallet->id,
                'amount' => $request->amount,
                'type'=>'deposit',
                'transaction_status_id'=>2,
            ]);
            $user->wallet(2)->incrementBalance($purchaseTransaction);
            toastr()->success(__('messages.Updated_successfully'), __('messages.successOperation'));
            return true;
        } catch (\Exception $e) {
            toastr()->error(__('messages.error'), $e->getMessage());
            return false;
        }
    }
    public function transactions(): array
    {
        $wallet=Auth::user()->wallets(2)->first();
        $transactions=Transaction::where('wallet_id',$wallet->id)->orderBy('id','desc')->paginate(10);
        $data = array(
            'wallet' => $wallet,
            'transactions' => $transactions,
        );
        return $data;
    }
}
