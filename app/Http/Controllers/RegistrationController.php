<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        $registrations = Registration::paginate(8);
            return view('admin.AdminParticipants',[
                'title' => 'Participants',
                'registrations' => $registrations
            ]);

        
    }

    public function companion(){
        $user = User::find(session('user'));
        $registrations = Registration::where('companion_id', '=',$user->account_id)->paginate(8);
            return view('companion.CompanionParticipants',[
                'title' => 'Participants',
                'registrations' => $registrations
            ]);

        
    }

    public function detailRegistration($registration_id){
            return view('admin.AdminDetailParticipant',[
                'title' => 'Participant Information',
                'registration' => Registration::dataWithID($registration_id)
            ]);

        
    }

    public function detailCompanionRegistration($registration_id){
        return view('companion.CompanionDetailParticipant',[
            'title' => 'Participant Information',
            'registration' => Registration::dataWithID($registration_id)
        ]);

    
}

    public function create()
    {
        return view('registrations.create');
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
    
}
