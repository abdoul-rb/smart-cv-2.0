<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Skill extends Model
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

        static::creating(function (Skill $skill) {
            $skill->slug = Str::slug($skill->name);
            $skill->uuid = Str::uuid();
        });

        static::updating(function (Skill $skill) {
            $skill->slug = Str::slug($skill->name);
        });
    }
}
