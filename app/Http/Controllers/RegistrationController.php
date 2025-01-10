<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegistrationController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $registrations = Registration::where(function ($query) use ($search) {
            if ($search) {
                $query->whereHas('student', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })->orWhereHas('school', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })->orWhereHas('category', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
            }
        })->paginate(8);
            return view('admin.AdminParticipants',[
                'title' => 'Participants',
                'registrations' => $registrations
            ]);

        
    }

    public function companion(Request $request){
        $user = User::find(session('user'));
        $search = $request->input('search');

        $registrations = Registration::where('companion_id', $user->account_id)
        ->where(function ($query) use ($search) {
            if ($search) {
                $query->whereHas('student', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })->orWhereHas('school', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })->orWhereHas('category', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
            }
        })
        ->paginate(8);
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

    public function editRegistration($registration_id){
        $registration= Registration::dataWithID($registration_id);
        $categories = DB::table('categories')
            ->select('id', DB::raw('CONCAT(name, " (", description, ")") AS category_formatted'))
            ->get();
        $schedules = DB::table('schedules')
            ->select('id', DB::raw('CONCAT(name, " (", description, ")") AS schedule_formatted'))
            ->get();
        $schools = DB::table('schools')
            ->select('id', DB::raw('CONCAT(name, " - ", city) AS school_formatted'))
            ->orderBy(DB::raw('CONCAT(name, " - ", city)'), 'asc')
            ->get();


            return view('admin.AdminEditParticipant', [
                'title'=>'Edit Registration',
                'categories'=> $categories,
                'schedules'=> $schedules,
                'schools'=>$schools,
                'registration'=>$registration
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

        $registration = Registration::create($validated);

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

    public function change(Request $request, Registration $registration){
        DB::beginTransaction();

        try {
            $student = $registration->student;
            $companion = $registration->companion;

            
            $student->update([
                'name' => $request->studentName,
                'email' => $request->studentEmail,
                'gender' => $request->studentGender,
                'contact' => $request->studentContact
            ]);;

            $companion->update([
                'name' => $request->companionName,
                'status' => $request->companionStatus,
                'contact' => $request->companionContact
            ]);

            $registration->update([
                'grade' => $request->grade,
                'level' => $request->level,
                'school_id' => $request->school_id,
                'language' => $request->language,
                'category_id' => $request->category_id,
                'schedule_id' => $request->schedule_id
            ]);

            DB::commit();

            return redirect()->route('registrations.index')->with('success', 'Registration successful!');
        } catch (Exception $e) {
            DB::rollback();

            throw $e;
        }
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
