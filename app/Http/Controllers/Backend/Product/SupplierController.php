<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supplier;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SupplierExport;
class SupplierController extends Controller
{
    public function index(){
        return view('admin.page.product.supplier');
    }
    public function create(){
        return view('admin.page.product.supplieradd');
    }
    public function edit(Supplier $supplier){
        return view('admin.page.product.supplieredit',[
            'supplier' => $supplier
        ]);
    }
    public function show(Supplier $supplier){
        return view('admin.page.product.suppliershow',[
            'supplier' => $supplier
        ]);
    }
    public function SupplierArchiveIndex(){
        return view('admin.page.product.supplierarchive');
    }

     //Export Product to Excel
    public function exportsupplierexcel(){
      return Excel::download(new SupplierExport,'supplier.xlsx');
    }

    //Export Product to CSV
    public function exportsuppliercsv(){
      return Excel::download(new SupplierExport,'supplier.csv');
    }

    //Export Product to HTML
    public function exportsupplierhtml(){
      return Excel::download(new SupplierExport,'supplier.html');
    }

    //Export Product to PDF
    public function exportsupplierpdf(){
      return Excel::download(new SupplierExport,'supplier.pdf');
    }
}
