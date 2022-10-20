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
<<<<<<< HEAD
    public function brandTransactions()
    {
        return $this->hasMany(Product::class, 'brand_id','id');
    }

    public static function search($search){
        return empty($search) ? static::query() :
=======
      public function brandTransactions()
    {
        return $this->hasMany(Product::class, 'brand_id','id');
    }
    
    public static function search($search){
        return empty($search) ? static::query() : 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        static::query()->where('name','like','%'.$search.'%');
    }
}
