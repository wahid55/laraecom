<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
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
     * Get Fullname of customer.
     *
     * @return string
     */
    public function name() {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Get the addresses for the user.
     */
    public function addresses() {
        return $this->hasMany(Address::class);
    }

    /**
     * Get the wishlist for the user.
     */
    public function wishlist() {
        return $this->hasOne(Wishlist::class);
    }
}
