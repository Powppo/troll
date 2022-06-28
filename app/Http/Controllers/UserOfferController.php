<?php

namespace App\Http\Controllers;

use App\Models\uploadOffer;
use App\Models\category;
use App\Models\CheckoutModel;
use App\Models\CityModel;
use App\Models\countryModel;
use App\Models\User;
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
            $validateData['image'] = $request->file('image')->store('product', 'public');
        }

        uploadOffer::create($validateData);
        return redirect()->back()->with('status','Offer Added' );
    }

    public function showuseroffer(){
        if (Auth::id()) {
            $id = User::find(Auth::id());
            $upload_offers = uploadOffer::where('user_id', Auth::id())->get();
            return view('userOffers', compact('upload_offers'));
        } else {
            return redirect('login');
        }
    }

}
