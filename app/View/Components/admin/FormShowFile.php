<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormShowFile extends Component
{
    public $items;
    public $key;
    public $title;
    public $delete;
    public $width;

    /**
     * Create a new component instance.
     */
    public function __construct($items,$key,$title,$delete=false,$width=6)
    {
        $this->items=$items;
        $this->key=$key;
        $this->title=$title;
        $this->delete=$delete;
        $this->width=$width;
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.form-show-file');
    }
}
