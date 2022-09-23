<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BrandExport;
class BrandController extends Controller
{
   public function index(){  
        return view('admin.page.Product.brand'); 
    }    
    public function exportbrandexcel(){
        return Excel::download(new BrandExport,'brands.xlsx');
      }
      public function exportbrandcsv(){
        return Excel::download(new BrandExport,'brands.csv');
      }
      public function exportbrandhtml(){
        return Excel::download(new BrandExport,'brands.html');
      }
      public function exportbrandpdf(){
        return Excel::download(new BrandExport,'brands.pdf');
      }   
}
