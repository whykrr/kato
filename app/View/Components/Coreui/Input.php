<?php

namespace App\View\Components\Coreui;

use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $type;
    public $name;
    public $value;
    public $ph;
    public bool $multiple;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $type, $name, $value = '', $ph = '', $multiple = false)
    {
        $this->label = $label;
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->ph = $ph;
        $this->multiple = $multiple;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coreui.input');
    }
}
