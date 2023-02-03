<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Type extends Model
{
    use HasFactory;

    /**
     * The restaurant that belong to the Type
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function restaurant(): BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class);
    }
}
