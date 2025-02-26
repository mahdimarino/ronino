<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { {
            // Fetch all blogs ordered by creation date, latest first
            $categories = Category::orderBy('created_at', 'desc')->get();

            // Pass the blogs to the view
            return view('dashboard.categories.index', compact('categories'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
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

            $category = new \App\Models\Category();
            $category->name = $validatedData['name'];
            $category->save();
            return redirect()->route('dashboard.categories.index')->with('success', 'Category added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to save the color. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         // Find the category by ID
    $category = Category::with('products')->findOrFail($id);

    // Pass the category and its products to the view
    return view('dashboard.categories.show', compact('category'));
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
        $category = Category::findOrFail($id);
        if ($category) {
            $category->delete();
        }

        return back();
    }
}
