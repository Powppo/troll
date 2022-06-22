@extends('layouts.app')

<!-- Styles -->
<link href="{{ asset('css/offer.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Press+Start+2P&family=Share+Tech+Mono&display=swap" rel="stylesheet">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card">
        <div class="card-header">{{ __('Overview') }}</div>
                <div class="card-body">
                <div class="col">
                    <img src="{{ asset('storage/' . $product->image) }}">
                    <h4>{{ $product->item_name }}</h4>
                </div>
                <div class="content">
                    <h5>Category: {{ $product->category->name ?? 'None' }}</h5>
                    <h5>Owned By: {{ $product->owner }}</h5>
                    <h5>Quantity: {{ $product->quantity }}</h5>
                    <h5>Country: {{ $product->country }}</h5>
                    <h5>City: {{ $product->city }}</h5>
                    <h5>Contact: {{ $product->contact }}</h5>
                </div>
                </div>
            </div>
        </div>
            <div class="card">
            <div class="card-header">{{ __('Checkout') }}</div>
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Payment</label>
                            <select name="payment" class="form-control">
                                @foreach($payment as $pym)
                                    <option value="{{$pym->id}}">{{$pym->payment_method}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <input id="checkbox" type="checkbox" class="@error('checkbox') is-invalid @enderror" name="checkbox" value="{{ old('checkbox') }}" required autocomplete="checkbox" autofocus>
                            <label>Do you agree to our <a href="{{ route('terms') }}">Terms & Conditions</a></label><br/><br/>
                            @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" name="purchase" class="btn btn-primary">Purchase</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
