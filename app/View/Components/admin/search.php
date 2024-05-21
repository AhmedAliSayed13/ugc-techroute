<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class search extends Component
{
    public $addUrl;
    public $modelName;
    /**
     * Create a new component instance.
     */
    public function __construct($addUrl=null,$modelName='')
    {
        $this->addUrl=$addUrl;
        
        $this->modelName=$modelName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.search');
    }
}
