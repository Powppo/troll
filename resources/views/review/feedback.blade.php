@extends('home')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Press+Start+2P&family=Share+Tech+Mono&display=swap" rel="stylesheet">


<!-- Styles -->
<link href="{{ asset('css/feedback.css') }}" rel="stylesheet">
<div class="image-grid">
    <div class="contact-wrap w-100 p-md-5 p-4">
    <h3 class="title">Get in touch with TROLL!</h3>
    <div id="form-message-warning" class="mb-4"></div>
    <div id="form-message-success" class="mb-4">
    </div>
    <form method="POST" action="{{ route('createFeedback') }}">
        @csrf
    <div class="row">
    <div class="col-md-12">
    <div class="form-group">
    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <input type="submit" value="Send Message" class=" submit btn btn-dark">


    @error('name')
    <div class="alert alert-light">Name field Required</div>
    @enderror
    @error('subject')
    <div class="alert alert-light">Subject field Required</div>
    @enderror
    @error('message')
    <div class="alert alert-light">Message field Required</div>
    @enderror
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    </div>
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection