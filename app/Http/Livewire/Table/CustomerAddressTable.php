<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\CustomerShippingAddress;
use Illuminate\Support\Facades\Auth;
class CustomerAddressTable extends Component
{
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
        if (Auth::guard('customer')->check()){
            $customer_id = Auth::id();
            $address = CustomerShippingAddress::where('customers_id', $customer_id)->orderBy('name')->get();
        }else{
            return redirect()->route('CLogin.index');
        }
        return view('livewire.table.customer-address-table',[
            'address' => $address
        ]);
    }
}
