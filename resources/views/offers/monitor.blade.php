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
                    <img src="images/monitor.jpg" alt="Monitor">
                    <h4>Razer Raptor 27" Gaming Monitor</h4>
                </div>
                <div class="content">
                    <h5>Category: Monitor-Electronics</h5>
                    <h5>Owned By: Luna</h5>
                    <h5>Quantity: 1</h5>
                    <h5>Country: Indonesia</h5>
                    <h5>City: Bandung</h5>
                    <h5>Contact: 911213</h5>
                </div>
    </div>
</body>
@endsection
