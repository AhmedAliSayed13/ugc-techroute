<?php namespace App\Repositories\Marketing\Ajax;

use App\Helpers\DataResponse;

interface AjaxInterface {
    
    public function getOrder($id);
    public function getService($id);
    
}