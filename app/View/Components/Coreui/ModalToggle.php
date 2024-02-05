<?php

namespace App\View\Components\Coreui;

use Illuminate\View\Component;

class ModalToggle extends Component
{
    public $type;
    public $target;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $target, $label)
    {
        $this->type = $type;
        $this->target = $target;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coreui.modal-toggle');
    }
}
