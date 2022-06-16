@extends('home')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Press+Start+2P&family=Share+Tech+Mono&display=swap" rel="stylesheet">


<!-- Styles -->
<link href="{{ asset('css/feedback.css') }}" rel="stylesheet">
<div class="image-grid">
    <div class="contact-wrap w-100 p-md-5 p-4">
    <h3 class="title">Upload Category!</h3>
    <div id="form-message-warning" class="mb-4"></div>
    <div id="form-message-success" class="mb-4">
    </div>
    <form method="POST" action="{{ route('upload_ctg') }}" enctype="multipart/form-data">
        @csrf
    <div class="row">
{{-- 
    <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="category" placeholder="Category">
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="owner"  placeholder="Owner">
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="quantity" placeholder="Quantity">
        </div>
    </div>
    
    <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="country"  placeholder="Country">
        </div>
    </div> --}}

    {{-- <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="City">
        </div>
    </div> --}}
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Category Name</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="form-group">
            <label for="example-text-input" class="form-control-label">Slug</label>
            <input class="form-control" type="text" name="slug" id="slug">
        </div>

    {{-- <div class="col-md-12">
        <div class="form-group">
            <input type="text" class="form-control" name="contact" placeholder="Contact">
        </div>
    </div> --}}
{{-- 
    <div class="col-md-12">
        <div class="form-group">
            <input type="file" name="image" id="" class="form-control">
        </div>
    </div> --}}

    <div class="form-group">
    <input type="submit" value="Upload" class=" submit btn btn-dark">
        
        {{-- @error('category') --}}
            {{-- <div class="alert alert-light">Category field Required</div>
                @enderror
        @error('owner')
            <div class="alert alert-light">Owner field Required</div>
                @enderror
        @error('quantity')
            <div class="alert alert-light">Quantity field Required</div>
                @enderror
        @error('country')
            <div class="alert alert-light">Country field Required</div>
                @enderror --}}
        @error('name')
            <div class="alert alert-light">Name field Required</div>
                @enderror
        @error('slug')
            <div class="alert alert-light">Slug field Required</div>
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