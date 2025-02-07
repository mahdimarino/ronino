<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Add a product to the cart
    public function add(Request $request, Product $product)
    {
        // Validate the request
        $request->validate([
            'size' => 'required|string',
        ]);

        // Get the current cart from the session (or initialize an empty array)
        $cart = session()->get('cart', []);

        // Check if the product is already in the cart
        $key = $product->id . '-' . $request->size; // Unique key for product + size combination
        if (isset($cart[$key])) {
            // If the product is already in the cart, update the quantity
            $cart[$key]['quantity'] += 1;
        } else {
            // If the product is not in the cart, add it
            $cart[$key] = [
                'product_id' => $product->id,
                'title' => $product->title,
                'price' => $product->price,
                'size' => $request->size,
                'quantity' => 1,
                'image' => $product->images->first()->url,
            ];
        }

        // Save the updated cart back to the session
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    // View the cart
    public function index()
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Remove an item from the cart
    public function remove($key)
    {
        // Get the cart from the session
        $cart = session()->get('cart', []);

        // Remove the item with the specified key
        if (isset($cart[$key])) {
            unset($cart[$key]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart!');
    }
    public function clear()
    {
        // Clear the cart from the session
        session()->forget('cart');
        return redirect()->back()->with('success', 'Cart cleared!');
    }

    public function submit(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|string',
            'address' => 'required|string',
        ]);

        // Get the cart from the session
        $cart = session()->get('cart', []);

        // Calculate the total amount
        $totalAmount = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        // Save the order to the database
        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'address' => $request->address,
            'total_amount' => $totalAmount,
            'cart_items' => json_encode($cart), // Store cart items as JSON
        ]);

        // Clear the cart from the session
        session()->forget('cart');

        // Redirect with a success message
        return redirect()->route('cart.index')->with('success', 'Order submitted successfully!');
    }
}