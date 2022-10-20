<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Customer extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes,HasApiTokens;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
        'name',
        'email',
        'phone_number',
        'password',
        'birthday',
        'gender',
        'email_verified'
<<<<<<< HEAD
=======
        'name', 'email','phone_number',
        'password','birthday','gender',
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
=======
>>>>>>> bbfcee38fcb0b74416775e937700061585e183b7
    ];

    public function customershippingaddress()
    {
        return $this->hasMany(CustomerShippingAddress::class, 'customer_id','id');
    }

    public function customerscart()
    {
        return $this->hasMany(CustomerCart::class, 'customer_id','id');
    }

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
    public function getPhotoUrlAttribute()
    {
        if ($this->foto !== null) {
            return url('media/user/' . $this->id . '/' . $this->foto);
        } else {
            return url('media-example/no-image.png');
        }
    }
}
