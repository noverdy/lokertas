<?php

namespace App\View\Components;

use Illuminate\View\Component;

class JobCard extends Component
{
    public $vacancy;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($vacancy)
    {
        $this->vacancy = $vacancy;
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
