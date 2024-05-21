<?php namespace App\Repositories\Marketing\Ajax;



use App\Models\Customer;
use App\Models\MarketingServiceType;
use App\Helpers\FileManager;
use Auth;
use App\Helpers\OdooSystem;
class AjaxRepository implements AjaxInterface
{
    public function getOrder($id)
    {
        $odooSystem = new OdooSystem();
        $token=$odooSystem->token();
        return $orders= $odooSystem->orders($token,$id);
    }
    public function getService($id)
    {
        $odooSystem = new OdooSystem();
        $token=$odooSystem->token();
        return $orders= $odooSystem->orderDetails($token,$id);
    }
}
