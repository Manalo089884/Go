<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BrandExport;
class BrandController extends Controller
{
  //Show Brand Page
<<<<<<< HEAD
<<<<<<< HEAD
  public function index(){
    return view('admin.page.product.brand');
  }
=======
  public function index(){  
    return view('admin.page.Product.brand'); 
  }    
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
  public function index(){
    return view('admin.page.product.brand');
  }
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
<<<<<<< HEAD
  }
=======
  }   
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
  }
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
}
