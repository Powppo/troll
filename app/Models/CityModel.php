<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    use HasFactory;
    protected $table='city';
    protected $fillable = [
        'cityname',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function uploadOffer(){
        return $this->belongsTo(uploadOffer::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'cityname'
            ]
        ];
    }
}
