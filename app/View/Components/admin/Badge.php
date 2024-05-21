<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    public $type;
    public $text;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$text)
    {
        $this->type=$type;
        $this->text=$text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.badge');
    }
}
