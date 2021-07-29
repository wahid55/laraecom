<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'street',
        'state',
        'city',
        'country',
        'zip',
        'mobile',
        'user_id',
    ];

    /**
     * Get the user that owns the address.
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
