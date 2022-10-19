<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
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

        $creds = $request->only('email','password');
        if(Auth::guard('customer')->attempt($request->only('email','password'),$request->remember)){
            return redirect()->route('cart.index');
        }else{
            return back()->with('fail', 'Incorrect credentials');
        }
    }
}
