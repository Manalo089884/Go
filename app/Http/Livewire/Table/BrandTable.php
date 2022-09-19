<?php

namespace App\Http\Livewire\Table;

use App\Models\Brand;
use Livewire\WithPagination;
use Livewire\Component;

class BrandTable extends Component
{
    use WithPagination;
    
    public $perPage = 10;
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
        return view('livewire.table.brand-table',[
            'brands' => Brand::search($this->search)
            ->orderBy('name')
            ->paginate($this->perPage)
        ]);
    }
 
    public function updatingSearch(){
        $this->resetPage();
    }
    
    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;

        if($action == 'delete'){
            $this->emit('getModelDeleteModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openDeleteModal');
        }else{
            $this->emit('getModelId',$this->selectedItem);
            $this->dispatchBrowserEvent('OpenModal');
        }
        $this->action = $action;
    }
    
   
}
