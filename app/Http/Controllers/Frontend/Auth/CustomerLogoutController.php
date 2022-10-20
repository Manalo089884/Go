<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CustomerLogoutController extends Controller
{
<<<<<<< HEAD
    //Logout Customer Controller
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    public function store(){
        Auth::guard('customer')->logout();
        return redirect()->route('CLogin.index');
     }
}
