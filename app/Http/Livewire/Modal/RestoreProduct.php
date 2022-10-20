<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
class RestoreProduct extends Component
{
    public $modelId;
    public function render()
    {
        return view('livewire.modal.restore-product');
    }
    protected $listeners = [
        'getModelRestoreId',
        'forceCloseModal',
        'refreshChild' => '$refresh',
    ];
    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }
    private function cleanVars(){
        $this->modelId = null;
    }
    public function getModelRestoreId($modelId){
        $this->modelId = $modelId;   
    }
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('closeRestoreModal');
    }
    public function restore(){
        $product = Product::onlyTrashed()->find($this->modelId);
        $product->restore();
        $this->dispatchBrowserEvent('SuccessAlert',[
            'name' => $product->name.' was successfully restored!',
            'title' => 'Record Restore',
        ]);
        
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('closeRestoreModal');  
    }

}
