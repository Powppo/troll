<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class afterOffers extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'item_name',
        'slug',
        'quantity',
        'country_id',
        'city_id',
        'image',
    ];
}
