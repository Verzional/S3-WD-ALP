<?php

namespace App\Http\Controllers;

use App\Models\Companion;
use Illuminate\Http\Request;

class CompanionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companions = Companion::all();

        return view('companions.index', compact('companions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('companions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'companionName' => 'required|string|max:255',
            'companionStatus' => 'required|string|max:255',
            'companionContact' => 'required|numeric',
            'school_id' => 'nullable|exists:schools,id'
        ]);

        $validated['currentlyActive'] = true;
           
        $companion = Companion::create([
            'name' => $validated['companionName'],
            'status' => $validated['companionStatus'],
            'contact' => $validated['companionContact'],
            'currentlyActive' => $validated['currentlyActive'],
            'school_id' => $validated['school_id']
        ]);

        return $companion->id;
    }

    /**
     * Display the specified resource.
     */
    public function show(Companion $companion)
    {
        return view('companions.show', compact('companion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Companion $companion)
    {
        return view('companions.edit', compact('companion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Companion $companion)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'contact' => 'required|numeric',
            'currentlyActive' => 'required|boolean',
            'school_id' => 'exists:schools,id'
        ]);

        $companion->update($validated);

        return redirect()->route('companions.index')->with('success', 'Companion updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Companion $companion)
    {
        $companion->delete();

        return redirect()->route('companions.index')->with('success', 'Companion deleted successfully.');
    }
}