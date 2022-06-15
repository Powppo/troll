<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CheckoutModel;

class PaymentModel extends Model
{
    use HasFactory;
    protected $table='payment';

    public function checkout()
    {
        return $this->hasOne(Checkout::class);
    }
}
