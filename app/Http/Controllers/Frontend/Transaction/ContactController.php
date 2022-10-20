<?php

namespace App\Http\Controllers\FrontEnd\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\ContactJob;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Requests\StoreContactMailRequest;
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
use App\Http\Requests\StoreContactMailRequest;
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
class ContactController extends Controller
{
    //Show Contact Page where customers can directly send an email to go dental email
    public function index(){
        return view('customer.page.regular.contact');
    }
    //Submission of Contact Page and Send Mail
<<<<<<< HEAD
<<<<<<< HEAD
    public function store(StoreContactMailRequest $request){

        $request->validated();
=======
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message'=>'required',
        ]);
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    public function store(StoreContactMailRequest $request){

        $request->validated();
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7

        $contact = [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ];

<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        dispatch(new ContactJob($contact));
        return redirect()->route('contact')->with('success',"Message Successfully Sent")->withFragment('#contactpage');

    }
}
