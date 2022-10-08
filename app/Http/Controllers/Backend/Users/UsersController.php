<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //Show Users Page
    public function index(){ 
        return view('admin.page.Users.user');
    }
}
