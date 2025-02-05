@extends('dashboard.layaout.app')
@section('content-title')

<h1>Color: {{ $color->name }}</h1>
@endsection

@section('content')



<h2>Related Products:</h2>
<ul>
    @foreach ($color->products as $product)
    <li>{{ $product->title }}</li>
    @foreach($product->images as $image)
    <div style="display: inline-block; margin-right: 10px;">
        <img src="{{ $image->url }}" alt="Product Image" width="100">
        
       
    </div>
    @endforeach
    @endforeach
</ul>
@endsection