<?php

namespace App\Http\Controllers\Frontend\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
class ProductCatalogController extends Controller
{
    public function index(){


        $products = Product::orderBy('name')->paginate(20);
        return view('customer.page.cart.product',[
            'products' => $products
        ]);
    }
}
