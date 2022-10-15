<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use App\Models\Role;
use App\Models\User;
use Livewire\WithFileUploads;
use Carbon\Carbon;
class UserCreateForm extends Component
{
    use WithFileUploads;
    public $name,$email,$role,$password,$gender,$age,$address,$picture,$phone;

    protected function rules(){
        return [
            'name' => 'required|max:40',
            'address' => 'required|max:100',
            'email' => 'required|email',
            'gender' => 'required',
            'phone' => 'required',
            'age' => 'required|numeric',
            'role' => 'required',
            'picture' => 'required|image',
            'password' => 'required'

        ];
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required|max:40',
            'address' => 'required|max:100',
            'email' => 'required|email',
            'gender' => 'required',
            'phone' => 'required',
            'age' => 'required|numeric',
            'role' => 'required',
            'picture' => 'required|image',
            'password' => 'required'
        ]);
    }

    public function StoreUserData(){
        $this->validate();

        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'roles_id' => $this->role,
            'phone_number' => $this->phone,
            'address' => $this->address,
            'password' => $this->password,
            'photo' => $this->picture->hashName(),
            'gender' => $this->gender,
            'age' => $this->age,

        ];
        if(!empty($this->picture)){
            $this->picture->store('public/photos');
        }
        User::create($data);
        return redirect()->route('user.index')->with('success', 'Address was edited successfully');




    }

    public function render()
    {
        $roles = Role::get();

        return view('livewire.form.user-create-form',[
            'roles' => $roles
        ]);
    }
}
