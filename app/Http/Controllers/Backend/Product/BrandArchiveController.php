<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
class BrandArchiveController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){  
      $search = request()->query('search');
      if($search){
          $brands = Brand::where('name','LIKE', "%{$search}%")->onlyTrashed()->paginate(5);
      }else{
         $brands = Brand::orderBy('name')->onlyTrashed()->paginate(20 );
      }
        return view('admin.page.Product.brandArchive',[
          'brands' => $brands
        ]); // Collection
    }
    public function destroy(Brand $brand,$id){
      $brands = Brand::onlyTrashed()->findorFail($id);
      $name = $brands->name;
      if($brands->brandTransactions()->count()){
          return back()->with('invalid',$name ." has Product records ");
      }
      Brand::where('id',$id)->forceDelete();
      return back()->with('deleteSuccess',$name  ." was Permanently Deleted");
    }
    
    public function update(Brand $brand,$id){
        $brands = Brand::onlyTrashed()->findOrFail($id);
        $name = $brands->name;
        $brands->restore();
        
        return back()->with('restoreSuccess',$name ." was Successfully Restored");
    }

   
}
