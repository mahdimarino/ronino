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

<div class="table-responsive table-sidebar">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Product Id</th>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Size</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if (is_array($order->cart_items) && count($order->cart_items) > 0)
            @foreach ($order->cart_items as $item)
            <tr>
                <td scope="row">
                    <a href="#">{{ $item['product_id'] ?? 'N/A' }}</a>
                </td>
                <td>
                    @if (isset($item['image']))
                    <img src="{{ $item['image'] }}" alt="Product Image" width="50">
                    @else
                    No Image
                    @endif
                </td>
                <td>{{ $item['title'] ?? 'N/A' }}</td>
                <td>{{ $item['size'] ?? 'N/A' }}</td>
                <td>{{ $item['quantity'] ?? 'N/A' }}</td>
                <td>${{ $item['prix']*$item['quantity'] ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('dashboard.orders.show', ['id' => $order->id]) }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"></i> View Items
                    </a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="7" class="text-center">No items found in this order.</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection