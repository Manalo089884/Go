<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BrandExport;
class BrandController extends Controller
{
  //Show Brand Page
<<<<<<< HEAD
  public function index(){
    return view('admin.page.product.brand');
  }
=======
  public function index(){  
    return view('admin.page.Product.brand'); 
  }    
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
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
<<<<<<< HEAD
  }
=======
  }   
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
}
