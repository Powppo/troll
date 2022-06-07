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
                
                <div class="col">
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
                </div>

    </div>
    </div>
    </div>
    </div>
</body>
@endsection
