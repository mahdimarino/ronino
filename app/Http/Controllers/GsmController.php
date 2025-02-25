<?php

namespace App\Http\Controllers;

use App\Models\Gsm;
use Illuminate\Http\Request;

class GsmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all blogs ordered by creation date, latest first
        $gsms = Gsm::orderBy('created_at', 'desc')->get();

        // Pass the blogs to the view
        return view('dashboard.gsms.index', compact('gsms'));
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
            'name' => 'required|string|max:255', // Ensure the name is unique in the 'colors' table
        ]);
        try {

            $gsm = new \App\Models\Gsm();
            $gsm->name = $validatedData['name'];
            $gsm->save();
            return redirect()->route('dashboard.gsms.index')->with('success', 'Category added successfully!');
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
        $gsm = Gsm::findOrFail($id);
        if ($gsm) {
            $gsm->delete();
        }

        return back();
    }
}
