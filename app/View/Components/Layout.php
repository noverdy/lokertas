<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Layout extends Component
{
    public $title;
    public $transition;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = 'Lowongan Kerja Disabilitas', $transition = 'on')
    {
        $this->title = $title;
        $this->transition = $transition;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout');
    }
}
