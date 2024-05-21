<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSubmit extends Component
{
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($title)
    {
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.form-submit');
    }
}
