<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerShippingAddress;
use Illuminate\Support\Facades\Auth;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Http\Requests\StoreCustomerAddress;
use App\Http\Requests\UpdateCustomerAddress;
class CustomerProfileController extends Controller
{
    //Profile
    public function index(){
        return view('customer.account.profile');
    }
    //Address Page
=======
=======
use App\Http\Requests\StoreCustomerAddress;
use App\Http\Requests\UpdateCustomerAddress;
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
class CustomerProfileController extends Controller
{
    //Profile
    public function index(){
        return view('customer.account.profile');
    }
<<<<<<< HEAD
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    //Address Page
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    public function address(){
        if (Auth::guard('customer')->check()){
            $customer_id = Auth::id();
            $address = CustomerShippingAddress::where('customers_id', $customer_id)->orderBy('name')->get();
<<<<<<< HEAD
<<<<<<< HEAD
            $countaddress =  CustomerShippingAddress::where('customers_id', $customer_id)->count();
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
            $countaddress =  CustomerShippingAddress::where('customers_id', $customer_id)->count();
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        }else{
            return redirect()->route('CLogin.index');
        }
        return view('customer.account.address',[
<<<<<<< HEAD
<<<<<<< HEAD
            'address' => $address,
            'countaddress' => $countaddress
        ]);
    }
    //Create Address Page
    public function createaddress(){
        return view('customer.account.createaddress');
    }
    //Store Customer Address
    public function saveaddress(StoreCustomerAddress $request){
        $request->validated();

        if (Auth::guard('customer')->check()){
            $customer_id = Auth::id();
            $customeraddress = CustomerShippingAddress::where('customers_id', $customer_id)->count();
            if($customeraddress <= 4){
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

            }else{
                return redirect()->route('customer.address')->with('invalid', 'You can only add up to five shipping address');

            }
        }else{
            return back()->with('invalid',"Invalid!!!");
        }
    }
    //Edit Customer Address
=======
            'address' => $address
        ]);
    }
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
            'address' => $address,
            'countaddress' => $countaddress
        ]);
    }
    //Create Address Page
    public function createaddress(){
        return view('customer.account.createaddress');
    }
    //Store Customer Address
    public function saveaddress(StoreCustomerAddress $request){
        $request->validated();

        if (Auth::guard('customer')->check()){
            $customer_id = Auth::id();
            $customeraddress = CustomerShippingAddress::where('customers_id', $customer_id)->count();
            if($customeraddress <= 4){
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

            }else{
                return redirect()->route('customer.address')->with('invalid', 'You can only add up to five shipping address');

            }
        }else{
            return back()->with('invalid',"Invalid!!!");
        }
    }
    //Edit Customer Address
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    public function editaddress($id){
        $address = CustomerShippingAddress::findorFail($id);
        return view('customer.account.editaddress',[
            'address' => $address
        ]);
    }
<<<<<<< HEAD
<<<<<<< HEAD
    //Update Customer Address
    public function updateaddress(UpdateCustomerAddress $request, $id){
        $address = CustomerShippingAddress::findorFail($id);
        $request->validated();
=======

    public function updateaddress(Request $request, $id){
        $address = CustomerShippingAddress::findorFail($id);
        $this->validate($request,[
            'full_name' => 'required|max:255',
            'phone_number' => 'required|digits:11',
            'house' => 'required|max:255',
            'province' => 'required|max:255',
            'city' => 'required|max:255',
            'barangay' => 'required|max:255',
        ]);
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    //Update Customer Address
    public function updateaddress(UpdateCustomerAddress $request, $id){
        $address = CustomerShippingAddress::findorFail($id);
        $request->validated();
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7

        if (Auth::guard('customer')->check()){
            $customer_id = Auth::id();
            $address->name = $request->input('full_name');
            $address->phone_number = $request->input('phone_number');
            $address->house = $request->input('house');
            $address->province = $request->input('province');
            $address->city = $request->input('city');
            $address->barangay = $request->input('barangay');
            $address->update();
<<<<<<< HEAD
<<<<<<< HEAD
            return redirect()->route('customer.address')->with('success', 'Address was edited successfully');
=======

=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
            return redirect()->route('customer.address')->with('success', 'Address was edited successfully');
        }else{
            return back()->with('fail',"Invalid!!!");
        }
    }

    //Delete Customer Address
    public function destroyaddress($id){
        $address = CustomerShippingAddress::findorFail($id);
        $address->delete();
        return back()->with('deleteSuccess', $address->name ." Deleted Successfully");
    }
<<<<<<< HEAD

    public function createaddress(){
        return view('customer.account.createaddress');
    }

    public function saveaddress(Request $request){
        $this->validate($request,[
            'full_name' => 'required|max:255',
            'phone_number' => 'required',
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

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        }else{
            return back()->with('fail',"Invalid!!!");
        }
    }

<<<<<<< HEAD
    //Delete Customer Address
    public function destroyaddress($id){
        $address = CustomerShippingAddress::findorFail($id);
        $address->delete();
        return back()->with('deleteSuccess', $address->name ." Deleted Successfully");
    }
    //Change Password Page
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    //Change Password Page
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    public function changepassword(){
        return view('customer.account.changepass');
    }

<<<<<<< HEAD
<<<<<<< HEAD
    //Reset Password
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    //Reset Password
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    public function resetpass(Request $request){
        if (!(Hash::check($request->get('current_password'), Auth::guard('customer')->user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.")->withInput();
        }
        if(strcmp($request->get('current_password'), $request->get('password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.")->withInput();
        }
        $this->validate($request,[
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);
         //Change Password
         Customer::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);
         return redirect()->back()->with("success","Password successfully changed!");
    }

}
