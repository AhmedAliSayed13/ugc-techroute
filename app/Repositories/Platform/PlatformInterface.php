<?php namespace App\Repositories\Platform;

use App\Helpers\DataResponse;
use App\Models\Platform;
use Illuminate\Http\Request;
interface PlatformInterface {
    
    public function report(Request $request);
    public function reportEdit(Request $request);
    public function reportUpdate(Request $request);
   
}