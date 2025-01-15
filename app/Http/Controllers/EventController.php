<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function detailEvent(Request $request, $id){
        $search = $request->input('seacrh');
        $school = $request->input('school');
        $registrations = Registration::where(function ($query) use ($search, $school) {
            if ($search) {
                $query->whereHas('student', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })->orWhereHas('school', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })->orWhereHas('category', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
            }

            if ($school){
                $query->whereHas('school', function ($q) use ($school) {
                    $q->where('id', $school);
                });
            }
        })->paginate(8);
        $schools = DB::table('schools')
            ->select('id', DB::raw('CONCAT(name, " - ", city) AS school_formatted'))
            ->orderBy(DB::raw('CONCAT(name, " - ", city)'), 'asc')
            ->get();

        return view('admin.AdminDetailEvent',[
            'title' => 'Event Information',
            'event' => Event::dataWithID($id),
            'registrations' => $registrations,
            'schools' => $schools
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
