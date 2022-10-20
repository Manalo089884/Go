<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Role;
class RolesTable extends Component
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
        return view('livewire.table.roles-table',[
            'roles' => Role::search($this->search)
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
        }elseif($action == 'manage'){
            
        }
        else{
            $this->emit('getModelId',$this->selectedItem);
            $this->dispatchBrowserEvent('OpenModal');
        }
        $this->action = $action;
    }
}
