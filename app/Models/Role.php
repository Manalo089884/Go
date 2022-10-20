<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';
<<<<<<< HEAD
<<<<<<< HEAD
    protected $fillable = [
        'name',
    ];
    public function roleTransaction()
    {
        return $this->hasMany(User::class, 'roles_id','id');
    }

    public static function search($search){
        return empty($search) ? static::query() :
=======
     protected $fillable = [
=======
    protected $fillable = [
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        'name',
    ];
    public function roleTransaction()
    {
        return $this->hasMany(User::class, 'roles_id','id');
    }

    public static function search($search){
<<<<<<< HEAD
        return empty($search) ? static::query() : 
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
        return empty($search) ? static::query() :
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        static::query()->where('name','like','%'.$search.'%');
    }
}
