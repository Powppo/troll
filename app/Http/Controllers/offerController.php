<?php

namespace App\Http\Controllers;

use App\Models\uploadOffer;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
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
        $categories = Category::all();
        return view('upload', compact('categories'));
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function storeOffer(Request $request)
    {

        // $uploadOffer = new uploadOffer;
        // $uploadOffer->category = $request->category;
        // $uploadOffer->owner = $request->owner;
        // $uploadOffer->quantity = $request->quantity;
        // $uploadOffer->country = $request->country;
        // $uploadOffer->city = $request->city;
        // $uploadOffer->contact = $request->contact;
        $validateData = $request ->validate([
            'category_id' => 'required',
            'item_name' => 'required',
            'slug' => 'required|unique:upload_offers',
            'owner' => 'required',
            'quantity' => 'required',
            'country' => 'required',
            'city' => 'required',
            'contact' => 'required',
            'image' => 'image|file|max:1024',
        ]);
        if ($request->file('image'))
        {
            // $file = $request->file('path_offer');
            // $extention = $file->getClientOriginalExtension();
            // $filename = time().'.'.$extention;
            // $file->move('public/images/', $filename);
            // $uploadOffer->path_offer = $filename;
            $validateData['image'] = $request->file('image')->store('image');
        }

        uploadOffer::create($validateData);
        return redirect()->back()->with('status','Offer Added' );
    }


    /*
    public function showOffer()
    {
        $data = uploadOffer::all();
        return view('offers.mouse', ['uploadOffer'=>$data]);
    }
    */

    public function show(uploadOffer $product)
    {
        return view('offers.itemDetail', [
            'product' => $product
        ]);
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(uploadOffer::class, 'slug', $request->item_name);
        return response()->json(['slug' => $slug]);
    }

    // public function mouse()
    // {
    //     return view('offers.mouse');
    // }

    // public function keyboard()
    // {
    //     return view('offers.keyboard');
    // }

    // public function monitor()
    // {
    //     return view('offers.monitor');
    // }

    // public function headset()
    // {
    //     return view('offers.headset');
    // }

    // public function headset2()
    // {
    //     return view('offers.headset2');
    // }

    // public function earphone()
    // {
    //     return view('offers.earphone');
    // }
    
    // public function mouse2()
    // {
    //     return view('offers.mouse2');
    // }

    // public function keyboard2()
    // {
    //     return view('offers.keyboard2');
    // }
}
