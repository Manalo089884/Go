<?php

namespace App\Http\Controllers\Backend\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //Show Transaction Page
    public function index(){ 
        return view('admin.page.Transaction.chat');
    }
}
