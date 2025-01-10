<?php

namespace App\Http\Controllers;

use App\Models\Event;
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
}
