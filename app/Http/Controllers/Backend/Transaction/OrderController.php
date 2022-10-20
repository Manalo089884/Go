<?php

namespace App\Http\Controllers\Backend\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //Show Order Transaction Page
    public function index(){ 
        return view('admin.page.Transaction.order');
    }
}
