<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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

        return view('registration', compact('categories', 'schedules', 'schools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $studentController = new StudentController;
            $studentId = $studentController->store($request);

            $companionController = new CompanionController;
            $companionId = $companionController->store($request);

            $registrationController = new RegistrationController;
            $registrationController->store($request, $companionId, $studentId);

            $userController = new UserController;
            $userController->store($request, $companionId, $studentId);

            DB::commit();

            return redirect()->route('forms.create')->with('success', 'Registration successful!');
        } catch (Exception $e) {
            DB::rollback();

            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
