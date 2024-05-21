<?php namespace App\Repositories\Service;

use App\Helpers\DataResponse;
use App\Models\Service;
interface ServiceInterface {
    public function index():array;
    public function create():array;
    public function show($key);
    public function store(Request $request):bool;
    public function edit($id):array;
    public function update(Request $request,$id):bool;
    public function destroy($id):bool;
}
