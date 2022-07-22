<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'category';
     protected $fillable = [
        'name',
    ];
     public function categoryTransactions(){
        return $this->hasMany(Product::class,'category_id','id');
    }
}
