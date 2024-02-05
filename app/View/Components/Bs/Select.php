<?php

namespace App\View\Components\Bs;

use Illuminate\View\Component;

class Select extends Component
{
    public $label;
    public $name;
    public $value;
    public $options = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $value = '', array $options = [])
    {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bs.select');
    }
}
