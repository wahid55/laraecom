<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'key',
        'value',
    ];

    public static function get($key) {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : false;
    }

    public static function set($key, $value) {
        $entry = self::where('key', $key)->firstOrCreate();
        $entry->value = $value;
        return $entry->save();
    }
}
