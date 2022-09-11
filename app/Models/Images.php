<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    
    protected $table = 'images';
    protected $fillable = [
        'product_id',
        'name',
    ];

    public function Product_Image_Transaction(){
        return $this-> belongsTo(Product::class);
    }
}
