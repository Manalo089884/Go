<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Supplier extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'suppliers';

    protected $fillable = [
       'name',
       'email',
       'contact',
       'address'
   ];
   public function getRouteKeyName()
   {
       return 'name';
   }
   public static function search($search){
    return empty($search) ? static::query() :
    static::query()->where('name','like','%'.$search.'%')
    ->orWhere('email','like','%'.$search.'%')
    ->orWhere('contact','like','%'.$search.'%');

  }
}
