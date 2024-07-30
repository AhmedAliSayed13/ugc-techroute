<?php

namespace App\Http\Controllers\user\client\wallet;

use App\Http\Controllers\Controller;
use App\Repositories\user\client\wallet\WalletClientUserInterface;
use App\Http\Requests\user\client\wallet\topUpWalletClientRequest;
use Illuminate\Http\Request;
class WalletClientUserController extends Controller
{
    protected $walletClientUserInterface;
    private $path = "user.client.wallet.";

    public function __construct(WalletClientUserInterface $walletClientUserInterface)
    {
        $this->walletClientUserInterface = $walletClientUserInterface;
    }
    public function topUp()
    {
        $data = $this->walletClientUserInterface->topUp();
        return view($this->path . 'top_up', compact('data'));
    }
    public function topUpSave(topUpWalletClientRequest $request)
    {
        $data = $this->walletClientUserInterface->topUpSave($request);
        return back();
    }
    public function transactions()
    {
        $data = $this->walletClientUserInterface->transactions();
        return view($this->path . 'transactions', compact('data'));
    }


}
