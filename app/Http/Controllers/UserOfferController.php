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
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;

class UserOfferController extends Controller
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
        return view('userOffers', compact('upload_offers'));
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
            $validateData['image'] = $request->file('image')->store('product');
        }

        uploadOffer::create($validateData);
        return redirect()->back()->with('status','Offer Added' );
    }

    public function showuseroffer(){
        if (Auth::id()) {
            // $products = Product::latest()->filter(request(['search', 'category', 'tag']))->paginate('12');
            // $categories = Category::withCount('product')->get();
            $user = auth()->user();
            $offerItem = uploadOffer::where('user_id', $user->id)->sum('quantity');
            $offerItems = uploadOffer::where('user_id', Auth::id())->get();
            return view('userShow', compact('products', 'categories', 'cartItem', 'cartItems'));
        } else {
            return redirect('login');
        }
    }

}
