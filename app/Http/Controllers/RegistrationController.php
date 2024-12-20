<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Registration;
use App\Models\Schedule;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::paginate(10);
        return view('AdminParticipants', [
            'title' => 'Participants',
            'registrations' => $registrations
        ]);
    }

    public function detailRegistration($registration_id)
    {
        return view('AdminDetailParticipant', [
            'title' => 'Participant Information',
            'registration' => Registration::dataWithID($registration_id)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schools = School::select(
            'id',
            DB::raw("CONCAT(name, ' - ', city) as school_formatted")
        )->get();
        $categories = Category::select(
            'id',
            DB::raw("CONCAT(name, ' (', description, ')') as category_formatted")
        )->get(
        );
        $schedules = Schedule::select(
            'id',
            DB::raw("CONCAT(name, ' - ', description) as schedule_formatted")
        )->get(
        );

        return view('Registration', compact('schools', 'categories', 'schedules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $companionId, $studentId)
    {
        $validated = $request->validate([
            'level' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
            'language' => 'required|string|max:255',
            'score' => 'nullable|numeric|min:0|max:100',
            'rankPercentile' => 'nullable|numeric|min:0|max:100',
            'school_id' => 'required|exists:schools,id',
            'category_id' => 'required|exists:categories,id',
            'schedule_id' => 'required|exists:schedules,id'
        ]);

        $validated['event_id'] = 1;
        $validated['companion_id'] = $companionId;
        $validated['student_id'] = $studentId;

        Registration::create($validated);

        return redirect()->route('registrations.create')->with('success', 'Registration created successfully.');
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

    /**
     * Export the registrations to a CSV file.
     */
    public function exportCSV()
    {
        $registrations = Registration::with(['event', 'student', 'school', 'companion', 'category', 'schedule'])->get();

        $filename = "registrations.csv";
        $handle = fopen($filename, 'w+');

        fputcsv($handle, [
            'ID',
            'Level',
            'Grade',
            'Language',
            'Score',
            'Rank Percentile',
            'Event Year',
            'Student Name',
            'School Name',
            'Companion Name',
            'Category Name',
            'Session Name'
        ]);

        foreach ($registrations as $registration) {
            fputcsv($handle, [
                $registration->id,
                $registration->level,
                $registration->grade,
                $registration->language,
                $registration->score,
                $registration->rankPercentile,
                $registration->event->year ?? 'N/A',
                $registration->student->name ?? 'N/A',
                $registration->school->name ?? 'N/A',
                $registration->companion->name ?? 'N/A',
                $registration->category->name ?? 'N/A',
                $registration->schedule->name ?? 'N/A',
            ]);
        }

        fclose($handle);

        $headers = [
            'Content-Type' => 'text/csv',
        ];

        return response()->download($filename, 'registrations.csv', $headers);
    }
}
