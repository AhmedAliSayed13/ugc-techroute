<?php namespace App\Repositories\user\client\order;



interface OrderClientUserInterface {

    public function showDetails():array;
    public function details($request);


}
