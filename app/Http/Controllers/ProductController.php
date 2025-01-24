<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}


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

        // Validate incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'product_code' => 'required|string|max:255',
            'color_id' => 'required|exists:colors,id',
            'category_id' => 'required|exists:categories,id',
            'partwear_id' => 'required|exists:partwears,id',
            'quantity' => 'required|integer|min:1',
            'gsm_id' => 'nullable|array',
            'size_id' => 'nullable|array',

        ]);

        // Create the product
        $product = new \App\Models\Product();
        $product->title = $validatedData['title'];
        $product->product_code = $validatedData['product_code'];
        $product->color_id = $validatedData['color_id'];
        $product->category_id = $validatedData['category_id'];
        $product->partwear_id = $validatedData['partwear_id'];
        $product->quantity = $validatedData['quantity'];
        $product->save();

        // Attach many-to-many relationships for sizes and gsms
        if (!empty($validatedData['gsm_id'])) {
            $product->gsms()->attach($validatedData['gsm_id']);
        }

        if (!empty($validatedData['size_id'])) {
            $product->sizes()->attach($validatedData['size_id']);
        }


        // Redirect to the products list or another page with a success message
        return redirect()->route('dashboard.blogs.blog-form')->with('success', 'Product created successfully!');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
