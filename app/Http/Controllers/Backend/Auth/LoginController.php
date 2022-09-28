<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
     public function __construct(){
        $this->middleware(['guest']);
    }
     public function index(){
        return view('admin.auth.login');
    }
    public function store(Request $request){
        $this->validate($request,[
            'email' =>'required|email|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => 'Email does not exists'
        ]);

        $creds = $request->only('email','password');
        if(Auth::guard('web')->attempt($request->only('email','password'),$request->remember)){
            return redirect()->route('dashboard.index');
        }else{
            return back()->with('fail', 'Incorrect credentials');
        }

        /*
         if(!auth()->attempt($request->only('email','password'),$request->remember)){
            return back()->with('status','Invalid username or password');
        }
        return redirect()->route('dashboard.index');
        */
    }
}
