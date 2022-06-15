<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = [
            ['payment_method' => 'Paypal',],
            ['payment_method' => 'Linkaja',],
            ['payment_method' => 'Ovo',],
            ['payment_method' => 'Dana',],
            ['payment_method' => 'Shopee',],
            ['payment_method' => 'Gopay',],
        ];

        DB::table('payment')->insert($payment);
    }
}
