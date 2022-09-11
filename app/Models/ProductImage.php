<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{

    protected $table = 'product_images';
     protected $fillable = [
        'product_id',
        'images',
    ];
    public function Product_Image_Transaction(){
        return $this-> belongsTo(Product::class);
     }
 
}
