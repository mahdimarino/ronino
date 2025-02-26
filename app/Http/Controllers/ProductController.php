<?php

namespace App\Http\Controllers;

use App\Models\Gsm;
use App\Models\Size;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function search(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('tags');

        // Search for products where tags match the query
        $products = Product::where('tags', 'LIKE', "%{$query}%")->get();

        return view('dashboard.products.search', compact('products'));
    }

    public function tagged(Request $request)
    {
        // Get the tag from the request
        $query = $request->input('tags');

        // Search for products where tags match the query
        $products = Product::where('tags', 'LIKE', "%{$query}%")->get();

        return view('tagged', compact('products'));
    }

    public function home()
    {
        return view('home');
    }

    public function catalog()
    {
        // Fetch all blogs ordered by creation date, latest first
        $products = Product::orderBy('created_at', 'desc')->get();

        // Pass the blogs to the view
        return view('catalog', compact('products'));
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
            'prix' => 'required|integer',
            'product_code' => 'required|string|max:255|unique:products,product_code',
            'category_id' => 'required|exists:categories,id',
            'gsm_id' => 'required|exists:gsms,id',
            'description' => 'required|string',
            'status' => 'required|string',
            'tags' => 'nullable|string',
            // 'color_id' => 'required|exists:colors,id',
            // 'quantity'=> 'required|integer'
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        // Process tags
        $tags = $request->input('tags');
        if ($tags) {
            // Split tags by comma, trim spaces, and remove duplicates
            $tags = collect(explode(',', $tags))
                ->map(function ($tag) {
                    return trim($tag); // Trim spaces
                })
                ->filter() // Remove empty values
                ->unique() // Remove duplicates
                ->implode(','); // Convert back to comma-separated string
        }

        // Create the product
        $product = Product::create([
            'title' => $validatedData['title'],
            'prix' => $validatedData['prix'],
            'product_code' => $validatedData['product_code'],
            'category_id' => $validatedData['category_id'],
            'gsm_id' => $validatedData['gsm_id'],
            'description' => $validatedData['description'],
            'status' => $validatedData['status'],
            'tags' => $tags,
        ]);
        // Handle multiple image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store the image in the storage/app/public/images directory
                $path = $image->store('public/images');

                // Create a new image record associated with the product
                $product->images()->create([
                    'image_path' => $path,
                ]);
            }
        }
        // Attach the color to the product with the quantity
        // $product->colors()->attach($validatedData['color_id'], ['quantity' => $validatedData['quantity']]);

        // Redirect to the products list or another page with a success message
        return redirect()->route('dashboard.products.index')->with('success', 'Product created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show', compact('product'));
    }

    public function product_page(string $id)
    {

        $product = Product::findOrFail($id);
        return view('products.product_page', compact('product'));
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
        $images = Image::all();
        $gsms = \App\Models\Gsm::all();


        return view('dashboard.products.edit', compact('product', 'categories', 'colors', 'sizes', 'images', 'gsms'));
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
            'gsm_id' => 'required|exists:categories,id',
            'prix' => 'required|integer',
            'description' => 'required|string',
            'delete_images' => 'nullable|array',
            'delete_images.*' => 'exists:images,id',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'title' => $validatedData['title'],
            'product_code' => $validatedData['product_code'],
            'category_id' => $validatedData['category_id'],
            'gsm_id' => $validatedData['gsm_id'],
            'prix' => $validatedData['prix'],
            'description' => $validatedData['description'],
        ]);

        $product->colors()->detach();

        foreach ($request->color as $index => $colorId) {
            $product->colors()->attach($colorId, [
                'size_id' => $request->size[$index],
                'quantity' => $request->quantity[$index],
                'price' => $request->price[$index],

            ]);
        }

        // Delete selected images
        if (!empty($validatedData['delete_images'])) {
            foreach ($validatedData['delete_images'] as $imageId) {
                $image = Image::findOrFail($imageId);
                // Delete the image file from storage
                Storage::delete($image->image_path);
                // Delete the image record from the database
                $image->delete();
            }
        }

        // Upload and associate new images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store the image in the storage/app/public/images directory
                $path = $image->store('public/images');

                // Create a new image record associated with the product
                $product->images()->create([
                    'image_path' => $path,
                ]);
            }
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
