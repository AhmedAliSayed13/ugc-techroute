<?php

namespace App\Http\Controllers\Marketing;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Marketing\Ajax\AjaxInterface;

class AjaxController extends Controller
{
    protected $AjaxInterface;
    public function __construct(AjaxInterface  $ajaxInterface)
    {
        $this->ajaxInterface = $ajaxInterface;
    }
    public function getOrder($id)
    {
        $result = $this->ajaxInterface->getOrder($id);
        return  $result;
    }
    public function getService($id)
    {
        $result = $this->ajaxInterface->getService($id);
        return  $result;
    }
    
    
    
}

