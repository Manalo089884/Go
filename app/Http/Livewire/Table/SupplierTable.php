<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Supplier;
use Livewire\WithPagination;
class SupplierTable extends Component
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
            $suppliers = Supplier::search($this->search)->orderBy('name','asc')->paginate($this->perPage);
        }elseif($this->sorting == 'nameza'){
            $suppliers = Supplier::search($this->search)->orderBy('name','desc')->paginate($this->perPage);
        }elseif($this->sorting == 'createdold'){
            $suppliers = Supplier::search($this->search)->orderBy('created_at','asc')->paginate($this->perPage);
        }elseif($this->sorting == 'creatednew'){
            $suppliers = Supplier::search($this->search)->orderBy('created_at','desc')->paginate($this->perPage);
        }elseif($this->sorting == 'updatedatold'){
            $suppliers = Supplier::search($this->search)->orderBy('updated_at','asc')->paginate($this->perPage);
        }elseif($this->sorting == 'updatedat'){
            $suppliers = Supplier::search($this->search)->orderBy('updated_at','desc')->paginate($this->perPage);
        }else{
            $suppliers = Supplier::search($this->search)->orderBy('name','asc')->paginate($this->perPage);
        }
        return view('livewire.table.supplier-table',[
            'suppliers' => $suppliers
        ]);
    }
    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;

        if($action == 'archive'){
            $this->emit('getModelArchiveID',$this->selectedItem);
            $this->dispatchBrowserEvent('openArchiveModal');
        }
            $this->action = $action;
    }
}
