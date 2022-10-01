<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
class CustomerLoginController extends Controller
{

     public function index(){
        return view('customer.auth.login');
    }
    public function store(Request $request){
        $this->validate($request,[
            'email' =>'required|email|exists:customers,email',
            'password' => 'required',
        ],[
            'email.exists' => 'Email does not exists'
        ]);

        $creds = $request->only('email','password');
        if(Auth::guard('customer')->attempt($request->only('email','password'),$request->remember)){
            return redirect()->route('cart.index');
        }else{
            return back()->with('fail', 'Incorrect credentials');
        }
    }
}
