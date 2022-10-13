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
            'cart' => $cart,
            'cart_json'=> json_encode($cart)
        ]);

    }
    public function addToCart(Request $request){
        try{
            $customer_id = Auth::id();
            $itemAlreadyOnCart= CustomerCart::where('product_id', $request->id)->where('customers_id', $customer_id)->exists();
            if($itemAlreadyOnCart){
                CustomerCart::where('product_id', $request->id)->where('customers_id', $customer_id)->increment('quantity', $request->quantity);
            }
            else{
                CustomerCart::create(['customers_id' => $customer_id, 'product_id'=> $request->id, 'quantity'=> $request->quantity]);
            }
                return json_encode(array('message'=>"Item successfully added to cart", 'status'=>200));
        }
        catch(Exception $e){
            return json_encode(array('error'=>$e, 'status'=>500));
        }
    }

}
