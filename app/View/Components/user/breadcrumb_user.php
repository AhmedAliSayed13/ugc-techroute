<?php

namespace App\View\Components\user;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class breadcrumb_user extends Component
{
    public $section;
    public $sectionUrl;
    public $title;
    public $midSections;
    /**
     * Create a new component instance.
     */
    public function __construct($section, $sectionUrl, $title, $midSections = [])
    {
        $this->section = $section;
        $this->sectionUrl = $sectionUrl;
        $this->title = $title;
        $this->midSections = $midSections;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.user.breadcrumb_user');
    }
}
