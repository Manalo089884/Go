<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Models\CustomerVerify;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Mail\CustomerVerifyMail;
use App\Jobs\CustomerVerifyJob;
use App\Http\Requests\StoreCustomerRegister;
class CustomerRegisterController extends Controller
{
    //Customer Register Page
    public function index(){
        return view('customer.auth.register');
    }

    public function store(StoreCustomerRegister $request){
        //Customer Validation
        $request->validated();
        //Store Customer Data in the database
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number'=>$request->phone,
            'birthday'=>$request->birthday,
            'gender'=>$request->gender,
            'password' => Hash::make($request->password)
        ]);
        //Get the customer id that was inserted
        $last_id = $customer->id;
        //Genereting a unique token
        $token = $last_id.hash('sha256', \Str::random(120));
        $verifyURL = route('verify',['token'=>$token,'service'=>'Email_verification']);

        CustomerVerify::create([
            'customers_id'=>$last_id,
            'token'=>$token,
        ]);

        $message = 'Dear <b>'.$request->name.'</b>';
        $message.= ' Thanks for signing up, we just need you to verify your email address to complete setting up your account.';

        $details = [
            'email'=>$request->email,
            'name'=>$request->name,
            'subject'=>'Go Dental Email Verification',
            'body'=> $message,
            'actionLink'=> $verifyURL,
        ];
        //dispatch the job for sending the email
        dispatch(new CustomerVerifyJob($details));
        //Redirect if successful
        if( $customer ){
            return back()->with('success',"You are now registered successfully");
        }else{
            return back()->with('fail',"Something went wrong!, failed to register");
        }


    }
    public function verify(Request $request){

        $token = $request->token;
        $verifyUser = CustomerVerify::where('token', $token)->first();

        if(!is_null($verifyUser)){
            $customer = $verifyUser->customers->email_verified_at;

            if(!$verifyUser->customers->email_verified_at){
                $verifyUser->customers->email_verified_at  = Carbon::now();
                $verifyUser->customers->save();

                return redirect()->route('CLogin.index')->with('info','Your email is verified successfully. You can now login')->with('verifiedEmail', $verifyUser->customers->name);
            }else{
                 return redirect()->route('CLogin.index')->with('info','Your email is already verified. You can now login')->with('verifiedEmail', $verifyUser->customers->name);
            }
        }
}
=======
=======
use App\Models\CustomerVerify;
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Mail\CustomerVerifyMail;
use App\Jobs\CustomerVerifyJob;
use App\Http\Requests\StoreCustomerRegister;
class CustomerRegisterController extends Controller
{
    //Customer Register Page
    public function index(){
        return view('customer.auth.register');
    }

    public function store(StoreCustomerRegister $request){
        //Customer Validation
        $request->validated();
        //Store Customer Data in the database
        $customer = Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number'=>$request->phone,
            'birthday'=>$request->birthday,
            'gender'=>$request->gender,
            'password' => Hash::make($request->password)
        ]);
        //Get the customer id that was inserted
        $last_id = $customer->id;
        //Genereting a unique token
        $token = $last_id.hash('sha256', \Str::random(120));
        $verifyURL = route('verify',['token'=>$token,'service'=>'Email_verification']);

        CustomerVerify::create([
            'customers_id'=>$last_id,
            'token'=>$token,
        ]);

        $message = 'Dear <b>'.$request->name.'</b>';
        $message.= ' Thanks for signing up, we just need you to verify your email address to complete setting up your account.';

        $details = [
            'email'=>$request->email,
            'name'=>$request->name,
            'subject'=>'Go Dental Email Verification',
            'body'=> $message,
            'actionLink'=> $verifyURL,
        ];
        //dispatch the job for sending the email
        dispatch(new CustomerVerifyJob($details));
        //Redirect if successful
        if( $customer ){
            return back()->with('success',"You are now registered successfully");
        }else{
            return back()->with('fail',"Something went wrong!, failed to register");
        }


    }
<<<<<<< HEAD
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    public function verify(Request $request){

        $token = $request->token;
        $verifyUser = CustomerVerify::where('token', $token)->first();

        if(!is_null($verifyUser)){
            $customer = $verifyUser->customers->email_verified_at;

            if(!$verifyUser->customers->email_verified_at){
                $verifyUser->customers->email_verified_at  = Carbon::now();
                $verifyUser->customers->save();

                return redirect()->route('CLogin.index')->with('info','Your email is verified successfully. You can now login')->with('verifiedEmail', $verifyUser->customers->name);
            }else{
                 return redirect()->route('CLogin.index')->with('info','Your email is already verified. You can now login')->with('verifiedEmail', $verifyUser->customers->name);
            }
        }
}
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
}
