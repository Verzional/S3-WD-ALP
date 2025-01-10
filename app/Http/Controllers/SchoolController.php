<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $schools= School::where(function ($query) use ($search) {
            if ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('city', 'like', '%' . $search . '%')
                ->orWhere('level', 'like', '%' . $search . '%');

            }
        })->paginate(8);
            return view('admin.AdminSchools',[
                'title' => 'Schools',
                'schools' => $schools
            ]);

        
    }

    public function detailSchool($id){

        return view('admin.AdminDetailSchool',[
            'title' => 'School Information',
            'school' =>School::dataWithID($id)
        ]);
    }

    public function create()
    {
        return view('schools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'level' => 'required|string|max:255'
        ]);

        $school = School::create($validated);

        return redirect()->route('schools.index')->with('success', 'School created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(School $school)
    {
        return view('schools.show', compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(School $school)
    {
        return view('schools.edit', compact('school'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, School $school)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'level' => 'required|string|max:255'
        ]);

        $school->update($validated);

        return redirect()->route('schools.index')->with('success', 'School updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(School $school) {
        $school->delete();

        return redirect()->route('schools.index')->with('success', 'School deleted successfully.');
    }
}
