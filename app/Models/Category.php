<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
        'parent_id', 
        'featured', 
        'menu', 
        'image',
    ];

    /**
     * @var array
     */
    protected $casts  = [
        'parent_id' => 'integer',
        'featured'  => 'boolean',
        'menu'      => 'boolean'
    ];

    /**
     * Get the category associated with the category.
     */
    public function parent() {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * Get the categories associated with the category.
     */
    public function children() {
        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * The products that belong to the category.
     */
    public function products() {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }
}
