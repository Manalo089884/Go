<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Product;
class ProductSuppliedTable extends Component
{
    public $supplier;
    public $search;
    public $sorting;
    public $perPage;

    public function mount($supplier){
        $this->supplier = $supplier;
    }
    public function render()
    {
        if($this->sorting == 'nameaz'){
            $products = Product::where('suppliers_id','=',$this->supplier)
            ->with('category')
            ->where('name','like','%'.$this->search.'%')
            ->orderby('name','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'nameza'){
            $products = Product::where('suppliers_id','=',$this->supplier)
            ->with('category')
            ->where('name','like','%'.$this->search.'%')
            ->orderby('name','desc')
            ->paginate($this->perPage);
        }
        elseif($this->sorting == 'lowinventory'){
            $products = Product::where('suppliers_id','=',$this->supplier)
            ->with('category')
            ->where('name','like','%'.$this->search.'%')
            ->orderby('stock','asc')
            ->paginate($this->perPage);
        }
        elseif($this->sorting == 'highinventory'){
            $products = Product::where('suppliers_id','=',$this->supplier)
            ->with('category')
            ->where('name','like','%'.$this->search.'%')
            ->orderby('stock','desc')
            ->paginate($this->perPage);
        }else{
            $products = Product::where('suppliers_id','=',$this->supplier)
            ->with('category')
            ->where('name','like','%'.$this->search.'%')
            ->orderby('name','asc')
            ->paginate($this->perPage);
        }

        return view('livewire.table.product-supplied-table',[
            'products' => $products
        ]);
    }
}
