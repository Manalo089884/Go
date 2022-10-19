<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\CustomerCart;
use Illuminate\Support\Facades\Auth;

class ProductCatalogController extends Controller
{
    public function index(){
        $categories = Category::orderby('name')->get();
        $products = Product::where('status', 1)->orderBy('name')->with('images','category')->get();
        return view('customer.page.cart.product',[
            'products' => $products,
            'categories' => $categories
        ]);
    }
    public function show(Product $product){
        return view('customer.page.cart.productshow',[
            'product' => $product
        ]);
    }

}
