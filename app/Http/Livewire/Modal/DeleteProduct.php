<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
class DeleteProduct extends Component
{
    public $modelId;
    public function render()
    {
        return view('livewire.modal.delete-product');
    }
 
    protected $listeners = [
        'getModelDeleteModalId',
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

    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;   
    }
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    public function delete(){
        $product = Product::find($this->modelId);
            $product->delete();
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $product->name.' was successfully deleted!',
                'title' => 'Record Deleted',
            ]);
        
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');  
    }
}
