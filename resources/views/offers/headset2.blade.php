@extends('layouts.app')
@section('content')

<!-- Styles -->
<link href="{{ asset('css/offer.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Press+Start+2P&family=Share+Tech+Mono&display=swap" rel="stylesheet">

<body>
    <div class="image-grid" >
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4">              
                <div class="col">
                    <img src="images/headset2.jpeg" alt="headset">
                    <h4>Razer Kraken X</h4>
                </div>
                <div class="content">
                    <h5>Category: Headset-Electronics</h5>
                    <h5>Owned By: Afrizal</h5>
                    <h5>Quantity: 1</h5>
                    <h5>Country: Indonesia</h5>
                    <h5>City: Jakarta</h5>
                    <h5>Contact: 911321</h5>
                </div>
    </div>
</body>
@endsection
