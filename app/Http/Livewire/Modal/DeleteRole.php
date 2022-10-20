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
<<<<<<< HEAD

    }
    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;
=======
    
    }
    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;   
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======

    }
    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    public function delete(){
        $role = Role::find($this->modelId);
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7


        if($role->roleTransaction()->count()){
            $this->dispatchBrowserEvent('InvalidAlert',[
                'name' => $role->name.' has a User records!',
                'title' => 'Delete Failed!',
            ]);
        }else{
<<<<<<< HEAD
=======
           
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
            $role->delete();
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $role->name.' was successfully deleted!',
                'title' => 'Record Deleted',
            ]);
<<<<<<< HEAD
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
=======
        }
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }
    public function render()
    {
        return view('livewire.modal.delete-role');
    }
}
