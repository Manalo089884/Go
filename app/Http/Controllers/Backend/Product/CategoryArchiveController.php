<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryArchiveController extends Controller
{
      public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){  
      $search = request()->query('search');
      if($search){
          $category = Category::where('name','LIKE', "%{$search}%")->onlyTrashed()->paginate(5);
      }else{
         $category = Category::orderBy('name')->onlyTrashed()->paginate(20 );
      }
        return view('admin.page.Product.categoryArchive',[
          'category' => $category
        ]); // Collection
    }
    public function destroy(Category $category,$id){
      $categories = Category::onlyTrashed()->findorFail($id);

      if($categories->categoryTransactions()->count()){
          return back()->with('invalid',"Category has Product records ");
      }
        
      Category::where('id',$id)->forceDelete();
      return back()->with('deleteSuccess', $categories->name ." was permanently deleted "  );
    }
    public function update(Category $category,$id){
        $category =  Category::onlyTrashed()->findOrFail($id);
        $category->restore();
        $name = $category->name;
        return back()->with('restoreSuccess',$name ." was Successfully Restored");
    }
}
