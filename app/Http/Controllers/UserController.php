<?php

namespace App\Http\Controllers;

use App\Models\Companion;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $users= User::where(function ($query) use ($search) {
            if ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('username', 'like', '%' . $search . '%')
                ->orWhere('role', 'like', '%' . $search . '%');

            }
        })->where('role', 'student')
        ->paginate(12)
        ;
            return view('admin.AdminUsers',[
                'title' => 'Student Users',
                'users' => $users
            ]);

        
    }

    public function teachers(Request $request){
        $search = $request->input('search');
        $users= User::where(function ($query) use ($search) {
            if ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('username', 'like', '%' . $search . '%')
                ->orWhere('role', 'like', '%' . $search . '%');

            }
        })->where('role', 'companion')
        ->paginate(12)
        ;
            return view('admin.AdminUsers',[
                'title' => 'Companion Users',
                'users' => $users
            ]);

    }

    public function detailUser($id){

        return view('admin.AdminDetailUser',[
            'title' => 'User Information',
            'user' =>User::dataWithID($id)
        ]);
    }

    public function studentDetailUser(){
        $user  = User::dataWithID(session('user'));
        $info = Student::dataWithID($user->account_id);

        return view('student.StudentDetailUser',[
            'title' => 'User Information',
            'user' => $user,
            'info'=> $info

        ]);
    }

    public function studentEditUser(){
        $user  = User::dataWithID(session('user'));

        return view('student.StudentEdit',[
            'title' => 'Edit',
            'user' => $user
        ]);
    }

    public function companionEditUser(){
        $user  = User::dataWithID(session('user'));

        return view('companion.CompanionEdit',[
            'title' => 'Edit',
            'user' => $user
        ]);
    }

    public function companionDetailUser(){
        $user  = User::dataWithID(session('user'));
        $info = Companion::dataWithID($user->account_id);
        return view('companion.CompanionDetailUser',[
            'title' => 'User Information',
            'user' =>$user,
            'info' => $info
        ]);
    }
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $studentId, $companionId)
    {

        $validation = $request->validate([
            'studentName' => 'required|string|max:255',
            'studentEmail' => 'required|email',
            'studentGender' => 'required',
            'studentContact' => 'required|numeric',
            'companionName' => 'required|string|max:255',
            'companionStatus' => 'required|string|max:255',
            'companionContact' => 'required|numeric',
            'school_id' => 'nullable|exists:schools,id',
            'level' => 'required|string|max:255',
            'grade' => 'required|string|max:255',
        ]);

        User::create([
            'name' => $validation['studentName'],
            'username' => Str::substr($validation['studentName'],0,2) + Str::substr($validation['studentName'], -2),
            'password' => $request,
            'role' => "student",
            'account_id'=> $studentId
        ]);

        User::create([
            'name' => $request,
            'username' => $request,
            'password' => $request,
            'role' => "companion",
            'account_id'=> $companionId
        ]);
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
    public function updateStudent(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',

        ]);

        Log::info('Validated Data: ' . json_encode($validated));

        

        $user = User::find(session('user'));
        $user->username = $validated['username'];
        $user->password =$validated['password'] ;
        $user->save();
        Log::info('Updated Data: ' . json_encode($user));
        return redirect('student/detailUser');
                     

    }

    public function updateCompanion(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',

        ]);

        Log::info('Validated Data: ' . json_encode($validated));

        

        $user = User::find(session('user'));
        $user->username = $validated['username'];
        $user->password =$validated['password'] ;
        $user->save();
        Log::info('Updated Data: ' . json_encode($user));
        return redirect('companion/user');
                     

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
