<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button_acttion extends Component
{
    public $item;
    public $id;
    public $show;
    public $edit;
    public $delete;
    public $items;
    /**
     * Create a new component instance.
     */
    public function __construct($item,$id,$show=null,$edit=null,$delete=null,$items=[])
    {
        $this->item=$item;
        $this->id=$id;
        $this->show=$show;
        $this->edit=$edit;
        $this->delete=$delete;
        $this->items=$items;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.admin.button_acttion');
    }
}
