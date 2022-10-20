<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use App\Models\Brand;
use Illuminate\Validation\Rule;

class BrandForm extends Component
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
            'name'=> ['required', Rule::unique('brand')->ignore($this->modelId)],
        ];
    }

     public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }

    public function getModelId($modelId){
        $this->modelId = $modelId;
        $brand = Brand::findorFail($this->modelId);
        $this->name = $brand->name;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required|unique:brand,name,'.$this->modelId.'',
        ]);
    }

    public function closeModal(){
        $this->cleanVars();
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('CloseModal');
    }

    public function StoreBrandData(){
        $model = Brand::find($this->modelId);
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
            Brand::create($this->validate());
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
        return view('livewire.form.brand-form');
    }
}
