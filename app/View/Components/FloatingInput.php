<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FloatingInput extends Component
{
    public $type;
    public $id;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $id, $value = null)
    {
        $this->type = $type;
        $this->id = $id;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.floating-input');
    }
}
