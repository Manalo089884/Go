<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCart extends Model
{
    use HasFactory;
    protected $table = 'customer_cart';
    protected $fillable = [
        'customers_id','product_id','quantity'
    ];

    public function getProduct(){
        return $this->hasMany(Product::class,'id','product_id');
    }

}
