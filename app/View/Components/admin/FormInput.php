<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    public $type;
    public $title;
    public $name;
    public $value;
    public $width;
    public $disable;
    public $change;
    public $class;
    public $required;

    /**
     * Create a new component instance.
     */
    public function __construct($type,$title=null,$name,$value=null,$width=6,$disable=0,$change=null,$class=null,$required=0)
    {
        $this->type=$type;
        $this->title=$title;
        $this->name=$name;
        $this->value=$value;
        $this->width=$width;
        $this->disable=$disable;
        $this->change=$change;
        $this->class=$class;
        $this->required=$required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.form-input');
    }
}
