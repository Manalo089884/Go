<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerCart;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function index(){
        if (Auth::guard('customer')->check()){
            $customer_id = Auth::id();
            $cart = CustomerCart::with('getProduct')->where('customers_id', $customer_id)->get();
        }else{
            return redirect()->route('CLogin.index');
        }

        return view('customer.page.cart.cart',[
            'cart' => $cart
        ]);

    }
}
