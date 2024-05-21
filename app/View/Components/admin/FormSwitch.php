<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSwitch extends Component
{
    
    public $title;
    public $name;
    public $value;
    public $width;
    /**
     * Create a new component instance.
     */
    public function __construct($title,$name,$value=0,$width=6)
    {
        
        $this->title=$title;
        $this->name=$name;
        $this->value=$value;
        $this->width=$width;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.form-switch');
    }
}
