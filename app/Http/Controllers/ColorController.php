<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all blogs ordered by creation date, latest first
        $colors = Color::orderBy('created_at', 'desc')->get();

        // Pass the blogs to the view
        return view('dashboard.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Ensure the name is unique in the 'colors' table
        ]);
        try {

            $color = new \App\Models\Color();
            $color->name = $validatedData['name'];
            $color->save();
            return redirect()->route('dashboard.colors.index')->with('success', 'Color added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to save the color. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch the color with its related products
        $color = Color::with('products')->findOrFail($id);
        $products = $color->products;
        // Or (when you don't have with('products'))
        // $products = $color->products()->get();

        // Pass the color to the view
        return view('dashboard.colors.show', compact('color'));
       // return view('dashboard.products.index', compact('products'));
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
        $color = Color::findOrFail($id);
        if ($color) {
            $color->delete();
        }

        return back();
    }
}
