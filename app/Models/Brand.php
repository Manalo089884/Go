<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brand';
     protected $fillable = [
        'name',
    ];
      public function brandTransactions()
    {
        return $this->hasMany(Product::class, 'brand_id','id');
    }

    public static function search($search){
        return empty($search) ? static::query() :
        static::query()->where('name','like','%'.$search.'%');
    }
}
