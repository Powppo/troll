@extends('layouts.app')
@section('content')

<!-- Styles -->
<link href="{{ asset('css/offer.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Press+Start+2P&family=Share+Tech+Mono&display=swap" rel="stylesheet">

<body>
    <div class="image-grid" >
        <div class="title"><h2>Recent Item Offers</h2></div>
        <div class="upload">
            <h6>Click below to Upload Offer</h6>
            <a class=" uploadbutton btn btn-dark btn-md" href="{{ route('upload') }}" role="button"> Upload</a>
        </div>
        <hr class="my-4">
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4">
                
                {{-- <div class="col">
                    <img src="images/mouse.jpg" alt="Mouse">
                    <h5>SteelSeries Rival 3 Wired Mouse</h5>
                    <a class="btn btn-dark btn-sm" href="{{ route('mouse') }}" role="button" >Select</a>
                </div>

                <div class="col">
                    <img src="images/keyboard.jpg" alt="Keyboard">
                    <h5>SteelSeries Apex 7</h5>
                    <a class="btn btn-dark btn-sm" href="{{ route('keyboard') }}" role="button" >Select</a>
                </div>

                <div class="col">
                    <img src="images/monitor.jpg" alt="Monitor">
                    <h5>Razer Raptor 27" Gaming Monitor</h5>
                    <a class="btn btn-dark btn-sm" href="{{ route('monitor') }}" role="button" >Select</a> 
                </div>

                <div class="col">
                    <img src="images/headset.jpg" alt="headset">
                    <h5>SteelSeries Arctis Pro</h5>
                    <a class="btn btn-dark btn-sm" href="{{ route('headset') }}" role="button" >Select</a>  
                </div>

                <div class="col">
                    <img src="images/earphone.jpg" alt="earphone">
                    <h5>Razer Hammerhead Pro V2</h5>
                    <a class="btn btn-dark btn-sm" href="{{ route('earphone') }}" role="button" >Select</a>  
                </div>

                <div class="col">
                    <img src="images/mouse2.jpg" alt="mouse">
                    <h5>Logitech G Pro Hero</h5>
                    <a class="btn btn-dark btn-sm" href="{{ route('mouse2') }}" role="button" >Select</a> 
                </div>

                <div class="col">
                    <img src="images/keyboard2.jpg" alt="keyboard">
                    <h5>Ducky One 2 Mini</h5>
                    <a class="btn btn-dark btn-sm" href="{{ route('keyboard2') }}" role="button" >Select</a> 
                </div>

                <div class="col">
                    <img src="images/headset2.jpeg" alt="headset">
                    <h5>Razer Kraken X</h5>
                    <a class="btn btn-dark btn-sm" href="{{ route('headset2') }}" role="button" >Select</a>
                </div> --}}

                @foreach($upload_offers as $product)
                <div class="col-lg-3 pb-1 text-center">
                    <div class="card product-item border-0 mb-4">
                        <div
                            class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            {{-- <img class="img-fluid" src="{{ asset('storage/'.$product->image) }}"> --}}
                            <img src="<?php echo asset("storage/$product->image")?>"></img>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"> {{ $product->item_name }} </h6>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="show/{{ $product->slug }}" class="btn btn-sm text-dark p-0" style="text-align: center;">View
                                    Item</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach

    </div>
    </div>
    </div>
    </div>
</body>
@endsection
