<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dishe extends Model
{
    use HasFactory;

    protected $fillble = ['name', 'image', 'price', 'description'];

    public function dishCategory():BelongsTo
    {
       return $this->belongsTo(DishCategory::class);
    }
        public function activity():BelongsTo
    {
       return $this->belongsTo(Activity::class);
    }
}
