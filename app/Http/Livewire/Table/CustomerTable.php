<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Customer;
use App\Models\Images;

class CustomerTable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';

    public $action;
    public $selectedItem;
    
    public function render()
    {
        
        $customers = Customer::paginate($this->perPage);
        return view('livewire.table.customer-table',[
            'customers' => $customers,
        ]);
    }

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;

        if($action == 'delete'){
            $this->emit('getModelDeleteModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openDeleteModal');
        }
        $this->action = $action;
    }

}
