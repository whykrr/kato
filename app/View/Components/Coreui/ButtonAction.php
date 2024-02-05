<?php

namespace App\View\Components\Coreui;

use Illuminate\View\Component;

class ButtonAction extends Component
{
    public string $base;
    public int $id;
    public bool $delete;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coreui.button-action');
    }
}
