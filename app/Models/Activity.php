<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Activity extends Model
{
    use HasFactory;

    protected $guarded = [];
    public static function generateSlug($name) {
        return Str::slug($name, '-');
    }

        public function review() :HasMany
    {
        return $this->hasMany(Review::class);
    }
        public function categories():BelongsToMany
        {
        return $this->belongsToMany(Category::class);
        }
}
