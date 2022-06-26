<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckoutModel;
use App\Models\uploadOffer;
use App\Models\PaymentModel;
use DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $product = uploadOffer::with('countryModel')->get();
        $checkout = CheckoutModel::with('payment')->get();
        return view('checkout', 'product',['checkout' => $checkout], ['product' => $product]);
    }

    public function checkout()
    {
        $product = uploadOffer::with('countryModel')->get();
        $payment = PaymentModel::all();
        return view('checkout', 'product', ['product' => $product], ['payment' => $payment]);
    }

    public function store(Request $request)
    {
        $product = uploadOffer::with('countryModel')->get();
        $checkout = new CheckoutModel();
        $checkout->payment_id = $request->input('payment');
        /*$checkout->id = $request->get('id');

        $payment = new PaymentModel;
        $payment->id = $request->get('payment_method');

        $checkout->payment()->associate($payment);*/
        $checkout->save();

        return redirect()->route('home')
            ->with('success', 'Transaction Success');
    }
}
