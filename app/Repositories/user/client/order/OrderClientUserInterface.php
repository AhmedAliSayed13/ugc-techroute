<?php namespace App\Repositories\user\client\order;



interface OrderClientUserInterface {

    public function showDetails():array;
    public function details($request);
    public function showCheckout($key):array;
    public function checkout($request,$key);
    public function calculationPrice($request);


}
