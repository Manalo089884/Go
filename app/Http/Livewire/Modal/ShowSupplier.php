<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Supplier;
class ShowSupplier extends Component
{
    public $modelId;
    public $name;
    public $contact;
    public $email;
    public $address;

    protected $listeners = [
        'getSupplierModalId',

        'forceCloseModal',
    ];



    public function closeModal(){
        $this->cleanVars();
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('CloseShowModal');
    }

    public function forceCloseModal(){
        $this->cleanVars();
    }

    public function getSupplierModalId($modelId){
        $this->modelId = $modelId;
        $supplier = Supplier::onlyTrashed()->findorFail($this->modelId);
        $this->name = $supplier->name;
        $this->contact = $supplier->contact;
        $this->email = $supplier->email;
        $this->address = $supplier->address;
    }

    private function cleanVars(){
        $this->modelId = null;
        $this->name = null;
        $this->contact = null;
        $this->email = null;
        $this->address = null;
    }

    public function render()
    {
        return view('livewire.modal.show-supplier');
    }
}
