<?php

namespace App\View\Components\Coreui;

use Illuminate\View\Component;

class AddLink extends Component
{
    public $label;
    public $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $label = '')
    {
        $this->url = $url;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coreui.add-link');
    }
}
