<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerDataController extends Controller
{
    public function index(){
        return view('customer.account.orders');
    }

    public function returns(){
        return view('customer.account.returns');
    }

    public function reviews(){
        return view('customer.account.reviews');
    }

    public function cancellations(){
        return view('customer.account.cancellations');
    }
}
