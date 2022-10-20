<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;

class ProductArchiveController extends Controller
{
<<<<<<< HEAD
    public function index(){
        $products = Product::onlyTrashed()->orderBy('name')->paginate(20);
        return view('admin.page.product.productarchive',[
=======
    public function index(){  
        $products = Product::onlyTrashed()->orderBy('name')->paginate(20);
        return view('admin.page.Product.productarchive',[
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
            'products' => $products
        ]);
      }

      public function destroy(Product $product,$id){
        $product = Product::onlyTrashed()->findorFail($id);
        $image = ProductImage::where('product_id','LIKE', "%{$product->id}%")->get();
        foreach ($image as $item) {
             unlink(public_path('product_images/'.$item->images));
        }
        $name = $product->name;
        Product::where('id',$id)->forceDelete();
        return back()->with('success',$name  ." was Permanently Deleted");
    }
<<<<<<< HEAD

=======
    
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    public function update(Product $product,$id){
        $product = Product::onlyTrashed()->findOrFail($id);
        $name = $product->name;
        $product->restore();
<<<<<<< HEAD

=======
        
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        return back()->with('success',$name ." was Successfully Restored");
    }
}
