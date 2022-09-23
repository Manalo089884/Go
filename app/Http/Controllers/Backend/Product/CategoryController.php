<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CategoryExport;
class CategoryController extends Controller
{
  
    public function index(){  
        return view('admin.page.Product.category'); 
    }

    public function exportcategoriesexcel(){
      return Excel::download(new CategoryExport,'categories.xlsx');
    }
    public function exportcategoriescsv(){
      return Excel::download(new CategoryExport,'categories.csv');
    }
    public function exportcategorieshtml(){
      return Excel::download(new CategoryExport,'categories.html');
    }
    public function exportcategoriespdf(){
      return Excel::download(new CategoryExport,'categories.pdf');
    }   

}
