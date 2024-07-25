<?php namespace App\Repositories\user\client\shipping;



interface ShippingsClientUserInterface {

    public function index():array;
    public function update($request,$id):bool;

}
