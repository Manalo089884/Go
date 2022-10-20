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
<<<<<<< HEAD
        $products = Product::where('status', 1)->orderBy('name')->with('images','category')->get();
=======
        $products = Product::where('status', 1)->orderBy('name')->with('images')->get();
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        return view('customer.page.cart.product',[
            'products' => $products,
            'categories' => $categories
        ]);
    }
    public function show(Product $product){
<<<<<<< HEAD
=======

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        return view('customer.page.cart.productshow',[
            'product' => $product
        ]);
    }
<<<<<<< HEAD

=======
  
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
}
