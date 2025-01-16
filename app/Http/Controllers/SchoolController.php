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

    public function acceptSchool($id){
        $school = School::findOrFail($id);


        $school->status = 'accepted';
        $school->save();


        return redirect('/schools');
    }

    public function detailSchool($id){

        return view('admin.AdminDetailSchool',[
            'title' => 'School Information',
            'school' =>School::dataWithID($id)
        ]);
    }

    public function create()
    {
        return view('registrationSchool');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'schoolName' => 'required|string|max:255',
            'schoolCity' => 'required|string|max:255',
            'schoolLevel' => 'required|string|max:255'
        ]);

        $validated['status'] = 'pending';

        $school = School::create([
            'name' => $validated['schoolName'],
            'city' => $validated['schoolCity'],
            'level' => $validated['schoolLevel'],
            'status' => $validated['status']
        ]);

        return redirect('/');
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
    public function destroy($id) {
        $school = School::findOrFail( $id);
        $school->delete();

        return redirect('/schools');
    }

    public function schoolRegistration(){
        return view('registrationSchool');
    }
}
