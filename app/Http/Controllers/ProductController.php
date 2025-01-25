<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all blogs ordered by creation date, latest first
        $products = Product::orderBy('created_at', 'desc')->get();

        // Pass the blogs to the view
        return view('dashboard.products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $colors = \App\Models\Color::all(); // Fetch all colors
        $categories = \App\Models\Category::all();
        $partwears = \App\Models\Partwear::all();
        $gsms = \App\Models\Gsm::all();
        $sizes = \App\Models\Size::all();



        return view('dashboard.products.create', compact('colors', 'categories', 'partwears', 'gsms', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'product_code' => 'required|string|max:255|unique:products,product_code',
            'category_id' => 'required|exists:categories,id',
            // 'color_id' => 'required|exists:colors,id',
            // 'quantity'=> 'required|integer'


        ]);
        // Create the product
        $product = Product::create([
            'title' => $validatedData['title'],
            'product_code' => $validatedData['product_code'],
            'category_id' => $validatedData['category_id'],
        ]);

        // Attach the color to the product with the quantity
        // $product->colors()->attach($validatedData['color_id'], ['quantity' => $validatedData['quantity']]);

        // Redirect to the products list or another page with a success message
        return redirect()->route('dashboard.products.index')->with('success', 'Product created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();

        return view('dashboard.products.edit', compact('product', 'categories', 'colors', 'sizes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'product_code' => 'required|string|max:255|unique:products,product_code,' . $id,
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'title' => $validatedData['title'],
            'product_code' => $validatedData['product_code'],
            'category_id' => $validatedData['category_id'],
        ]);

        $product->colors()->detach();

        foreach ($request->color as $index => $colorId) {
            $product->colors()->attach($colorId, [
                'size_id' => $request->size[$index],
                'quantity' => $request->quantity[$index],
                'price' => $request->price[$index],

            ]);
        }


        return redirect()->route('dashboard.products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        if ($product) {
            $product->delete();
        }

        return back();
    }
}
