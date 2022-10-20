<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
<<<<<<< HEAD
<<<<<<< HEAD
use App\Models\Supplier;
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
use App\Models\Supplier;
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductExport;

class ProductController extends Controller
{
    //Show Product Table
    public function index(){
<<<<<<< HEAD
<<<<<<< HEAD
      return view('admin.page.product.product');
=======
      return view('admin.page.Product.product');
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
      return view('admin.page.product.product');
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }

    //Show Add Product Form
    public function create(){
      $categories = Category::orderBy('name')->get();
      $brands = Brand::orderBy('name')->get();
<<<<<<< HEAD
<<<<<<< HEAD
      $suppliers = Supplier::orderBy('name')->get();
      return view('admin.page.Product.productadd',[
          'categories' => $categories,
          'brands' => $brands,
          'suppliers' => $suppliers
=======
      return view('admin.page.Product.productadd',[
          'categories' => $categories,
          'brands' => $brands
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
      $suppliers = Supplier::orderBy('name')->get();
      return view('admin.page.Product.productadd',[
          'categories' => $categories,
          'brands' => $brands,
          'suppliers' => $suppliers
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
<<<<<<< HEAD
<<<<<<< HEAD
          'suppliers_id' => $request->supplier,
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
          'suppliers_id' => $request->supplier,
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
          'stock' => $request->stock,
          'SKU' => $request->SKU,
          'cprice' => $request->cprice,
          'sprice' => $request->sprice,
          'weight' => $request->weight,
          'status' => $archived,
<<<<<<< HEAD
<<<<<<< HEAD
          'stock_warning' => $request->w_stock,
          'description' => $request->description,

=======
          'description' => $request->description,
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
          'stock_warning' => $request->w_stock,
          'description' => $request->description,

>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
    public function edit($id){
      $product = Product::findorFail($id);
=======
    public function edit(Product $product){
      //$product = Product::findorFail($id);
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
      $categories = Category::orderBy('name')->get();
      $brands = Brand::orderBy('name')->get();
      $suppliers = Supplier::orderBy('name')->get();
      $images = $product->images;

      return view('admin.page.product.productedit', compact('product'),[
        'categories' => $categories,
        'brands' => $brands,
<<<<<<< HEAD
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
        'suppliers' => $suppliers,
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        'images' => $images,
      ]);
    }

    //Update Product Info from database
    public function update(Request $request,$id ){
        $this->validate($request, array(
            'name'=> "required|unique:product,name,$id",
            'category' => 'required',
            'brand' => 'required',
<<<<<<< HEAD
<<<<<<< HEAD
            'supplier' => 'required',
            'stock' => 'required|numeric|min:0',
            'w_stock' => 'required|numeric|min:0',
=======
            'stock' => 'required|numeric|min:0',
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
            'supplier' => 'required',
            'stock' => 'required|numeric|min:0',
            'w_stock' => 'required|numeric|min:0',
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
<<<<<<< HEAD
<<<<<<< HEAD
        $product->suppliers_id = $request->input('supplier');
        $product->stock = $request->input('stock');
        $product->stock_warning = $request->input('w_stock');
=======
        $product->stock = $request->input('stock');
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
        $product->suppliers_id = $request->input('supplier');
        $product->stock = $request->input('stock');
        $product->stock_warning = $request->input('w_stock');
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
<<<<<<< HEAD
<<<<<<< HEAD
    public function show(Product $product){
      return view('admin.page.product.productshow', compact('product'));
=======
    public function show($id){
      $product = Product::with('category','brand','images')->findorFail($id);
      return view('admin.page.Product.productshow', compact('product'));
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    public function show(Product $product){
      return view('admin.page.product.productshow', compact('product'));
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    }
      //Show Product Archive Page
      public function ProductArchiveIndex(){
        $products = Product::onlyTrashed()->orderBy('name')->paginate(20);
<<<<<<< HEAD
<<<<<<< HEAD
        return view('admin.page.product.productarchive',[
=======
        return view('admin.page.Product.productarchive',[
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
        return view('admin.page.product.productarchive',[
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
            'products' => $products
        ]);
      }

<<<<<<< HEAD
<<<<<<< HEAD
    //Export Product to Excel
    public function exportproductexcel(){
=======
      //Export Product to Excel

      public function exportproductexcel(){
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    //Export Product to Excel
    public function exportproductexcel(){
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
