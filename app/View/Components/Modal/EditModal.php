<?php

namespace App\View\Components\Modal;

use Illuminate\View\Component;

class EditModal extends Component
{
    public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.edit-modal');
    }
}
