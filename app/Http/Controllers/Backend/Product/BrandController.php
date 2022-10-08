<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BrandExport;
class BrandController extends Controller
{
  //Show Brand Page
  public function index(){  
    return view('admin.page.Product.brand'); 
  }    
  //Export Brand to Excel
  public function exportbrandexcel(){
    return Excel::download(new BrandExport,'brands.xlsx');
  }
  //Export Brand to CSV
  public function exportbrandcsv(){
    return Excel::download(new BrandExport,'brands.csv');
  }
  //Export Brand to HTML
  public function exportbrandhtml(){
    return Excel::download(new BrandExport,'brands.html');
  }
  //Export Brand to PDF
  public function exportbrandpdf(){
    return Excel::download(new BrandExport,'brands.pdf');
  }   
}
