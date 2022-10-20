<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
class HomeController extends Controller
{
    public function index(){
        $banners = Home::where('status','=','Active')->get();
        return view('customer.page.main.home',[
            'banners' => $banners
        ]);
    }
}
