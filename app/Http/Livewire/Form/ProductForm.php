<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
class ProductForm extends Component
{
    public $brand;
    public $category;
    public $name,$stock,$cprice,$sprice,$weight,$sku,$status,$description;

    public $listofcategory;
    public $listofbrand;

    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $brands = Brand::orderBy('name')->get();
        return view('livewire.form.product-form',[

            'categories' => $categories
            ,'brands' => $brands
        ]);
    }

    public function mount(){
        $categories = Category::orderBy('name','desc')->get()->first();



    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'cprice' => 'required',
            'sprice' => 'required',
            'weight' => 'required',
            'description' => 'required'
        ]);
    }
    protected function rules(){
        return [
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'stock' => 'required',
            'cprice' => 'required',
            'sprice' => 'required',
            'weight' => 'required',
            'description' => 'required'
        ];
    }
    public function StoreProductData(){
       $this->validate();

    }
}
