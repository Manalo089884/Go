<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
<<<<<<< HEAD
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Support\Facades\Auth;
class CustomerLoginController extends Controller
{
    //Login Customer Controller
    public function index(){
        return view('customer.auth.login');
    }
    //Login Function
    public function store(StoreLoginRequest $request){
        $request->validated();
=======
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
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa

        $creds = $request->only('email','password');
        if(Auth::guard('customer')->attempt($request->only('email','password'),$request->remember)){
            return redirect()->route('cart.index');
        }else{
            return back()->with('fail', 'Incorrect credentials');
        }
    }
}
