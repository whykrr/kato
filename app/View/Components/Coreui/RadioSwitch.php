<?php

namespace App\View\Components\Coreui;

use Illuminate\View\Component;

class RadioSwitch extends Component
{
    public $label;
    public $name;
    public bool $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, bool $value)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coreui.radio-switch');
    }
}
