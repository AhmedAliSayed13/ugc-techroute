<?php namespace App\Repositories\Marketing\Setting;

use App\Helpers\DataResponse;
use App\Models\MarketingServiceType;
interface SettingInterface {
    public function index():array;
    public function setting():array;
    public function settingSave(Request $request):bool;
    public function changePassword():array;
    public function  changePasswordSave(Request $request):bool;
    // public function edit($id):array;
    // public function update(Request $request,$id):bool;
    // public function destroy($id):bool;
}