<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','age',
<<<<<<< HEAD
<<<<<<< HEAD
        'gender', 'address', 'phone_number','photo','roles_id'
    ];

    public static function search($search){
        return empty($search) ? static::query() :
        static::query()->where('name','like','%'.$search.'%')
        ->orWhere('email','like','%'.$search.'%')
        ->orWhere('phone_number','like','%'.$search.'%')
        ->orWhere('address','like','%'.$search.'%');
      }
=======
        'gender',
    ];

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
        'gender', 'address', 'phone_number','photo','roles_id'
    ];

    public static function search($search){
        return empty($search) ? static::query() :
        static::query()->where('name','like','%'.$search.'%')
        ->orWhere('email','like','%'.$search.'%')
        ->orWhere('phone_number','like','%'.$search.'%')
        ->orWhere('address','like','%'.$search.'%');
      }
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that appends to returned entities.
     *
     * @var array
     */
    protected $appends = ['photo'];

    /**
     * The getter that return accessible URL for user photo.
     *
     * @var array
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function roles(){
        return $this-> belongsTo(Role::class);
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }


=======
    public function getPhotoUrlAttribute()
    {
        if ($this->foto !== null) {
            return url('media/user/' . $this->id . '/' . $this->foto);
        } else {
            return url('media-example/no-image.png');
        }
    }
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
    public function roles(){
        return $this-> belongsTo(Role::class);
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }


>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
}
