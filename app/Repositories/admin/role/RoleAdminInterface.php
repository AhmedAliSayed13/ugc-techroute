<?php namespace App\Repositories\admin\role;

use App\Helpers\DataResponse;

interface RoleAdminInterface {
    public function index():array;
    public function create():array;
    public function show($key);
    public function store(Request $request):bool;
    public function edit($id):array;
    public function update(Request $request,$role):bool;
    public function destroy($id):bool;
}
