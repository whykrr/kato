<?php

namespace App\View\Components\Coreui;

use Illuminate\View\Component;

class ModalConfirm extends Component
{
    public $id;
    public $type;
    public $url;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $type, $url)
    {
        $this->id = $id;
        $this->type = $type;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['delete'] = [
            'bg' => 'danger',
            'title' => 'Hapus Data',
            'body' => 'Apakah yakin akan menghapus data ini?',
        ];

        return view('components.coreui.modal-confirm', $data[$this->type]);
    }
}
