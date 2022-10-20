<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Supplier;
class ArchiveSupplier extends Component
{
    public $modelId;

    protected $listeners = [
        'getModelArchiveID',
        'refreshChild' => '$refresh',
        'forceCloseModal',
    ];

    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }

    public function getModelArchiveID($modelId){
        $this->modelId = $modelId;
    }
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    private function cleanVars(){
        $this->modelId = null;
    }

    public function delete(){
        $supplier = Supplier::find($this->modelId);
        if($supplier->supplierTransactions()->count()){
            $this->dispatchBrowserEvent('InvalidAlert',[
                'name' => $supplier->name.' has a product records!',
                'title' => 'Archived Failed!',
            ]);
        }else{
            $supplier->delete();
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $supplier->name.' was successfully archived!',
                'title' => 'Record Archived',
            ]);
        }


        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    public function render()
    {
        return view('livewire.modal.archive-supplier');
    }
}
