<?php

namespace App\Http\Controllers\FrontEnd\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('customer.page.regular.contact');
    }
    public function store(Request $request){
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'phone' => 'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);
        return redirect()->route('contact')->with('status')->withFragment('#contactpage');
    
    }
}
