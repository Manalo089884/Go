<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerProfileController extends Controller
{
    public function index(){
        return view('customer.account.profile');
    }
    public function address(){
        return view('customer.account.address');

    }
    public function changepassword(){
        return view('customer.account.changepass');

    }
}
