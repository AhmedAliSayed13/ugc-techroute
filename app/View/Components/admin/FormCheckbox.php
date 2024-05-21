<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class FormCheckbox extends Component
{
    public $items;
    public $title;
    public $name;
    public $value;
    public $width;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items,$title,$name,$value=null,$width=6)
    {
        
        $this->items=$items;
        $this->title=$title;
        $this->name=$name;
        $this->value=$value;
        $this->width=$width;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.form-checkbox');
    }
}
