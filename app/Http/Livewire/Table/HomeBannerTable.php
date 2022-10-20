<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Home;
use Livewire\WithPagination;
class HomeBannerTable extends Component
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

    public function selectItem($itemId,$action){
        $this->selectedItem = $itemId;

        if($action == 'delete'){
            $this->emit('getModelDeleteModalId',$this->selectedItem);
            $this->dispatchBrowserEvent('openDeleteModal');
        }
            $this->action = $action;
    }

    public function render()
    {
        $banners = Home::search($this->search)->paginate($this->perPage);
        return view('livewire.table.home-banner-table',[
            'banners' => $banners,
        ]);
    }
}
