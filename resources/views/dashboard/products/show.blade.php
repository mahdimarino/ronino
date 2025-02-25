@extends('dashboard.layaout.app')

@section('content-title')

{{ $product->title }}
@endsection

@section('content')
@if (session('success'))
<div class="alert alert-success mt-2">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger mt-2">
    {{ session('error') }}
</div>
@endif
<div class="row">
    <div class="col-md-6">
        <img src="{{ $product->images->first()->url }}" class="img-fluid" alt="{{ $product->title }}">
    </div>
    <div class="col-md-6">
        <h1>{{ $product->title }}</h1>
        {{-- <p>{{ $product->description }}</p> --}}
        <p>{{ $product->price }}</p>
    <form action="{{ route('cart.add', $product->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="number" name="quantity" id="">
            <label for="size">Select Size:</label>
            <select class="form-control" id="size" name="size">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="extra-large">Extra Large</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add to Cart</button>
    </form>
        
    </div>
@endsection