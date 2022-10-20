<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
     protected $fillable = [
        'name',     
    ];
     public function categoryTransactions(){
        return $this->hasMany(Product::class,'category_id','id');
    }

    public static function search($search){
        return empty($search) ? static::query() : 
        static::query()->where('name','like','%'.$search.'%');
    }
}
