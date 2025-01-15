<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'studentName' => 'required|string|max:255',
            'studentEmail' => 'required|email',
            'studentGender' => 'required',
            'studentContact' => 'required|numeric'
        ]);

        $findStudent =  Student::where('email', $validated['studentEmail'])->first();
        if($findStudent){
            return $findStudent->id;
        }else{
            $student = Student::create([
                'name' => $validated['studentName'],
                'email' => $validated['studentEmail'],
                'gender' => $validated['studentGender'],
                'contact' => $validated['studentContact']
            ]);
    
            return $student->id;
        }

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'gender' => 'required',
            'contact' => 'required|numeric'
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        
        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}