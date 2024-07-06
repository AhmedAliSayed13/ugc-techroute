<?php namespace App\Repositories\user\creator\tasks;



interface TasksCreatorUserInterface {

    public function index():array;
    public function show($id):array;
    public function requestSend($request,$id);
    public function whitelist($id);

}
