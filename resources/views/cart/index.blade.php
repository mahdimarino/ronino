@extends('dashboard.layaout.app')

@section('content-title')
Shopping Cart
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $key => $item)
                <tr>
                    <td>
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" style="width: 100px;"></td>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['size'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>${{ $item['price'] * $item['quantity'] }}</td>
                    <td>
                        <a href="{{ route('cart.remove', $key) }}" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Display Total Amount -->
        <div class="text-right">
            <h4>Total Amount: ${{ array_reduce($cart, function($carry, $item) {
                return $carry + ($item['price'] * $item['quantity']);
                }, 0) }}</h4>
        </div>
<a href="{{ route('cart.clear') }}" class="btn btn-warning">Clear Cart</a>
        <!-- Customer Information Form -->
        <form action="{{ route('cart.submit') }}"  method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit Order</button>
        </form>
    </div>
</div>
@endsection