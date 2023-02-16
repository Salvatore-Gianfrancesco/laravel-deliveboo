<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;


    protected $fillable = ['client_firstname', 'client_lastname', 'client_address', 'client_phone', 'total_amount', 'delivery_time', 'is_delivered', 'restaurant_id'];

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
     * The plates that belong to the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function plates(): BelongsToMany
    {
        return $this->belongsToMany(Plate::class)->withPivot('quantity');
    }
}
