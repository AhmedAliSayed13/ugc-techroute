<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSelect extends Component
{
    public $name;
    public $title;
    public $value;
    public $width;
    public $options;
    public $optionValue;
    /**
     * Create a new component instance.
     */
    public function __construct($name,$title,$value=null,$width=6,$options=[],$optionValue='name')
    {
        $this->options=$options;
        $this->name=$name;
        $this->title=$title;
        $this->value=$value;
        $this->width=$width;
        $this->optionValue=$optionValue;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.form-select');
    }
}
