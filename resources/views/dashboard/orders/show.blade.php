@extends('dashboard.layaout.app')

@section('content-title')

{{ $order->name }}
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
                <th scope="col">title</th>
                <th scope="col">size</th>
                <th scope="col">quantity</th>
                <th scope="col">Price</th>               
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
           
            <tr>
                <td scope="row"><a href="">{{
                        $order->product_id }}</a></td>
                        <td>{{ $order->iamge}}</td>
                <td>{{ $order->title}}</td>
                <td>{{ $order->size}}</td>
                <td>{{ $order->quantity}}</td>
                <td>{{ $order->Price}}</td>
                




                <td>
                    <a href="{{ route('dashboard.orders.show', ['id' => $order->id]) }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"></i> View Items
                    </a>
                    {{-- <a href="" class="btn btn-sm btn-success">
                        <i class="fa fa-pen"></i> Details
                    </a> --}}


                    {{-- <form style="display: inline-block"
                        action="{{ route('product.destroy', ['id' => $product->id ])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to remove the Product: {{ $product->name }} ?');">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form> --}}
                </td>
            </tr>
           
        </tbody>
    </table>
</div>

@endsection