<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(10);
        return view('admin.AdminEvents', [
            'title' => 'Events',
            'events' => $events
        ]);
    }

    public function detailEvent($id)
    {
        return view('admin.AdminDetailEvent', [
            'title' => 'Event Information',
            'event' => Event::dataWithID($id)
        ]);
    }

    public function editEvent($id)
    {
        return view('admin.AdminEditEvent', [
            'title' => 'Edit Event',
            'event' => Event::dataWithID($id)
        ]);
    }

    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'year' => 'required|integer',
            'description' => 'required|string',
            'scheduleDescription' => 'required|string'
        ]);

        $event = Event::create($validated);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'year' => 'required|integer',
            'description' => 'required|string',
            'scheduleDescription' => 'required|string'
        ]);

        $event->update($validated);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }

    /**
     * Export the registrations for a specific event as a CSV file.
     */
    public function exportCSV(Request $request)
    {
        $eventId = $request->input('event_id');

        if (!$eventId) {
            return back()->with('error', 'No event ID provided');
        }

        $registrations = Registration::with(['event', 'student', 'school', 'companion', 'category', 'schedule'])
            ->where('event_id', $eventId)
            ->get();

        if ($registrations->isEmpty()) {
            return back()->with('error', 'No registrations found for this event');
        }

        $filename = "registrations_event_{$eventId}.csv";

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        return response()->stream(function () use ($registrations) {
            $handle = fopen('php://output', 'w');

            // Write CSV header
            fputcsv($handle, [
                'ID',
                'Level',
                'Grade',
                'Language',
                'Score',
                'Rank Percentile',
                'Event',
                'Student Name',
                'School Name',
                'Companion Name',
                'Category Name',
                'Session Name',
            ]);

            // Write data rows
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
        }, 200, $headers);
    }
}
