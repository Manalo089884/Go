<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Role;

class DeleteRole extends Component
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
        $role = Role::find($this->modelId);
<<<<<<< HEAD


        if($role->roleTransaction()->count()){
            $this->dispatchBrowserEvent('InvalidAlert',[
                'name' => $role->name.' has a User records!',
                'title' => 'Delete Failed!',
            ]);
        }else{
=======
           
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
            $role->delete();
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $role->name.' was successfully deleted!',
                'title' => 'Record Deleted',
            ]);
<<<<<<< HEAD
        }
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
=======
        
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');  
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    }
    public function render()
    {
        return view('livewire.modal.delete-role');
    }
}
