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
<<<<<<< HEAD
    }

    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;
    }

=======

=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }

    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;
    }
<<<<<<< HEAD
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======

>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======

>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
<<<<<<< HEAD

=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======

>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    public function render()
    {
        return view('livewire.modal.delete-customer-address');
    }
}
