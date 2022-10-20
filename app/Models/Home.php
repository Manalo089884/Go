<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table = 'home';
    protected $fillable = [
        'title','featured_image','status'
    ];
    public static function search($search){
        return empty($search) ? static::query() :
        static::query()->where('title','like','%'.$search.'%');
      }
}
