<?php

namespace App\Http\Controllers\Backend\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Show Post Page
    public function index(){ 
        return view('admin.page.Transaction.post');
    }
}
