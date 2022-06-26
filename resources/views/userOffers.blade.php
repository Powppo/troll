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
            <div class="title">
                <h2>My Item Offers</h2>
            </div>
            <div class="upload">
                <h6>Click below to Upload Offer</h6>
                <a class=" uploadbutton btn btn-dark btn-md" href="{{ route('upload') }}" role="button"> Upload</a>
            </div>
            <hr class="my-4">
            <div class="container-lg">
                <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4">
                    @foreach ($upload_offers as $upload)
                        <div class="col-lg-3 pb-1 text-center">
                            <div class="card product-item border-0 mb-4">
                                <div
                                    class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <img src="{{ asset('storage/'.$upload->image) }}">
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h6 class="text-truncate mb-3"> {{ $upload->item_name }} </h6>
                                </div>

                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <a href="show/{{ $upload->slug }}" class="btn btn-sm text-dark p-0">View
                                        Item</a>
                                    <a href="checkout/{{ $upload->slug }}" class="btn btn-sm text-dark p-0"><i
                                            class="fas fa-shopping-cart text-primary mr-1"></i>Checkout</a>
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
