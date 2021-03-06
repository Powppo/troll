<?php

namespace App\Http\Controllers;

use App\Models\uploadOffer;
use App\Models\category;
use App\Models\CheckoutModel;
use App\Models\CityModel;
use App\Models\countryModel;
use App\Models\PaymentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;

class offerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $country = countryModel::all();
        $upload_offers = uploadOffer::all();
        return view('offers', compact('upload_offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function upload()
    {
        $country = countryModel::all();
        $city = cityModel::all();
        $categories = Category::all();
        $user = auth()->user();
        return view('upload', compact('categories', 'country', 'city', 'user'));
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeOffer(Request $request)
    {
        $validateData = $request ->validate([
            'category_id' => 'required',
            'item_name' => 'required',
            'slug' => 'required|unique:upload_offers',
            'owner' => 'required',
            'user_id' => 'required',
            'quantity' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'contact' => 'required',
            'image' => 'image|file|max:1024',
        ]);
        if ($request->file('image'))
        {
            $validateData['image'] = $request->file('image')->store('product', 'public');
        }

        uploadOffer::create($validateData);
        return redirect()->back()->with('status','Offer Added' );
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\uploadOffer  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(uploadOffer $product)
    {
        // $product = uploadOffer::with('category')->where('id', $product);
        return view('show', [
            'product' => $product,
            'categories' => category::all(),
            'country' => countryModel::all()
        ]);
    }

    public function co(uploadOffer $product)
    {
        $city = cityModel::all();
        $checkout = CheckoutModel::with('payment',)->get();
        $upload_offers = uploadOffer::where('user_id', Auth::id())->get();
        // $product = uploadOffer::with('countryModel')->get();
        // $product = uploadOffer::with('category')->where('id', $product);
        return view('checkout', [
            'product' => $product,
            'city' => cityModel::all(),
            'upload_offers' => $upload_offers,
            'checkout' => $checkout,
            'payment' => PaymentModel::all(),
            
        ]);
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(uploadOffer::class, 'slug', $request->item_name);
        return response()->json(['slug' => $slug]);
    }

}
