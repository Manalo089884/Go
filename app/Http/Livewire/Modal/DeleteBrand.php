<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Brand;
class DeleteBrand extends Component
{
    public $modelId;

<<<<<<< HEAD
=======
 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
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
=======
    
    }
    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;   
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
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
<<<<<<< HEAD
        }else{
=======
        }else{            
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
            $brand->delete();
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $brand->name.' was successfully deleted!',
                'title' => 'Record Deleted',
            ]);
        }
        $this->emit('refreshParent');
        $this->cleanVars();
<<<<<<< HEAD
        $this->dispatchBrowserEvent('CloseDeleteModal');
=======
        $this->dispatchBrowserEvent('CloseDeleteModal');  
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    }
    public function render()
    {
        return view('livewire.modal.delete-brand');
    }

}
