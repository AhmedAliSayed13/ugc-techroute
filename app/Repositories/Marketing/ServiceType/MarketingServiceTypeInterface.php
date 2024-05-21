<?php namespace App\Repositories\Marketing\ServiceType;

use App\Helpers\DataResponse;
use App\Models\MarketingServiceType;
interface MarketingServiceTypeInterface {
    public function index():array;
    public function create():array;
    public function store(Request $request):bool;
    public function edit($id):array;
    public function update(Request $request,$id):bool;
    public function destroy($id):bool;
}