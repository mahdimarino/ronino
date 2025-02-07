@extends('dashboard.layaout.app')

@section('content-title')

Catalog
@endsection

@section('content')
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-3">
        <div class="card">
            <img src="{{ $product->images->first()->url }}" class="card-img-top" alt="{{ $product->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <p class="card-text">{{ $product->price }}</p>
                 <a href="{{ route('dashboard.products.show', ['id' => $product->id]) }}" class="btn btn-primary">View</a> 
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
