@extends('dashboard.layaout.app')

@section('content-title')

Products
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
<div class="table-responsive table-sideborder">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product Id</th>
                <th scope="col">Image</th>
                <th scope="col">Product Title</th>
                <th scope="col">Product code</th>
                <th scope="col">GSM</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td scope="row"><a href="">{{
                        $product->id }}</a></td>
                <td>
                    @if ($product->images->isNotEmpty())
                   <a target="_blank" href="{{ $product->images->first()->url }}"> <img width="50" src="{{ $product->images->first()->url }}" alt="{{ $product->title }}"></a>
                    @else
                    <span>No Image</span>
                    @endif
                </td>
                
                
                <td>{{ $product->title}}</td>
                <td>{{ $product->product_code}}</td>
                <td>{{ $product->gsm ? $product->gsm->value : 'N/A' }}</td>
                <td>{{ $product->category->name}}</td>
                <td>
                    {{-- <a class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"></i> View
                    </a> --}}
                    <a href="{{ route('dashboard.products.edit', ['id' => $product->id ])}}"
                        class="btn btn-sm btn-success">
                        <i class="fa fa-pen"></i> Details
                    </a>

                    <form style="display: inline-block" action="{{ route('product.destroy', ['id' => $product->id ])}}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to remove the Product: {{ $product->name }} ?');">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection