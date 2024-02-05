<?php

namespace App\View\Components\Coreui;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $label;
    public $name;
    public $value;
    public $ph;
    public $large;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $value = '', $ph = '', $large = false)
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->ph = $ph;
        $this->large = $large;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coreui.textarea');
    }
}
