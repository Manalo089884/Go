<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest
;
class ProductController extends Controller
{
      public function index(){  
        $products = Product::orderBy('name')->paginate(25);
        return view('admin.page.Product.product',[
          'products' => $products
        ]);
      }

      public function create(){
        $category = Category::orderBy('name')->get();
        $brand = Brand::orderBy('name')->get();
        return view('admin.page.Product.productadd',[
            'categories' => $category,
            'brand' => $brand
        ]);
      }

      public function store(StoreProductRequest $request){
        $request->validated();
        $archived = $request->boolean('status');
        $new_product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'stock' => $request->stock,
            'price' => $request->price,
            'weight' => $request->weight,
            'status' => $archived,
            'description' => $request->description,
        ]);
        
        if($request->has('images')){
          foreach($request->file('images') as $image){
            $imageName = time().$image->getClientOriginalName();
            $image->move(public_path('product_images'),$imageName);
            ProductImage::create([  
              'product_id' => $new_product->id,
              'images' =>  $imageName,
            ]);
          }
      }
       return redirect('/product')->with('success', $request->name .' was successfully inserted');
      }

      public function edit($id){
        $product = Product::findorFail($id);
        $category = Category::orderBy('name')->get();
        $brand = Brand::orderBy('name')->get();
        
        $images = $product->images;

        return view('admin.page.Product.productedit', compact('product'),[
          'categories' => $category,
          'brand' => $brand,
          'images' => $images,
        ]);
      
      }

      public function update(UpdateProductRequest $request,$id ){
        $request->validated();
        $product = Product::findorFail($id);
        $product->name = $request->input('name');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');
        $product->stock = $request->input('stock');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->description = $request->input('description');
        $product->update();
        return redirect('/product')->with('ProductEditSuccess', $request->name .' was successfully Edited');
      }
      
      public function destroy($id){ 
        $product = Product::findorFail($id);
        $name = $product->name;
        $product->delete();
        return back()->with('ProductArchiveSuccess',$name ." Deleted Successfully");
      }

     
      
}
