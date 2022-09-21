<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;

class ProductArchiveTable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';

    public $action;
    public $selectedItem;
    
    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        $products = Product::onlyTrashed()->orderBy('name')->with('category','brand','images')->paginate($this->perPage);
        return view('livewire.table.product-archive-table',[
            'products' => $products
        ]);
    }
    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;

        if($action == 'delete'){
            $this->emit('getModelDeleteModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openDeleteModal');
        }else{
           
            $this->emit('getModelRestoreId',$this->selectedItem);
            $this->dispatchBrowserEvent('OpenRestoreModal');
      
        }
        $this->action = $action;
    }
}
