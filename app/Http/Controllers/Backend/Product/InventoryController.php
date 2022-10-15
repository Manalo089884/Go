<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    //Show Inventory Page
    public function index(){
        return view('admin.page.product.inventory');
    }
}
