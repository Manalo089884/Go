<?php

namespace App\Http\Controllers\Backend\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.page.profile');
    }
    public function changepass(){
        return view('admin.page.changepass');
    }
}
