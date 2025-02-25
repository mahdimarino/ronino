@extends('dashboard.layaout.app')

@section('content-title')

Orders List
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
                <th scope="col">Order Id</th>
                <th scope="col">name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone-no</th>
                <th scope="col">Address</th>
                <th scope="col">Total Price</th>
                <th scope="col">Items</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td scope="row"><a href="">{{
                        $order->id }}</a></td>
                <td>{{ $order->name}}</td>
                <td>{{ $order->email}}</td>
                <td>{{ $order->mobile}}</td>
                <td>{{ $order->address}}</td>
                <td>{{ $order->total_amount}}</td>
                <td>{{ $order->cart_items}}</td>



               
                <td>
                     <a href="{{ route('dashboard.orders.show', ['id' => $order->id]) }}" class="btn btn-sm btn-primary">
                        <i class="fa fa-eye"></i> View Items
                    </a> 
                    {{-- <a href=""
                        class="btn btn-sm btn-success">
                        <i class="fa fa-pen"></i> Details
                    </a> --}}
                    

                    {{-- <form style="display: inline-block" action="{{ route('product.destroy', ['id' => $product->id ])}}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to remove the Product: {{ $product->name }} ?');">
                            <i class="fa fa-trash"></i> Delete
                        </button>
                    </form> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection