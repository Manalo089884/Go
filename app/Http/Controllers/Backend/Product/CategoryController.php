<?php

namespace App\Http\Controllers\Backend\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){  
      $search = request()->query('search');
      if($search){
          $category = Category::where('name','LIKE', "%{$search}%")->paginate(5);
      }else{
         $category = Category::orderBy('name')->paginate(5 );
      }
        return view('admin.page.Product.category',[
          'category' => $category
        ]); 
    }

    public function store(StoreCategoryRequest $request){
      Category::create($request->validated());
      return back()->with('success', $request->name .' Save Success');
    }

    public function update(UpdateCategoryRequest $request,$id){
      $categories = Category::find($id);
      $name= $categories->name;
      $request->validated();
      $categories->name = $request->input('name');
      $categories->update();
     
      return back()->with('editSuccess',  $name .' Has been changed to ' .$categories->name) ;
    }
    
    public function destroy($id){
        $category = Category::findorFail($id);
        if($category->categoryTransactions()->count()){
          return back()->with('invalid',$category->name ." has product records ");
        }
        $category->delete();
        return back()->with('deleteSuccess',$category->name." Deleted Successfully");
    }
    
     public function CategoryArchiveIndex(){  
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
    public function CategoryArchiveDestroy(Category $category,$id){
      $categories = Category::onlyTrashed()->findorFail($id);

      if($categories->categoryTransactions()->count()){
          return back()->with('invalid',"Category has Product records ");
      }
        
      Category::where('id',$id)->forceDelete();
      return back()->with('deleteSuccess', $categories->name ." was permanently deleted "  );
    }
    public function CategoryArchiveRestore(Category $category,$id){
        $category =  Category::onlyTrashed()->findOrFail($id);
        $category->restore();
        $name = $category->name;
        return back()->with('restoreSuccess',$name ." was Successfully Restored");
    }
  
 
}
