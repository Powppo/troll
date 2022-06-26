@extends('layouts.app')
@section('content')
    <!-- Styles -->
    <link href="{{ asset('css/offer.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Press+Start+2P&family=Share+Tech+Mono&display=swap"
        rel="stylesheet">

    <body>
        <div class="image-grid">
            <div class="container-lg">
                <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4">
                    <div class="col">
                        {{-- <img src="images/earphone.jpg" alt="earphone"> --}}
                        <img src="{{ asset('storage/' . $product->image) }}">
                        <b>
                            <h4>{{ $product->item_name }}</h4>
                        </b>
                    </div>
                    <div class="content">               
                        <h5 class="my-1">Category Product</h5>
                        <p>{{ $product->category->name ?? 'None' }}</p>
                        <h5 class="my-1">Country</h5>
                        <p>{{ $product->country->countryname ?? 'None' }}</p>
                        <h5 class="my-1">Product Quantity</h5>
                        <p>{{ $product->quantity }}</p>
                        <h5 class="my-1">Product Owner</h5>
                        <p>{{ $product->owner }}</p>
                        <h5 class="my-1">Owner Contact</h5>
                        <p>{{ $product->contact }}</p>

                        <hr/>
                        <div class="float-right">
                            <a href="../checkout/{{ $product->slug }}" class="btn btn-sm text-dark p-0 ml-3">
                                <h3>Checkout</h3>
                            </a>
                        </div>
                    </div>


                </div>
    </body>
@endsection
