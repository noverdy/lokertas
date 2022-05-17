<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainCard extends Component
{
    public $fg;
    public $bg;
    public $icon;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($fg, $bg, $icon, $title)
    {
        $this->fg = $fg;
        $this->bg = $bg;
        $this->icon = $icon;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.main-card');
    }
}
