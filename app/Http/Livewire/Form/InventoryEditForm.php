<?php

namespace App\Http\Livewire\Form;
use App\Models\Product;
use Illuminate\Validation\Rule;
use Livewire\Component;

class InventoryEditForm extends Component
{
    public $inventoryedit;
    public $modelId;
    public $productname;

    protected $listeners = [
        'getEditModalId',
        'refreshChild' => '$refresh',
        'forceCloseModal',
    ];

    protected function rules(){
        return [
            'inventoryedit' => 'required|numeric'
        ];
    }
    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }

    public function getEditModalId($modelId){
        $this->modelId = $modelId;
        $product = Product::findorFail($this->modelId);
        $this->inventoryedit = $product->stock;
        $this->productname = $product->name;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'inventoryedit' => 'required|numeric',
        ]);
    }


    public function EditInventoryData(){
        $product = Product::findorFail($this->modelId);
        $this->validate();
        $product->stock = $this->inventoryedit;
        $product->update();

        $this->dispatchBrowserEvent('SuccessAlert',[
            'name' => $this->productname.' was successfully saved!',
            'title' => 'Product Inventory Edited',
        ]);

        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseModal');
        $this->emit('refreshParent');
        $this->resetErrorBag();
    }

    private function cleanVars(){
        $this->modelId = null;
        $this->inventoryedit = null;
        $this->productname = null;
    }

    public function closeModal(){
        $this->cleanVars();
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('CloseModal');
    }
    public function render()
    {
        return view('livewire.form.inventory-edit-form');
    }

}
