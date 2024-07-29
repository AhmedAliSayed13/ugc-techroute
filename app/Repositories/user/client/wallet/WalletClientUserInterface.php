<?php namespace App\Repositories\user\client\wallet;



interface WalletClientUserInterface {

    public function topUp():array;
    public function topUpSave($request):bool;

}
