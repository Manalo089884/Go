<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
class CategoryTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';

    public $action;
    public $selectedItem;

    public function render()
    {
        return view('livewire.table.category-table',[
            'category' => Category::search($this->search)
            ->orderBy('name')
            ->paginate($this->perPage)
        ]);
    }

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

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
