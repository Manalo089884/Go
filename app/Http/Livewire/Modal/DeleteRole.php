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

    }
    public function getModelDeleteModalId($modelId){
        $this->modelId = $modelId;
    }
    public function closeModal(){
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }

    public function delete(){
        $role = Role::find($this->modelId);


        if($role->roleTransaction()->count()){
            $this->dispatchBrowserEvent('InvalidAlert',[
                'name' => $role->name.' has a User records!',
                'title' => 'Delete Failed!',
            ]);
        }else{
            $role->delete();
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $role->name.' was successfully deleted!',
                'title' => 'Record Deleted',
            ]);
        }
        $this->emit('refreshParent');
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseDeleteModal');
    }
    public function render()
    {
        return view('livewire.modal.delete-role');
    }
}
