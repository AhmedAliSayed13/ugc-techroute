<?php namespace App\Repositories\user\creator\offers;



interface OffersCreatorUserInterface {

    public function index():array;
    public function show($id):array;

}
