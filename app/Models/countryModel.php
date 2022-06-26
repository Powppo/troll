<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countryModel extends Model
{
    use HasFactory;
    protected $table='country';
    protected $fillable = [
        'countryname',
        'cityname',
    ];
}
