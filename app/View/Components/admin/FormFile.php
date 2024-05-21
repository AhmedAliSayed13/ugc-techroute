<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormFile extends Component
{
    public $type;
    public $title;
    public $name;
    public $value;
    public $width;
    public $multiple;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$title,$name,$value=null,$width=6,$multiple=false)
    {
        $this->type=$type;
        $this->title=$title;
        $this->name=$name;
        $this->value=$value;
        $this->width=$width;
        $this->multiple=$multiple;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.form-file');
    }
}
