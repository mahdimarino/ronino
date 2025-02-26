<?php

namespace App\Http\Controllers;

use App\Models\Partwear;
use Illuminate\Http\Request;

class PartwearsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all blogs ordered by creation date, latest first
        $partwears = Partwear::orderBy('created_at', 'desc')->get();

        // Pass the blogs to the view
        return view('dashboard.partwears.index', compact('partwears'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.partwears.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255', // Ensure the name is unique in the 'partwears' table
        ]);

        try {

            $partwear = new \App\Models\Partwear();
            $partwear->name = $validatedData['name'];
            $partwear->save();


            return redirect()->route('dashboard.partwears.index')->with('success', 'Partwear added successfully!');
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
        $partwear = Partwear::findOrFail($id);
        if ($partwear) {
            $partwear->delete();
        }

        return back();
    }
}
