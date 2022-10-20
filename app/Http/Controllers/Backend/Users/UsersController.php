<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Models\User;
class UsersController extends Controller
{
    //Show Users Page
    public function index(){
        $users = User::get();
        return view('admin.page.Users.user',[
            'users' => $users
        ]);
    }
    public function create(){
        return view('admin.page.Users.usersadd');
=======

class UsersController extends Controller
{
    //Show Users Page
    public function index(){ 
        return view('admin.page.Users.user');
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
use App\Models\User;
class UsersController extends Controller
{
    //Show Users Page
    public function index(){
        $users = User::get();
        return view('admin.page.Users.user',[
            'users' => $users
        ]);
    }
    public function create(){
        return view('admin.page.Users.usersadd');
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }
}
