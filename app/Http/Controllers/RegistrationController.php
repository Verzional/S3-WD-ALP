<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::all();

        return view('registrations.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'level' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'score' => 'nullable|numeric|min:0|max:100',
            'rankPercentile' => 'nullable|numeric|min:0|max:100',
            'event_id' => 'required|exists:events,id',
            'student_id' => 'required|exists:students,id',
            'school_id' => 'required|exists:schools,id',
            'companion_id' => 'required|exists:companions,id',
            'category_id' => 'required|exists:categories,id',
            'schedule_id' => 'required|exists:schedules,id'
        ]);

        $registration = Registration::create($validated);

        return redirect()->route('registrations.index')->with('success', 'Registration created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        return view('registrations.show', compact('registration'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        return view('registrations.edit', compact('registration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        $validated = $request->validate([
            'level' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'score' => 'nullable|numeric|min:0|max:100',
            'rankPercentile' => 'nullable|numeric|min:0|max:100',
            'event_id' => 'required|exists:events,id',
            'student_id' => 'required|exists:students,id',
            'school_id' => 'required|exists:schools,id',
            'companion_id' => 'required|exists:companions,id',
            'category_id' => 'required|exists:categories,id',
            'schedule_id' => 'required|exists:schedules,id'
        ]);

        $registration->update($validated);

        return redirect()->route('registrations.index')->with('success', 'Registration updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        $registration->delete();

        return redirect()->route('registrations.index')->with('success', 'Registration deleted successfully.');
    }
}
