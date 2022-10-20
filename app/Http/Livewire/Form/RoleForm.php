<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use App\Models\Role;
use Illuminate\Validation\Rule;
class RoleForm extends Component
{
    public $name;
    public $modelId;
    public $oldname;

    protected $listeners = [
        'getModelId',
        'refreshChild' => '$refresh',
        'forceCloseModal',
    ];

    protected function rules(){
        return [
            'name'=> ['required', Rule::unique('roles')->ignore($this->modelId)],
        ];
    }

    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }

    public function getModelId($modelId){
        $this->modelId = $modelId;
        $roles = Role::findorFail($this->modelId);
        $this->name = $roles->name;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required|unique:roles,name,'.$this->modelId.'',
        ]);
    }
    public function closeModal(){
        $this->cleanVars();
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('CloseModal');
    }

    public function StoreRoleData(){
        $model = Role::find($this->modelId);
        if($this->modelId){
            $this->validate();
            $this->oldname = $model->name;
            $model->name = $this->name;
            $model->update();

            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $this->oldname.' was sucessfully changed to '.$this->name, 
                'title' => 'Record Successfully Edit',
            ]);
        }else{
            Role::create($this->validate());
            $this->dispatchBrowserEvent('SuccessAlert',[
                'name' => $this->name.' was successfully saved!',
                'title' => 'Record Saved',
            ]);
        }
        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseModal');
        $this->emit('refreshParent');
        $this->resetErrorBag();
    }
    
    private function cleanVars(){
        $this->modelId = null;
        $this->name = null;
        $this->oldname = null;
    }
    public function render()
    {
        return view('livewire.form.role-form');
    }
}
