<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerShippingAddress extends Model
{
    use HasFactory;
    protected $table = 'customer_shipping_address';
     protected $fillable = [
        'name','customers_id','phone_number','notes','house','province','city','barangay'
    ];
}
