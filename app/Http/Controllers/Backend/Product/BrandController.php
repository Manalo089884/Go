<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
class BrandController extends Controller
{
  
   public function index(){  
    $search = request()->query('search');
      if($search){
          $brands = Brand::where('name','LIKE', "%{$search}%")->paginate(5);
      }else{
         $brands = Brand::orderBy('name')->paginate(20 );
      }
        return view('admin.page.Product.brand',[
          'brands' => $brands
        ]); 
    }
    
    public function store(StoreBrandRequest $request){
      Brand::create($request->validated());
      return back()->with('success', $request->name .' was save successfully');
    }
    
  public function update(UpdateBrandRequest $request,$id){
      $brand = Brand::findorFail($id);
      $name = $brand->name;

      
      $request->validated();

      $brand->name = $request->input('name');
      $brand->update();
    
      return back()->with('editSuccess',$name .' Has been changed to ' .$brand->name) ;
    }
    
    public function destroy($id){
        $brand = Brand::findorFail($id);
        if($brand->brandTransactions()->count()){
          return back()->with('invalid',$brand->name. " has Product records ");
      }
        $brand->delete();
        return back()->with('deleteSuccess',$brand->name ." Deleted Successfully");
    }

    public function BrandArchiveIndex(){
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
    
    public function BrandArchiveDestroy(Brand $brand,$id){
        $brands = Brand::onlyTrashed()->findorFail($id);
        $name = $brands->name;
        if($brands->brandTransactions()->count()){
          return back()->with('invalid',$name ." has Product records ");
        }
        Brand::where('id',$id)->forceDelete();
        return back()->with('deleteSuccess',$name  ." was Permanently Deleted");
    }
    
    public function BrandArchiveRestore(Brand $brand,$id){
        $brands = Brand::onlyTrashed()->findOrFail($id);
        $name = $brands->name;
        $brands->restore();
        
        return back()->with('restoreSuccess',$name ." was Successfully Restored");
    }
      
}
