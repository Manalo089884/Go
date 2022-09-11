<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Brand;
class DeleteBrand extends Component
{
    public $modelId;

    public function render()
    {
        return view('livewire.modal.delete-brand');
    }

    protected $listeners = [
        'getModelDeleteModalId'
    ];

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
        $brand = Brand::find($this->modelId);

        if($brand->brandTransactions()->count()){
            $this->dispatchBrowserEvent('InvalidAlert',[
                'name' => $brand->name.' has a product records!',
                'title' => 'Delete Failed!',
            ]);
        }else{            
            $brand->delete();
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $brand->name.' was successfully deleted!',
                'title' => 'Record Deleted',
            ]);
        }
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');  
    }
}
