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
        $this->sorting = "nameaz";
        $this->perPage = 10;
    }



    public function render()
    {
        if($this->sorting == 'nameaz'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->orWhere('email','like','%'.$this->search.'%')
            ->orWhere('contact','like','%'.$this->search.'%')
            ->orWhere('address','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('name','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'nameza'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->orWhere('email','like','%'.$this->search.'%')
            ->orWhere('contact','like','%'.$this->search.'%')
            ->orWhere('address','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('name','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'createdold'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->orWhere('email','like','%'.$this->search.'%')
            ->orWhere('contact','like','%'.$this->search.'%')
            ->orWhere('address','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('created_at','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'creatednew'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->orWhere('email','like','%'.$this->search.'%')
            ->orWhere('contact','like','%'.$this->search.'%')
            ->orWhere('address','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('created_at','desc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'updatedatold'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->orWhere('email','like','%'.$this->search.'%')
            ->orWhere('contact','like','%'.$this->search.'%')
            ->orWhere('address','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('updated_at','asc')
            ->paginate($this->perPage);
        }elseif($this->sorting == 'updatedat'){
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->orWhere('email','like','%'.$this->search.'%')
            ->orWhere('contact','like','%'.$this->search.'%')
            ->orWhere('address','like','%'.$this->search.'%')
            ->onlyTrashed()
            ->orderBy('updated_at','desc')
            ->paginate($this->perPage);
        }else{
            $suppliers = Supplier::where('name','like','%'.$this->search.'%')
            ->orWhere('email','like','%'.$this->search.'%')
            ->orWhere('contact','like','%'.$this->search.'%')
            ->orWhere('address','like','%'.$this->search.'%')
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
        }else{
            $this->emit('getModelRestoreId',$this->selectedItem);
            $this->dispatchBrowserEvent('OpenRestoreModal');

        }
        $this->action = $action;
    }
}
