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

<<<<<<< HEAD
=======

 

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
    public function customership(){
        return $this-> belongsTo(Customer::class);
    }


}
