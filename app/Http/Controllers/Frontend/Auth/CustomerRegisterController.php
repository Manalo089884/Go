<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerRegisterController extends Controller
{
    public function index(){  
        return view('customer.auth.register');
    }
    public function store(Request $request){
         $this->validate($request,[
            'name' => 'required|max:255',
            'email'=>'required|max:255',
            'password'=>'required|confirmed',
            'age' => 'required|max:255',
            'gender' => 'required|max:255',
        ]);
          User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'gender'=>$request->gender,
            'password' => Hash::make($request->password)
        ]);
          auth()->attempt($request->only('email','password'));
        //redirect
         return redirect()->route('login.index');
        
    }
}
