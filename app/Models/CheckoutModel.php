<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentModel;
use App\Models\ShipmentModel;

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
}
