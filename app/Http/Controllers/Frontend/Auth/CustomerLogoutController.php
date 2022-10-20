<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CustomerLogoutController extends Controller
{
    //Logout Customer Controller
    public function store(){
        Auth::guard('customer')->logout();
        return redirect()->route('CLogin.index');
     }
}
