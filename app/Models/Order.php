<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;


    protected $fillable = ['client_firstname', 'client_lastname', 'client_address', 'client_phone', 'total_amount', 'delivery_time', 'is_delivered', 'date'];

    /**
     * The plate that belong to the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function plate(): BelongsToMany
    {
        return $this->belongsToMany(Plate::class);
    }
}
