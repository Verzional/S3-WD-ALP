<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Companion;
use App\Models\User;
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
            ->where('status', 'accepted')
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
            $userStudentId = $userController->store($request, $studentId, "student");
            $userCompanionId = $userController->store($request, $companionId, "companion");
            $student = User::where('id', $userStudentId)->where('role', "student")->first();
            $companion = User::where('id', $userCompanionId)->where('role', "companion")->first();
            

            DB::commit();




            return view('createdUser', [
                'student' => $student,
                'companion' => $companion,
            ]);

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
