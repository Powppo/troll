@extends('home')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Press+Start+2P&family=Share+Tech+Mono&display=swap" rel="stylesheet">


<!-- Styles -->
<link href="{{ asset('css/feedback.css') }}" rel="stylesheet">
<div class="image-grid">
    <div class="contact-wrap w-100 p-md-5 p-4">
    <h3 class="title">Upload Offer!</h3>
    <div id="form-message-warning" class="mb-4"></div>
    <div id="form-message-success" class="mb-4">
    </div>
    <form method="POST" action="{{ route('upload_offer') }}" enctype="multipart/form-data">
        @csrf
    <div class="row">

    <div class="col-md-12">
        <div class="form-group">
<<<<<<< HEAD
            <input type="text" class="form-control" name="category" placeholder="Category">
        </div>
=======
        <select name="category" id="category" class="form-control">
          <option selected>Category...</option>
          <option>Keyboard</option>
          <option>Mouse</option>
          <option>Audio</option>
          <option>Monitor</option>
          <option>Others</option>
        </select>
      </div>
>>>>>>> ae28fb445b050e929a4e72b6e9c9061076574a41
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="owner"  placeholder="Owner">
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
<<<<<<< HEAD
            <input type="text" class="form-control" name="quantity" placeholder="Quantity">
        </div>
=======
        <select name="quantity" id="quantity" class="form-control">
          <option selected>Quantity...</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
>>>>>>> ae28fb445b050e929a4e72b6e9c9061076574a41
    </div>
    

    <div class="col-md-12">
        <div class="form-group">
<<<<<<< HEAD
            <input type="text" class="form-control" name="country"  placeholder="Country">
=======
            <input type="text" class="form-control" name="contact" id="contact" placeholder="Contact">
>>>>>>> ae28fb445b050e929a4e72b6e9c9061076574a41
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
<<<<<<< HEAD
            <input type="text" class="form-control" name="city" placeholder="City">
        </div>
=======
        <select name="country" id="country" class="form-control">
          <option selected>Country...</option>
          <option>Indonesia</option>
          <option>Singapore</option>
          <option>Malaysia</option>
        </select>
      </div>
>>>>>>> ae28fb445b050e929a4e72b6e9c9061076574a41
    </div>

    <div class="col-md-12">
        <div class="form-group">
<<<<<<< HEAD
            <input type="text" class="form-control" name="contact" placeholder="Contact">
        </div>
=======
        <select name="city" id="city" class="form-control">
          <option selected>City...</option>
          <option>Malang</option>
          <option>Jakarta</option>
          <option>Singapore</option>
          <option>Bandung</option>
          <option>Kuala Lumpur</option>
          <option>Malacca</option>
        </select>
      </div>
>>>>>>> ae28fb445b050e929a4e72b6e9c9061076574a41
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <input type="file" name="image" id="" class="form-control">
        </div>
    </div>

    <div class="col-md-12">
    <div class="form-group">
    <input type="submit" value="Upload" class=" submit btn btn-dark">
        
        @error('category')
            <div class="alert alert-light">Category field Required</div>
                @enderror
        @error('owner')
            <div class="alert alert-light">Owner field Required</div>
                @enderror
        @error('quantity')
            <div class="alert alert-light">Quantity field Required</div>
                @enderror
        @error('country')
            <div class="alert alert-light">Country field Required</div>
                @enderror
        @error('contact')
            <div class="alert alert-light">Contact field Required</div>
                @enderror
        @error('path_offer')
            <div class="alert alert-light">File_Offer field Required</div>
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