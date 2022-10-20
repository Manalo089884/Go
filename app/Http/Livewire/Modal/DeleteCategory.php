<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Category;
class DeleteCategory extends Component
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

    public function render()
    {
        return view('livewire.modal.delete-category');
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
        $category = Category::find($this->modelId);

        if($category->categoryTransactions()->count()){
            $this->dispatchBrowserEvent('InvalidAlert',[
                'name' => $category->name.' has a product records!',
                'title' => 'Delete Failed!',
            ]);
        }else{            
            $category->delete();
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $category->name.' was successfully deleted!',
                'title' => 'Record Deleted',
            ]);
        }
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');  
    }
}
