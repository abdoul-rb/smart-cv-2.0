<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Achieve extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function (Achieve $achieve) {
            $achieve->slug = Str::slug($achieve->name);
            $achieve->uuid = Str::uuid();
        });

        static::updating(function (Achieve $achieve) {
            $achieve->slug = Str::slug($achieve->name);
        });
    }
}
