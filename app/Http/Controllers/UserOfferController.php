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
            $validateData['image'] = $request->file('image')->store('product');
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

    public function show(uploadOffer $product)
    {
        // $product = uploadOffer::with('category')->where('id', $product);
        return view('userShow', [
            'product' => $product,
            'categories' => category::all(),
            'country' => countryModel::all()
        ]);
    }

    public function edit(uploadOffer $product)
    {
        // $tags = Tag::all();
        // $product_tag = $product->tag;
        // $diff = $tags->diff($product_tag);
        $country = countryModel::all();
        $city = cityModel::all();
        $user = auth()->user();
        return view('userEdit', compact('user', 'country','city'), [
            'product' => $product,
            'categories' => category::all(),   
            
        ]);
    }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\uploadOffer  $request
     * @param  \App\Models\uploadOffer  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, uploadOffer $product)
    {
        $rules = [
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
        ];

        if ($request->slug != $product->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validateData = $request->validate($rules);

        $validateData['small_description'] = Str::limit(strip_tags($request->description), 200);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('Product');
        }
        
        uploadOffer::where('id', $product->id)
            ->update($validateData);
        $product->tag()->sync($request->tag);
        return redirect('/userShow')->with('success', 'Product Succesful Update');
    }

    public function destroy(uploadOffer $category)
    {
        if ($category->image) {
            Storage::delete($category->image);
        }
        uploadOffer::destroy($category->id);
        return redirect('/userOffers')->with('success', 'Category Succesful Delete');
    }


}
