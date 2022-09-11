<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
class ProductForm extends Component
{
    public $name,$category,$brand,$stock,$purchaseprice,$costprice,$weight,$status,$description;
    
   
    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();
        return view('livewire.form.product-form',[
         
            'category' => $categories
            ,'brand' => $brands
        ]);
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'purchaseprice' => 'required',
            'costprice' => 'required',
            'weight' => 'required',
            'status' => 'required',
            'description' => 'required'
        ]);
    }
    protected function rules(){
        return [
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'purchaseprice' => 'required',
            'costprice' => 'required',
            'weight' => 'required',
          
            'description' => 'required'
        ];
    }
    public function StoreProductData(){
       $this->validate();
     
    }
}
