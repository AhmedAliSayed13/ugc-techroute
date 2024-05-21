<?php namespace App\Repositories\Marketing\Category;

use App\Helpers\DataResponse;
use App\Models\Category;
interface CategoryInterface {
    public function index():array;
    public function create():array;
    public function store(Request $request):bool;
    public function edit($id):array;
    public function update(Request $request,$id):bool;
    public function destroy($id):bool;
}