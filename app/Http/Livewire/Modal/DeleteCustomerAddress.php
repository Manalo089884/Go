<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\CustomerShippingAddress;
use Illuminate\Support\Facades\Auth;

class DeleteCustomerAddress extends Component
{
    public $modelId;
    protected $listeners = [
        'getModelDeleteModalId',
        'refreshChild' => '$refresh',
        'forceCloseModal',
    ];
    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }
    private function cleanVars(){
        $this->modelId = null;
    }

    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;
    }

    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    public function delete(){
        $address = CustomerShippingAddress::find($this->modelId);
        $address->delete();
        $this->dispatchBrowserEvent('SuccessAlert',[
            'name' => $address->name.' was successfully deleted!',
            'title' => 'Record Deleted',
        ]);

        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    public function render()
    {
        return view('livewire.modal.delete-customer-address');
    }
}
