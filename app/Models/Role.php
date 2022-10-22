<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $fillable = [
        'name',
    ];
    public function roleTransaction()
    {
        return $this->hasMany(User::class, 'roles_id','id');
    }

    public static function search($search){
        return empty($search) ? static::query() :
        static::query()->where('name','like','%'.$search.'%');
    }
}
