<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('customer.page.regular.about', ['metaTitle' => 'About us']);
    }
    public function terms(){
        return view('customer.page.regular.terms', ['metaTitle' => 'Terms']);
    }
    public function contact(){
        return view('customer.page.regular.contact', ['metaTitle' => 'Contact']);
    }
    public function faq(){
        return view('customer.page.regular.faq', ['metaTitle' => 'FAQ']);
    }
    public function privacy(){
        return view('customer.page.regular.privacy', ['metaTitle' => 'Privacy']);
    }
    public function product(){
        return view('customer.page.cart.product', ['metaTitle' => 'Product']);
    }
    public function shipping(){
        return view('customer.page.regular.shipping', ['metaTitle' => 'Product']);
    }
    public function return(){
        return view('customer.page.regular.returns', ['metaTitle' => 'Product']);
    }
}
