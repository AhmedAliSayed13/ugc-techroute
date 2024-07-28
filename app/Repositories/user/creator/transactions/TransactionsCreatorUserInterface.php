<?php namespace App\Repositories\user\creator\transactions;



interface TransactionsCreatorUserInterface {

    public function index():array;
    public function create():array;
    public function store($request):bool;

}
