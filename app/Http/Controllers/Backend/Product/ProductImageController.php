<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Http\Requests\UpdateProductImageRequest;
class ProductImageController extends Controller
{
    //Remove Product Image from Product Edit
     public function removeImage($id){
        $image = ProductImage::findorfail($id);
        unlink(public_path('product_images/'.$image->images));
        $image->delete();
        return back()->with('DeleteSuccess','Image Deleted Successfully!')->withFragment('ImageList');
      }
    //Add New Image from Product Edit
      public function addImages(UpdateProductImageRequest $request, $id){
        $product = Product::findorFail($id);
        $request->validated();
        if($request->has('images')){
          foreach($request->file('images') as $image){
            $imageName = time().$image->getClientOriginalName();
            $image->move(public_path('product_images'),$imageName);
            ProductImage::create([
              'product_id' => $product->id,
              'images' =>  $imageName,
            ]);
          }
        }
        //return redirect('admin/product')->with('ProductEditSuccess', $request->name .' was successfully Edited');
         return back()->with('SuccessImage',"Image Save Successfully")->withFragment('ImageList');
      }

}
