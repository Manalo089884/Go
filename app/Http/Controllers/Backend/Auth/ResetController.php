<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Carbon\Carbon;

use App\Models\User;

use Illuminate\Support\Facades\Auth;


use App\Mail\ResetPassword;
use Mail;
class ResetController extends Controller
{
    public function index(){  
       //Mail::to("MarkJosephManalo1110@gmail.com")->send(new ResetPassword());
        return view('admin.auth.reset');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);

        $action_link = route('reset.password.form',['token'=>$token,'email'=>$request->email]);
        $body = "We have received a request to reset password for <b> Go Dental </b> account associated with ".$request->email.". You can reset your password by clicking the link below";
        \Mail::send('admin.mail.email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
            $message->from('noreply@example.com','Your App Name');
            $message->to($request->email,'Your name')
                    ->subject('Reset Password');
      });
        return back()->with('success', 'We have emailed your password reset link!');

    }
    public function ShowResetForm(Request $request, $token = null){
        return view('admin.auth.forgot')->with(['token' => $token,'email'=>$request->email]);
    }


   public function ResetPassword(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
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

            User::where('email', $request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('login.index')->with('info', 'Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
        }
    }
}
