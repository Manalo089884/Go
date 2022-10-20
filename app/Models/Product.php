<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory,SoftDeletes;
     protected $table = 'product';
     protected $fillable = [
        'name',
        'category_id',
        'brand_id',
        'suppliers_id',
        'stock',
        'stock_warning',
        'SKU',
        'cprice',
        'sprice',
        'weight',
        'status',
        'description',
    ];


    public static function search($search){
      return empty($search) ? static::query() :
      static::query()->where('name','like','%'.$search.'%')
      ->orWhere('stock','like','%'.$search.'%');
    }
    public function getRouteKeyName()
    {
        return 'name';
    }
    public function brand(){
        return $this-> belongsTo(Brand::class);
    }
     public function category(){
        return $this-> belongsTo(Category::class);
    }
    public function suppliers(){
        return $this-> belongsTo(Supplier::class);
    }
    public function images(){
       return $this->hasMany(ProductImage::class);
    }
    public function productcart()
    {
        return $this-> belongsTo(CustomerCart::class);
    }
}
