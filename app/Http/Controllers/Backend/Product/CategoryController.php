<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CategoryExport;
class CategoryController extends Controller
{
    //Show Category Page
    public function index(){  
      return view('admin.page.Product.category'); 
    }
    //Export Category to Excel
    public function exportcategoriesexcel(){
      return Excel::download(new CategoryExport,'categories.xlsx');
    }
    //Export Category to CSV
    public function exportcategoriescsv(){
      return Excel::download(new CategoryExport,'categories.csv');
    }
    //Export Category to HTMl
    public function exportcategorieshtml(){
      return Excel::download(new CategoryExport,'categories.html');
    }
    //Export Category to PDF
    public function exportcategoriespdf(){
      return Excel::download(new CategoryExport,'categories.pdf');
    }   

}
