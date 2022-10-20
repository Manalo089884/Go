<?php

namespace App\Http\Livewire\Table;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Component;

class UserTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $users = User::search($this->search)
        ->paginate($this->perPage);
        return view('livewire.table.user-table',[
            'users' => $users
        ]);
    }
}
