<?php

namespace App\Http\Controllers\FrontEnd\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\ContactJob;
use App\Http\Requests\StoreContactMailRequest;
class ContactController extends Controller
{
    //Show Contact Page where customers can directly send an email to go dental email
    public function index(){
        return view('customer.page.regular.contact');
    }
    //Submission of Contact Page and Send Mail
    public function store(StoreContactMailRequest $request){

        $request->validated();

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
