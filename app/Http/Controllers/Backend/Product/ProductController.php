<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductExport;

class ProductController extends Controller
{
    


      public function index(){  
        return view('admin.page.Product.product');
      }

      public function create(){
        $categories = Category::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();
        return view('admin.page.Product.productadd',[
          'categories' => $categories,
          'brands' => $brands
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
            'SKU' => $request->SKU,
            'cprice' => $request->cprice,
            'sprice' => $request->sprice,
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
      return redirect()->route('product.index')->with('success', $request->name .' was successfully inserted');
       
      }

      public function edit($id){
        $product = Product::findorFail($id);
        $categories = Category::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();
        
        $images = $product->images;

        return view('admin.page.Product.productedit', compact('product'),[
          'categories' => $categories,
          'brands' => $brands,
          'images' => $images,
        ]);
      
      }

      public function update(Request $request,$id ){
        $this->validate($request, array(
            'name'=> "required|unique:product,name,$id",
            'category' => 'required',
            'brand' => 'required',
            'stock' => 'required|numeric',
            'SKU' => 'required',
            'cprice' => 'required|numeric',
            'sprice' => 'required|numeric',
            'weight' => 'required|numeric',
            'description' => 'required',
        
        ));
        //$request->validated();
        $product = Product::findorFail($id);
        $status = $request->boolean('status');

        $product->name = $request->input('name');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');
        $product->stock = $request->input('stock');
        $product->SKU = $request->input('SKU');
        $product->cprice = $request->input('cprice');
        $product->sprice = $request->input('sprice');
        $product->weight = $request->input('weight');
        $product->status = $status;
        $product->description = $request->input('description');
        $product->update();

        return redirect()->route('product.index')->with('ProductEditSuccess', $request->name .' was successfully Edit');
        //return redirect('admin/product')->with('ProductEditSuccess', $request->name .' was successfully Edited');
      }
      
      public function destroy($id){ 
        $product = Product::findorFail($id);
        $product->delete();
        return back()->with('ProductArchiveSuccess',$product->name ." Deleted Successfully");
      }

       public function ProductArchiveIndex(){  
        $products = Product::onlyTrashed()->orderBy('name')->paginate(20);
        return view('admin.page.Product.productarchive',[
            'products' => $products
        ]);
      }

      public function ProductArchiveDestroy(Product $product,$id){
        $product = Product::onlyTrashed()->findorFail($id);
        $image = ProductImage::where('product_id','LIKE', "%{$product->id}%")->get();
        foreach ($image as $item) {
             unlink(public_path('product_images/'.$item->images));
        }
        $name = $product->name;
        Product::where('id',$id)->forceDelete();
        return back()->with('DeleteSuccess',$name  ." was Permanently Deleted");
    }
    
    public function ProductArchiveRestore(Product $product,$id){
        $product = Product::onlyTrashed()->findOrFail($id);
        $name = $product->name;
        $product->restore();
        
        return back()->with('RestoreSuccess',$name ." was Successfully Restored");
    }
    public function exportproductexcel(){
      return Excel::download(new ProductExport,'products.xlsx');
    }
    public function exportproductcsv(){
      return Excel::download(new ProductExport,'products.csv');
    }
    public function exportproducthtml(){
      return Excel::download(new ProductExport,'products.html');
    }
    public function exportproductpdf(){
      return Excel::download(new ProductExport,'products.pdf');
    }
      
}
