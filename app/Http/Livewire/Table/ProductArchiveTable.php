<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Product;

class ProductArchiveTable extends Component
{
    use WithPagination;
    public $sorting;
    public $perPage = 5;
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
        $this->perPage = 5;
    }
    public function render()
    {
        if($this->sorting == 'nameaz'){
            $products = Product::where('name','like','%'.$this->search.'%')

            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('name','asc')
            ->paginate($this->perPage);

        }elseif($this->sorting == 'nameza'){
            $products = Product::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('name','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'createdold'){
            $products = Product::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('created_at','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'creatednew'){
            $products = Product::onlyTrashed()
            ->search($this->search)
            ->with('category','brand','images')
            ->orderBy('created_at','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'updatedatold'){
            $products = Product::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('updated_at','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'updatedat'){
            $products = Product::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('updated_at','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'lowinventory'){
            $products = Product::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('stock','asc')
            ->paginate($this->perPage);;
        }elseif($this->sorting == 'highinventory'){
            $products = Product::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('stock','desc')
            ->paginate($this->perPage);
        }
        elseif($this->sorting == 'cataz'){
            $products = Product::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('category_id','asc')
            ->paginate($this->perPage);
        }
        elseif($this->sorting == 'catza'){
            $products = Product::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('category_id','desc')
            ->paginate($this->perPage);
        }
        else{
            $products = Product::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->with('category','brand','images')
            ->orderBy('name','asc')
            ->paginate($this->perPage);
        }
        return view('livewire.table.product-archive-table',[
            'products' => $products
        ]);
    }
    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;

        if($action == 'delete'){
            $this->emit('getModelDeleteModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openDeleteModal');
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        }elseif($action == 'show'){
            $this->emit('getProductModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openShowModal');
        }
        else{
<<<<<<< HEAD
=======
        }else{

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
            $this->emit('getModelRestoreId',$this->selectedItem);
            $this->dispatchBrowserEvent('OpenRestoreModal');

        }
        $this->action = $action;
    }
}
