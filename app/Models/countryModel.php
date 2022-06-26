<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class countryModel extends Model
{
    use HasFactory, sluggable;
    protected $table='country';
    protected $fillable = [
        'countryname',
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
                'source' => 'countryname'
            ]
        ];
    }
}
