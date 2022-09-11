<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;

class BrandController extends Controller
{
   public function index(){  
        return view('admin.page.Product.brand'); 
    }    
}
