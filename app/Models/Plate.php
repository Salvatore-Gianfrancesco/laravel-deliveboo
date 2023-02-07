<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class Plate extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'price', 'visibility', 'image', 'restaurant_id'];

    public static function createSlug($name)
    {
        $plate_slug = Str::slug($name);
        return $plate_slug;
    }

    /**
     * Get the restaurant that owns the Plate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    /**
     * The orders that belong to the Plate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
