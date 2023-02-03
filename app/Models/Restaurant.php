<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'slug', 'description', 'address', 'piva', 'image', 'min_order', 'delivery', 'closing_time', 'user_id'];


    /**
     * Get the user associated with the Restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    /**
     * Get all of the plate for the Restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plate(): HasMany
    {
        return $this->hasMany(Plate::class);
    }

    /**
     * The type that belong to the Restaurant
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function type(): BelongsToMany
    {
        return $this->belongsToMany(Type::class);
    }
}
