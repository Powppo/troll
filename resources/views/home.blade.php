@extends('layouts.app')

<!-- Styles -->
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Press+Start+2P&family=Share+Tech+Mono&display=swap" rel="stylesheet">

@section('content')
<div class="image-grid" >
    <h1 class="hometitle">WELCOME TO TROLL!</h1>
    <p class="lead"> Find desired items and Change Your Things from Trash to Gold!.</p>
    <hr class="my-4">
    <p class="addition">Click button below to know more / send Feedback about TROLL!</p>
    <p class="lead">
      <a class="btn btn-dark btn-lg" href="{{ route('feedback') }}" role="button" >Send Feedback</a>
      <a class="btn btn-dark btn-lg" href="{{ route('aboutus') }}" role="button" >Learn more</a>
    </p>
  </div>
  
@endsection
