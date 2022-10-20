<?php

namespace App\Http\Controllers\Backend\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    //Show Analytics Page
    public function index(){ 
        return view('admin.page.Report.analytics');
    }
}
