<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //Show Customer Page
    public function index(){ 
        return view('admin.page.Users.customer');
    }
}
