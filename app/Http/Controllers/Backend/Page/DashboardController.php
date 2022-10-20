<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Home;
<<<<<<< HEAD

class DashboardController extends Controller
{
   public function index(){

        $brandcount = Brand::all()->count();
        $categorycount = Category::all()->count();
        $suppliercount = Supplier::all()->count();
        $productcount  = Product::all()->count();
        $homecount = Home::all()->count();
        $activeproductcount = Product::all()->where('status','=','1')->count();
        $inactiveproductcount = Product::all()->where('status','=','0')->count();
        $customercount = Customer::all()->count();
        $usercount = User::all()->count();
        $criticalproducts = Product::get()->where('stock','<=','stock_warning')->take(4);

        return view('admin.page.dashboard',[
            'brandcount' => $brandcount,
            'categorycount' => $categorycount,
            'suppliercount' => $suppliercount,
            'productcount' => $productcount,
            'activeproductcount' => $activeproductcount,
            'inactiveproductcount' => $inactiveproductcount,
            'customercount' => $customercount,
            'usercount' => $usercount,
            'homecount' => $homecount,
            'criticalproducts' => $criticalproducts,
        ]);
=======

class DashboardController extends Controller
{
   public function index(){  
        return view('admin.page.dashboard');
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======

class DashboardController extends Controller
{
   public function index(){

        $brandcount = Brand::all()->count();
        $categorycount = Category::all()->count();
        $suppliercount = Supplier::all()->count();
        $productcount  = Product::all()->count();
        $homecount = Home::all()->count();
        $activeproductcount = Product::all()->where('status','=','1')->count();
        $inactiveproductcount = Product::all()->where('status','=','0')->count();
        $customercount = Customer::all()->count();
        $usercount = User::all()->count();
        $criticalproducts = Product::get()->where('stock','<=','stock_warning')->take(4);

        return view('admin.page.dashboard',[
            'brandcount' => $brandcount,
            'categorycount' => $categorycount,
            'suppliercount' => $suppliercount,
            'productcount' => $productcount,
            'activeproductcount' => $activeproductcount,
            'inactiveproductcount' => $inactiveproductcount,
            'customercount' => $customercount,
            'usercount' => $usercount,
            'homecount' => $homecount,
            'criticalproducts' => $criticalproducts,
        ]);
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }
}
