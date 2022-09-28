<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LogoutController extends Controller
{
    public function store(){
       Auth::guard('web')->logout();
        return redirect()->route('login.index');
    }
}
