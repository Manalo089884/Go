<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
class CustomerRegisterController extends Controller
{
    public function index(){
        return view('customer.auth.register');
    }
    public function store(Request $request){
         $this->validate($request,[
            'name' => 'required|max:255',
            'email'=>'required|max:255',
            'phone'=>'required|numeric',
            'birthday' => 'required',
            'gender' => 'required|max:255',
            'password' => 'required|min:8|max:255|confirmed'
        ]);


        Customer::create([
          'name' => $request->name,
          'email' => $request->email,
          'phone_number'=>$request->phone,
          'birthday'=>$request->birthday,
          'gender'=>$request->gender,
          'password' => Hash::make($request->password)
      ]);
      auth()->attempt($request->only('email','password'));

        return back()->with('success',"Account Created Successfully");
        //redirect

    }
}
