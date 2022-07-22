<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Brand extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'brand';
     protected $fillable = [
        'name',
    ];
      public function brandTransactions()
    {
        return $this->hasMany(Product::class, 'brand_id','id');
    }

}
