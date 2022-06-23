<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckoutModel;
use App\Models\PaymentModel;
use DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $checkout = CheckoutModel::with('payment')->get();
        return view('checkout', ['checkout' => $checkout]);
    }

    public function checkout()
    {
        $payment = PaymentModel::all();
        return view('checkout', ['payment' => $payment]);
    }

    public function store(Request $request)
    {
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
