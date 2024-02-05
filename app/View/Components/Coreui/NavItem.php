<?php

namespace App\View\Components\Coreui;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $href;
    public $icon;
    public $label;
    public $permission;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($href, $label, $permission, $icon = '')
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->label = $label;
        $this->permission = $permission;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.coreui.nav-item');
    }
}
