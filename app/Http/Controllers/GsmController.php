<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.gsms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'value' => 'required|string|max:255', // Ensure the name is unique in the 'colors' table
        ]);
        try {

            $gsm = new \App\Models\Gsm();
            $gsm->value = $validatedData['value'];
            $gsm->save();
            return redirect()->route('dashboard.blogs.blog-form')->with('success', 'Category added successfully!');
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
        //
    }
}
