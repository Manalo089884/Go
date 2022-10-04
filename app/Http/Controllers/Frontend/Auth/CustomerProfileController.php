<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerShippingAddress;
use Illuminate\Support\Facades\Auth;
class CustomerProfileController extends Controller
{
    public function index(){
        return view('customer.account.profile');
    }
    public function address(){
        if (Auth::guard('customer')->check()){
            $customer_id = Auth::id();
            $address = CustomerShippingAddress::where('customers_id', $customer_id)->orderBy('name')->get();
        }else{
            return redirect()->route('CLogin.index');
        }
        return view('customer.account.address',[
            'address' => $address
        ]);
    }
    public function createaddress(){
        return view('customer.account.createaddress');
    }
    public function saveaddress(Request $request){
        $this->validate($request,[
            'full_name' => 'required|max:255',
            'phone_number' => 'required|digits:11',
            'house' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'required|max:255',
            'barangay' => 'required|max:255',
        ]);

        if (Auth::guard('customer')->check()){
            $customer_id = Auth::id();
            CustomerShippingAddress::create([
                'name' => $request->full_name,
                'customers_id' => $customer_id,
                'phone_number' => $request->phone_number,
                'notes'=>$request->notes,
                'house' => $request->house,
                'province'=>$request->province,
                'city'=>$request->city,
                'barangay' => $request->barangay
            ]);
            return redirect()->route('customer.address')->with('success', 'Address was successfully added');

            return back()->with('success',"Account Created Successfully");
        }else{
            return back()->with('fail',"Invalid!!!");
        }
    }
    public function changepassword(){
        return view('customer.account.changepass');
    }
}
