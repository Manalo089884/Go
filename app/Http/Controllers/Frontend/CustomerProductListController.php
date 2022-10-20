<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerProductListController extends Controller
{
    public function index(){
        return view("customer.product.product-list");
    }
}
