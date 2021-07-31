<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sku',
        'name',
        'slug',
        'description',
        'quantity',
        'weight',
        'price',
        'sale_price',
        'status',
        'featured',
        'brand_id',
        'shop_id',
    ];

    /**
     * Get the images for the product.
     */
    public function images() {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * Get the shop that owns the product.
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    /**
     * The categories that belong to the product.
     */
    public function categories() {
        return $this->belongsToMany(Category::class)->withTimestamps();
    }

    /**
     * Get the brand that owns the product.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * The attributes that belong to the product.
     */
    public function attributes() {
        return $this->belongsToMany(Attribute::class)->withTimestamps();
    }
}
