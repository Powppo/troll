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
                    {{-- <img src="images/earphone.jpg" alt="earphone"> --}}
                    <h4>{{ $product->item_name }}</h4>
                </div>
                <div class="content">
                        <h6 class="my-1">Category Product</h6>
                        <p>{{ $product->category->name ?? 'None'}}</p> 
                        <h6 class="my-1">Product Quantity</h6>
                        <p>{{ $product->quantity }}</p>
                        <h6 class="my-1">Product Owner</h6>
                        <p>{{ $product->owner }}</p>
                        <h6 class="my-1">Owner Contact</h6>
                        <p>{{ $product->contact }}</p>
                    </div>
                </div>
    </div>
</body>
@endsection
