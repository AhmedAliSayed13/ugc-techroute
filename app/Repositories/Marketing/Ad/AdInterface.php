<?php namespace App\Repositories\Marketing\Ad;

use App\Helpers\DataResponse;
use App\Models\Ad;
interface AdInterface {
    public function index():array;
    public function create();
    public function store(Request $request);
    public function edit($id):array;
    public function update(Request $request,$id):bool;
    public function destroy($id):bool;
}