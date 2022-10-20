<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
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

=======
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RoleExport;
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
class RoleController extends Controller
{
    //Show Role Page
    public function index(){
        return view('admin.page.Users.role');
    }
<<<<<<< HEAD
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
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
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
}
