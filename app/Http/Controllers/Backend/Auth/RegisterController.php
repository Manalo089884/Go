<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
class RegisterController extends Controller
{

     public function index(){
        return view('admin.auth.register');
    }
    public function store(StoreUserRequest $request){

        $request->validated();

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

    }
}
