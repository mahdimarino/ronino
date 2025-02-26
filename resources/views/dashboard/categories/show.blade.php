@extends('dashboard.layaout.app')
@section('content-title')

<h1>Category: {{ $category->name }}</h1>
@endsection

@section('content')

   
   
<br>
    <h2>Products in this Category</h2>
    @if ($category->products->isEmpty())
    <p>No products available in this category.</p>
    @else
   <div class="table-responsive table-sideborder">
   <table class="table">
    <thead>
        <tr>
            <th scope="col">Product Id</th>
            <th scope="col">Product Title</th>
            <th scope="col">Product code</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category->products as $product)
        <tr>
            <td scope="row"><a href="">{{
                    $product->id }}</a></td>
            <td>{{ $product->title}}</td>
            <td>{{ $product->product_code}}</td>
            <td>{{ $product->category->name}}</td>
            <td>
                <a class="btn btn-sm btn-primary">
                    <i class="fa fa-eye"></i> View
                </a>
                <a href="{{ route('dashboard.products.edit', ['id' => $product->id ])}}" class="btn btn-sm btn-success">
                    <i class="fa fa-pen"></i> Edit
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
    @endif

@endsection