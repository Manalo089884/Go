<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Product;
class ShowProduct extends Component
{
    public $modelId;
    public $name,$category,$brand,$supplier,$stock,$sku,$cprice,$sprice,$weight,$description;

    protected $listeners = [
        'getProductModalId',
        'forceCloseModal',
    ];

    public function closeModal(){
        $this->cleanVars();
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('CloseShowModal');
    }
    public function forceCloseModal(){
        $this->cleanVars();
    }

    public function getProductModalId($modelId){
        $this->modelId = $modelId;
        $product = Product::onlyTrashed()->findorFail($this->modelId);
        $this->name = $product->name;
        $this->category = $product->category->name;
        $this->brand = $product->brand->name;
        $this->stock = $product->stock;
        $this->cprice = $product->cprice;
        $this->sprice = $product->sprice;
        $this->sku = $product->SKU;
        $this->description = $product->description;
        $this->weight = $product->weight;
        $this->supplier = $product->suppliers->name;

    }
    private function cleanVars(){
        $this->modelId = null;
        $this->name = null;

    }


    public function render()
    {
        return view('livewire.modal.show-product');
    }
}
