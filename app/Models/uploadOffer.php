<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadOffer extends Model
{
    use HasFactory;
    protected $table = 'upload_offers';
    protected $fillable = [
        'category',
        'owner',
        'quantity',
        'country',
        'city',
        'contact',
        'image',
    ];
}
