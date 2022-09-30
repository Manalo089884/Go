<?php

namespace App\Http\Controllers\FrontEnd\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\ContactJob;
class ContactController extends Controller
{
    public function index(){
        return view('customer.page.regular.contact');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        $contact = [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ];


        dispatch(new ContactJob($contact));
        return redirect()->route('contact')->with('success',"Message Successfully Sent")->withFragment('#contactpage');

    }
}
