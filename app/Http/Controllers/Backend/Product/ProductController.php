<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Supplier;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductExport;

class ProductController extends Controller
{
    //Show Product Table
    public function index(){
      return view('admin.page.product.product');
    }

    //Show Add Product Form
    public function create(){
      $categories = Category::orderBy('name')->get();
      $brands = Brand::orderBy('name')->get();
      $suppliers = Supplier::orderBy('name')->get();
<<<<<<< HEAD
      return view('admin.page.product.productadd',[
=======
      return view('admin.page.Product.productadd',[
>>>>>>> 54110e7fb0021a6dcea9bf34c6c21169dadbb802
          'categories' => $categories,
          'brands' => $brands,
          'suppliers' => $suppliers
      ]);
    }

    //Store Product in Database
    public function store(StoreProductRequest $request){
      $request->validated();
      $archived = $request->boolean('status');
      $new_product = Product::create([
          'name' => $request->name,
          'category_id' => $request->category,
          'brand_id' => $request->brand,
          'suppliers_id' => $request->supplier,
          'stock' => $request->stock,
          'SKU' => $request->SKU,
          'cprice' => $request->cprice,
          'sprice' => $request->sprice,
          'weight' => $request->weight,
          'status' => $archived,
          'stock_warning' => $request->w_stock,
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
    //Show Edit Product Page
    public function edit(Product $product){
      //$product = Product::findorFail($id);
      $categories = Category::orderBy('name')->get();
      $brands = Brand::orderBy('name')->get();
      $suppliers = Supplier::orderBy('name')->get();
      $images = $product->images;

      return view('admin.page.product.productedit', compact('product'),[
        'categories' => $categories,
        'brands' => $brands,
        'suppliers' => $suppliers,
        'images' => $images,
      ]);
    }

    //Update Product Info from database
    public function update(Request $request,$id ){
        $this->validate($request, array(
            'name'=> "required|unique:product,name,$id",
            'category' => 'required',
            'brand' => 'required',
            'supplier' => 'required',
            'stock' => 'required|numeric|min:0',
            'w_stock' => 'required|numeric|min:0',
            'SKU' => 'required',
            'cprice' => 'required|numeric|min:0',
            'sprice' => 'required|numeric|min:0',
            'weight' => 'required|numeric',
            'description' => 'required',

        ));
        //$request->validated();
        $product = Product::findorFail($id);
        $status = $request->boolean('status');

        $product->name = $request->input('name');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');
        $product->suppliers_id = $request->input('supplier');
        $product->stock = $request->input('stock');
        $product->stock_warning = $request->input('w_stock');
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


    //Show Product Page Info
    public function show(Product $product){
      //$product = Product::with('category','brand','images')->findorFail($id);
      return view('admin.page.product.productshow', compact('product'));
    }
      //Show Product Archive Page
      public function ProductArchiveIndex(){
        $products = Product::onlyTrashed()->orderBy('name')->paginate(20);
        return view('admin.page.product.productarchive',[
            'products' => $products
        ]);
      }

    //Export Product to Excel
    public function exportproductexcel(){
      return Excel::download(new ProductExport,'products.xlsx');
    }

    //Export Product to CSV
    public function exportproductcsv(){
      return Excel::download(new ProductExport,'products.csv');
    }

    //Export Product to HTML
    public function exportproducthtml(){
      return Excel::download(new ProductExport,'products.html');
    }

    //Export Product to PDF
    public function exportproductpdf(){
      return Excel::download(new ProductExport,'products.pdf');
    }
}
