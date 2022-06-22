<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentModel;

class CheckoutModel extends Model
{
    use HasFactory;
    protected $table='checkout';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'payment_id',
        'shipment_id',
    ];

    public function payment()
    {
        return $this->belongsTo(PaymentModel::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function uploadoffer(){
        return $this->hasMany(UploadOffer::class);
    }
    
    public function category(){
        return $this->belongsTo(category::class);
    }
}
