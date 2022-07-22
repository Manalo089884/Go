<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){ 
        return view('admin.page.Users.customer');
    }
}
