<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //Show Role Page
    public function index(){ 
        return view('admin.page.Users.role');
    }
}
