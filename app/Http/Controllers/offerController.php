<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadOffer;

class offerController extends Controller
{
    public function index()
    {
        return view('offers');
    }

    public function upload()
    {
        return view('upload');
    }

    public function storeOffer(Request $request)
    {

        $uploadOffer = new uploadOffer;
        $uploadOffer->category = $request->category;
        $uploadOffer->owner = $request->owner;
        $uploadOffer->quantity = $request->quantity;
        $uploadOffer->country = $request->country;
        $uploadOffer->city = $request->city;
        $uploadOffer->contact = $request->contact;
        if ($request->hasfile('path_offer'))
        {
            $file = $request->file('path_offer');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('public/images/', $filename);
            $uploadOffer->path_offer = $filename;
        }
        $uploadOffer->save();
        return redirect()->back()->with('status','Offer Added' );
    }

    /*
    public function showOffer()
    {
        $data = uploadOffer::all();
        return view('offers.mouse', ['uploadOffer'=>$data]);
    }
    */

    public function mouse()
    {
        return view('offers.mouse');
    }

    public function keyboard()
    {
        return view('offers.keyboard');
    }

    public function monitor()
    {
        return view('offers.monitor');
    }

    public function headset()
    {
        return view('offers.headset');
    }

    public function headset2()
    {
        return view('offers.headset2');
    }

    public function earphone()
    {
        return view('offers.earphone');
    }
    
    public function mouse2()
    {
        return view('offers.mouse2');
    }

    public function keyboard2()
    {
        return view('offers.keyboard2');
    }
}
