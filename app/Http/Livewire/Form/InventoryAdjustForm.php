<?php

namespace App\Http\Livewire\Form;
use App\Models\Product;
use Illuminate\Validation\Rule;
use Livewire\Component;

class InventoryAdjustForm extends Component
{
    public $inventoryAdjust;
    public $modelId;
    public $productname;
    public $total;

    protected $listeners = [
        'getAdjustModalId',
        'refreshChild' => '$refresh',
        'forceCloseModal',
    ];

    public function render()
    {
        return view('livewire.form.inventory-adjust-form');
    }

    protected function rules(){
        return [
            'inventoryAdjust' => 'required|numeric'
        ];
    }
    public function forceCloseModal(){
        $this->cleanVars();
        $this->resetErrorBag();
    }

    public function getAdjustModalId($modelId){
        $this->modelId = $modelId;
        $product = Product::findorFail($this->modelId);
        $this->inventoryedit = $product->stock;
        $this->productname = $product->name;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'inventoryAdjust' => 'required|numeric'
        ]);
    }

    public function AdjustInventoryData(){
        $product = Product::findorFail($this->modelId);
        $this->validate();
        $total = $product->stock + $this->inventoryAdjust;
        $product->stock = $total;

        $product->update();

        $this->dispatchBrowserEvent('SuccessAlert',[
            'name' => $this->productname.' was successfully saved!',
            'title' => 'Product Inventory Adjusted',
        ]);

        $this->cleanVars();
        $this->dispatchBrowserEvent('CloseModal');
        $this->emit('refreshParent');
        $this->resetErrorBag();
    }

    private function cleanVars(){
        $this->modelId = null;
        $this->inventoryAdjust = null;
        $this->productname = null;
        $this->total = null;
    }

    public function closeModal(){
        $this->cleanVars();
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('CloseModal');
    }
}
