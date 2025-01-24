<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::orderBy('created_at', 'desc')->get();

        // Pass the blogs to the view
        return view('dashboard.sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sizes.create');
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

            $size = new \App\Models\Size();
            $size->name = $validatedData['name'];
            $size->save();
            return redirect()->route('dashboard.sizes.index')->with('success', 'Size added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to save the color. Please try again.');
        }
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
        $size = Size::findOrFail($id);
        if ($size) {
            $size->delete();
        }

        return back();
    }
}
