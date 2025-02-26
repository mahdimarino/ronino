@extends('web_layout')
@section('content')

<!-- Cart contant start -->
<div class="contant">
    <div id="banner-part" class="banner inner-banner">
        <div class="container">
            <div class="bread-crumb-main">
                <h1 class="banner-title">Shopping Cart</h1>
                <div class="breadcrumb">
                    <ul class="inline">
                        <li><a href="index.html">Home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ptb-100">
        <div class="container">
            <div class="cart-item-table commun-table">
                <div class="table-responsive">
                    <table class="table border mb-0">
                        <thead>
                            <tr>
                                <th class="align-left">Product</th>
                                <th class="align-left">Product Name</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $key => $item)
                            <tr>
                                <td class="align-left">
                                    {{-- <a href="{{ route('products.product_page', ['id' => $product->id]) }}"> --}}
                                        <a href="">
                                            <div class="product-image">
                                                <img alt="Eshoper" src="{{ $item['image'] }}">
                                            </div>
                                        </a>
                                </td>
                                <td class="align-left">
                                    <div class="product-title">
                                        <a href="product-page.html">{{ $item['title'] }}</a>
                                    </div>
                                </td>
                                <td>
                                    <ul>
                                        <li>
                                            <div class="base-price price-box">
                                                <span class="price">{{ $item['size'] }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="input-box">
                                        <input type="text" disabled  name="quantity" value="{{ $item['quantity'] }}"
                                            class="quantity-input" data-price="{{ $item['prix'] }}">  <p></p>                                     
                                    </div>
                                </td>
                                <td>
                                    <div class="total-price price-box">
                                        <span class="price total-price-span">{{ $item['prix'] * $item['quantity']
                                            }} AED</span>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('cart.remove', $key) }}" class="btn small btn-color">
                                        <i title="Remove Item From Cart" data-id="100"
                                            class="fa fa-trash cart-remove-item"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="mtb-30">
                <div class="row">
                    <div class="col-md-6 mb-sm-20">
                        <div class="estimate">
                            <div class="heading-part mb-20">
                                <h3 class="sub-heading">Estimate shipping and tax</h3>
                            </div>
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-box mb-20">
                                            <select id="country_id" class="full">
                                                <option selected="" value="">Select Country</option>
                                                <option value="1">India</option>
                                                <option value="2">China</option>
                                                <option value="3">Pakistan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box mb-20">
                                            <select id="state_id" class="full">
                                                <option selected="" value="1">Select State/Province</option>
                                                <option value="2">---</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box mb-20">
                                            <select id="city_id" class="full">
                                                <option selected="" value="1">Select City</option>
                                                <option value="2">---</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-total-table commun-table">
                            <div class="table-responsive">
                                <table class="table border">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Cart Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Item(s) Subtotal</td>
                                            <td>
                                                <div class="price-box">
                                                    <span class="price" id="total-cart-amount">{{ array_reduce($cart,
                                                        function($carry, $item) {
                                                        return $carry + ($item['prix'] * $item['quantity']);
                                                        }, 0) }} AED</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>
                                                <div class="price-box">
                                                    <span class="price">0.00 AED</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Amount Payable</b></td>
                                            <td>
                                                <div class="price-box">
                                                    <span class="price" id="total-amount"><b>{{ array_reduce($cart,
                                                            function($carry,
                                                            $item) {
                                                            return $carry + ($item['prix'] * $item['quantity']);
                                                            }, 0) }} AED</b></span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-30">
                            <a href="{{route('catalog')}}" class="btn btn-color">
                                <i class="fa fa-angle-left"></i><span>Continue Shopping</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mt-30 right-side float-none-sm">
                            <a href="{{ route('cart.clear') }}" class="btn btn-color">Clear Cart</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="checkout-part ptb-100">
                <div class="container">

                    <form class="main-form" action="{{ route('cart.submit') }}" method="POST">
                        @csrf
                        <input type="hidden" name="order_number" id="order-num" value="">
                        <input type="hidden" name="total_amount" value="{{
                                                                array_reduce($cart, function($carry,
                                                                $item) {
                                                                return $carry + ($item['prix'] * $item['quantity']);
                                                                }, 0) }}" id="la-tout">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="mb-md-30">
                                    <div class="mb-60">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="heading-part mb-30 mb-sm-20">
                                                    <h3>Billing Details</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    <label class="text-dark " for="full-name">Full Name*</label>
                                                    <input id="full-name" name="name" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div>
                                                    <label class="text-dark mt-1" for="email">Email</label>
                                                    <input id="email" name="email" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div>
                                                    <label class="text-dark mt-1" for="phone-no">Phone No*</label>
                                                    <input id="phone-no" name="mobile" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div>
                                                    <label class="text-dark mt-1" for="address">Address*</label>
                                                    <input id="address" name="address" type="text" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label class="text-dark mt-1" for="address">Notes for the Store</label>
                                                <textarea name="notes" id="" cols="10" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>





                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="heading-part mb-30 mb-sm-20">
                                    <h3>Your order</h3>
                                </div>
                                <div class="row">

                                    <div class="col-12">
                                        <h4>Order Notes</h4>
                                        <div class="notes p-4">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority
                                                have suffered alteration in some form, by injected humour, or randomised
                                                words
                                                which don't look even slightly believable. If you are going to use a
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="complete-order-detail commun-table gray-bg mb-30">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <tbody>
                                                <tr>
                                                    <td><b>Order Places :</b></td>
                                                    <td>{{ \Carbon\Carbon::now()->format('d F Y') }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Total :</b></td>
                                                    <td>
                                                        <div class="price-box"> <span id="total-prix" class="price">{{
                                                                array_reduce($cart, function($carry,
                                                                $item) {
                                                                return $carry + ($item['prix'] * $item['quantity']);
                                                                }, 0) }} AED</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b>Payment :</b></td>
                                                    <td>COD</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Order No. :</b></td>
                                                    <td name="order_number" id="order-number"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <button type="submit" class="btn full btn-color">Place order</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            {{-- <div class="mt-30">
                <div class="row">
                    <div class="col-12">
                        <div class="right-side float-none-xs">
                            <a href="checkout.html" class="btn btn-color">Proceed to checkout
                                <span><i class="fa fa-angle-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Cart contant end -->

{{-- <div class="row">
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
                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" style="width: 100px;">
                    </td>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['size'] }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>${{ $item['prix'] * $item['quantity'] }}</td>
                    <td>
                        <a href="{{ route('cart.remove', $key) }}" class="btn btn-danger">Remove</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Display Total Amount -->

        <a href="{{ route('cart.clear') }}" class="btn btn-warning">Clear Cart</a>
        <!-- Customer Information Form -->
        <form action="{{ route('cart.submit') }}" method="POST">
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
</div> --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
const quantityInputs = document.querySelectorAll('.quantity-input');

// Function to calculate and update the total cart amount
function updateTotalCartAmount() {
let totalCartAmount = 0;

quantityInputs.forEach(function(quantityInput) {
const price = parseFloat(quantityInput.getAttribute('data-price'));
const quantity = parseFloat(quantityInput.value);
totalCartAmount += price * quantity;
});

// Update the total cart amount displayed on the page
document.getElementById('total-cart-amount').textContent = totalCartAmount.toFixed(2);
document.getElementById('total-amount').textContent = totalCartAmount.toFixed(2);
document.getElementById('total-prix').textContent = totalCartAmount.toFixed(2);
document.getElementById('la-tout').value = totalCartAmount.toFixed(2);

}

// Attach event listeners to all quantity inputs
quantityInputs.forEach(function(quantityInput) {
const totalPriceSpan = quantityInput.closest('tr').querySelector('.total-price-span');

quantityInput.addEventListener('input', function() {
const price = parseFloat(quantityInput.getAttribute('data-price'));
const quantity = parseFloat(quantityInput.value);
const totalPrice = price * quantity;

// Update the total price for this item
totalPriceSpan.textContent = totalPrice.toFixed(2);

// Update the total cart amount
updateTotalCartAmount();
});
});
});
</script>
<script>
    function generateOrderNumber() {
    // Get the current date as YYYYMMDD
    const date = new Date().toISOString().slice(0, 10).replace(/-/g, '');
    
    // Generate a random 2-digit number
    const random = Math.floor(Math.random() * 100).toString().padStart(2, '0');
    
    // Combine date and random number
    return `${date}-${random}`;
    }
    
    // Example usage
    const orderNumber = generateOrderNumber();
    console.log(orderNumber); // Example output: "20231025-42"
    document.getElementById('order-number').textContent = '#'+ orderNumber;
    document.getElementById('order-num').value = '#'+ orderNumber;;
    
</script>

@endsection