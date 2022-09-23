<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Images;
class ProductTable extends Component
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
        $products = Product::search($this->search)->with('category','brand','images')
        ->orderBy('name')
        ->paginate($this->perPage);

        return view('livewire.table.product-table',[
            'products' => $products,
        ]);
    }
    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;

        if($action == 'delete'){
            $this->emit('getModelDeleteModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openDeleteModal');
        }
        $this->action = $action;
    }
    
}
