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
}
