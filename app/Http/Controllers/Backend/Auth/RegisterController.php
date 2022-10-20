<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
use App\Http\Requests\StoreUserRequest;
=======

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
class RegisterController extends Controller
{

     public function index(){
        return view('admin.auth.register');
    }
<<<<<<< HEAD
    public function store(StoreUserRequest $request){

        $request->validated();

=======
    public function store(Request $request){
         $this->validate($request,[
            'name' => 'required|max:255',
            'email'=>'required|max:255',
            'password'=>'required|confirmed',
            'age' => 'required|max:255',
            'gender' => 'required|max:255',
        ]);
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
         $save = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'gender'=>$request->gender,
            'password' => Hash::make($request->password)
        ]);

        if($save){
          return redirect()->route('login.index')->with('info', 'You have successfully registered');
        }else{
          return back()->with('fail', "Something went wrong, failed to register");
        }
<<<<<<< HEAD
=======
          //auth()->attempt($request->only('email','password'));
        //redirect
         //return redirect()->route('login.index');
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa

    }
}
