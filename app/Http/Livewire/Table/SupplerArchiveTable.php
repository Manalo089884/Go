<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Supplier;
class SupplerArchiveTable extends Component
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
        $this->sorting = "deletednew";
        $this->perPage = 10;
    }

    public function render()
    {
        if($this->sorting == 'nameaz'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('name','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'nameza'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('name','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'deletednew'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('deleted_at','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'deletedold'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('deleted_at','asc')
            ->paginate($this->perPage);
        }else{
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('name','asc')
            ->paginate($this->perPage);
        }

        return view('livewire.table.suppler-archive-table',[
            'suppliers' => $suppliers
        ]);
    }
    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;

        if($action == 'delete'){
            $this->emit('getModelDeleteModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openDeleteModal');
        }elseif($action == 'show'){
            $this->emit('getSupplierModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openShowModal');
        }else{
            $this->emit('getModelRestoreId',$this->selectedItem);
            $this->dispatchBrowserEvent('OpenRestoreModal');
        }
        $this->action = $action;
    }
}
