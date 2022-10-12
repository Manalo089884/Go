<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Images;
class ProductTable extends Component
{
    use WithPagination;
    public $sorting;
    public $perPage = 10;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';

    public $action;
    public $selectedItem;


    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function mount(){
        $this->sorting = "nameaz";
        $this->perPage = 10;
    }

    public function render(){
        if($this->sorting == 'nameaz'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('name','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'nameza'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('name','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'createdold'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('created_at','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'creatednew'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('created_at','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'updatedatold'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('updated_at','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'updatedat'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('updated_at','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'lowinventory'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('stock','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'highinventory'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('stock','desc')
            ->paginate($this->perPage);
        }
        elseif($this->sorting == 'cataz'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('category_id','asc')
            ->paginate($this->perPage);
        }
        elseif($this->sorting == 'catza'){
            $products = Product::search($this->search)->with('category','brand','images')
            ->orderBy('category_id','desc')
            ->paginate($this->perPage);
        }
        else{
            $products = Product::search($this->search)->with('category','brand','images')
            ->paginate($this->perPage);
        }

        return view('livewire.table.product-table',[
            'products' => $products,
        ]);
    }

    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;
        /*
        if($action == 'edit'){
            $this->emit('getEditModalID',$this->selectedItem);
            $this->dispatchBrowserEvent('openEditModal');
        }else{
            $this->emit('getModelDeleteModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openDeleteModal');
        }
        */
        if($action == 'delete'){
            $this->emit('getModelDeleteModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openDeleteModal');
        }
            $this->action = $action;
    }

}
