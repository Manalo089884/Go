<?php

namespace App\Http\Controllers\Backend\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //Show Report Page
    public function index(){ 
        return view('admin.page.Report.report');
    }
}
