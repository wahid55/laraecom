<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'logo',
        'street',
        'state',
        'city',
        'country',
        'zip',
        'email',
        'mobile',
        'admin_id',
    ];

    /**
     * Get the user that owns the phone.
     */
    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    /**
     * Get the products for the shop.
     */
    public function products() {
        return $this->hasMany(Product::class);
    }
}
