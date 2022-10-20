<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RoleExport;
class RoleController extends Controller
{
    //Show Role Page
    public function index(){
        return view('admin.page.Users.role');
    }
    //Export Brand to Excel
    public function exportroleexcel(){
        return Excel::download(new RoleExport,'roles.xlsx');
    }
    //Export Brand to CSV
    public function exportrolecsv(){
        return Excel::download(new RoleExport,'roles.csv');
    }
    //Export Brand to HTML
    public function exportrolehtml(){
        return Excel::download(new RoleExport,'roles.html');
    }
    //Export Brand to PDF
    public function exportrolepdf(){
        return Excel::download(new RoleExport,'roles.pdf');
    }
=======

class RoleController extends Controller
{
    //Show Role Page
    public function index(){ 
        return view('admin.page.Users.role');
    }
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
}
