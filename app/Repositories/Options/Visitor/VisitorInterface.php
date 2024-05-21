<?php namespace App\Repositories\Options\Visitor;

use App\Helpers\DataResponse;
use App\Models\Visitor;
interface VisitorInterface {
    public function index():array;
    public function create():array;
    public function show($key);
    public function store(Request $request):bool;
    public function edit($id):array;
    public function update(Request $request,$id):bool;
    public function destroy($id):bool;
}