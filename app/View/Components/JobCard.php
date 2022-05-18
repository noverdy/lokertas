<?php

namespace App\View\Components;

use Illuminate\View\Component;

class JobCard extends Component
{
    public $lowongan;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lowongan)
    {
        $this->lowongan = $lowongan;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.job-card');
    }
}
