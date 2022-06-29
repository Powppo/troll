<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\CheckoutModel;
use App\Models\cityModel;
use App\Models\countryModel;
use App\Models\uploadOffer;
use App\Models\PaymentModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use DB;

class CheckoutController extends Controller
{
    public function index()
    {
        $product = uploadOffer::with('countryModel')->get();
        $checkout = CheckoutModel::with('payment')->get();
        $upload_offers = uploadOffer::where('user_id', Auth::id())->get();
        return view('checkout', 'upload_offers', 'product',['checkout' => $checkout], ['product' => $product], ['upload_offers' => $upload_offers]);
    }

    public function checkout()
    {
        $product = uploadOffer::with('countryModel')->get();
        $payment = PaymentModel::all();
        $upload_offers = uploadOffer::where('user_id', Auth::id())->get();
        return view('checkout', 'upload_offers', 'product', ['product' => $product], ['payment' => $payment], ['upload_offers' => $upload_offers]);
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

    public function updateOffer(Request $request, uploadOffer $uploadOffer)
    {
        $rules = [
            'owner' => 'required',
            'user_id' => 'required',
            'contact' => 'required',
        ];

        $validateData = $request->validate($rules);

        uploadOffer::where('id', auth()->user()->id)->update($validateData);

        return redirect()->route('userOffers');
    }
}
