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
<<<<<<< HEAD
<<<<<<< HEAD
        'suppliers_id',
        'stock',
        'stock_warning',
=======
        'stock',
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
        'suppliers_id',
        'stock',
        'stock_warning',
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    public function getRouteKeyName()
    {
        return 'name';
    }
<<<<<<< HEAD
=======

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    public function brand(){
        return $this-> belongsTo(Brand::class);
    }
     public function category(){
        return $this-> belongsTo(Category::class);
    }
<<<<<<< HEAD
<<<<<<< HEAD
    public function suppliers(){
        return $this-> belongsTo(Supplier::class);
    }
=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    public function suppliers(){
        return $this-> belongsTo(Supplier::class);
    }
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    public function images(){
       return $this->hasMany(ProductImage::class);
    }
    public function productcart()
    {
        return $this-> belongsTo(CustomerCart::class);
    }
}
