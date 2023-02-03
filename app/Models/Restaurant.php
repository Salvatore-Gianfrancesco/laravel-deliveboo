<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['company_name', 'slug', 'description', 'address', 'piva', 'image', 'min_order', 'delivery', 'closing_time'];
}
