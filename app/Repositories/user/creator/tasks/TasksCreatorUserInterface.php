<?php namespace App\Repositories\user\creator\tasks;



interface TasksCreatorUserInterface {

    public function index():array;
    public function show($id):array;
    public function edit($id):array;
    public function update($request,$id);

}
