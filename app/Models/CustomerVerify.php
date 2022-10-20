<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerVerify extends Model
{
    use HasFactory;

    protected $table = 'verify_customers';
    protected $fillable = [
        'customers_id',
        'token',
    ];
    public function customers(){
        return $this->belongsTo(Customer::class);
    }
}
