<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use App\Models\Supplier;
use Illuminate\Validation\Rule;
class SupplierForm extends Component
{
    public $name;
    public $address;
    public $email;
    public $contact;
    public $supplier;

    public function mount($supplier){
        $this->supplier = null;
        if($supplier){
            $this->supplier = $supplier;
            $this->name = $this->supplier->name;
            $this->address = $this->supplier->address;
            $this->contact = $this->supplier->contact;
            $this->email = $this->supplier->email;
        }
    }
    protected function rules(){
        return [
            'name'=> 'required',
            'address' => 'required',
            'email' => 'required|email',
            'contact' => 'required'
        ];
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'contact' => 'required'
        ]);
    }
    public function StoreSupplierData(){
        $this->validate();
        $supplier = [
            'name' => $this->name,
            'address' => $this->address,
            'contact' => $this->contact,
            'email' => $this->email
        ];
            if($this->supplier){
                Supplier::find($this->supplier->id)->update($supplier);
                return redirect()->route('supplier.index')->with('editSuccess', $this->name.' was successfully edited');
            }else{

                Supplier::create($supplier);
                $this->dispatchBrowserEvent('SuccessAlert',[
                    'name' => $this->name.' was successfully saved!',
                    'title' => 'Record Saved',
                ]);
                return redirect()->route('supplier.index')->with('success', $this->name.' was successfully inserted');
            }
    }

    public function render()
    {
        return view('livewire.form.supplier-form');
    }
}
