<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class uploadOffer extends Model
{
    use HasFactory, Sluggable;
    protected $table = 'upload_offers';
    protected $fillable = [
        'category_id',
        'item_name',
        'slug',
        'owner',
        'quantity',
        'country',
        'city',
        'contact',
        'image',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'item_name'
            ]
        ];
    }
}
