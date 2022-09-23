<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerLogoutController extends Controller
{
    public function store(){
        auth()->logout();
         return redirect()->route('login.index');
     }
}
