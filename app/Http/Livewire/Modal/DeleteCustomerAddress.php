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
<<<<<<< HEAD
    }

    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;
    }

=======

    }
    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;
    }
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }
<<<<<<< HEAD

=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
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
<<<<<<< HEAD

=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    public function render()
    {
        return view('livewire.modal.delete-customer-address');
    }
}
