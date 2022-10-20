<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPassword;
use DB;
use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Support\Str;
use App\Mail\CustomerResetPassword;

use App\Jobs\CustomerResetPasswordJob;
class CustomerResetController extends Controller
{
    public function index(){
        return view('customer.auth.reset');
    }
<<<<<<< HEAD

=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email|exists:customers,email'
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        $details = [
            'email' => $request['email'],
            'action_link' => route('customer.reset.password.form',['token'=>$token,'email'=>$request->email])
        ];

        dispatch(new CustomerResetPasswordJob($details));
        return back()->with('success', 'We have emailed your password reset link!');
    }
    public function ShowResetForm(Request $request, $token = null){
        return view('customer.auth.forgot')->with(['token' => $token,'email'=>$request->email]);
    }


   public function ResetPassword(Request $request){
        $request->validate([
            'email'=>'required|email|exists:customers,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
        ]);

        $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{

            Customer::where('email', $request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('CLogin.index')->with('info', 'Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
        }
    }
}
