<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;

class ProductCatalog extends Component
{
    public function render()
    {
        $categories = Category::orderby('name')->get();
        $products = Product::where('status', 1)->orderBy('name')->with('images')->get();
        return view('livewire.table.product-catalog',[
            'products' => $products,
            'categories' => $categories
        ]);
    }
}
