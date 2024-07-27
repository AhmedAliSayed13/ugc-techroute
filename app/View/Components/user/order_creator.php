<?php

namespace App\View\Components\user;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class order_creator extends Component
{
    public $task;
    /**
     * Create a new component instance.
     */
    public function __construct($task)
    {
        $this->task = $task;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.user.order_creator');
    }
}
