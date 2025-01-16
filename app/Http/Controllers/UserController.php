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
                ->orWhere('username', 'like', '%' . $search . '%');

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

    public function detailUserStudent($id){

        return view('admin.AdminDetailUser',[
            'title' => 'User Information',
            'user' =>User::where('account_id', $id)->where('role','student')->first()
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
    public function store(Request $request, $id,$role)
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


        if($role == "student"){
            $parts = explode(' ', $validation['studentName']);
            $username = Str::lower(
                Str::substr($parts[0], 0, 1) . 
                (count($parts) > 1 ? end($parts) : Str::substr($parts[0], 1))
            );
            $usernameupdate = $username;
            if (User::where('username', $username . "25")->exists()) {
                $suffix = 1;
                do {
                    $usernameupdate = $username . $suffix . "25";
                    $suffix++;
                } while (User::where('username', $usernameupdate)->exists());
            } else {
                $usernameupdate = $username . "25";
            }

            $student = User::create([
                            'name' => $validation['studentName'],
                            'username' => Str::lower($usernameupdate),
                            'password' => Str::lower(Str::substr($validation['studentName'],0,2) . Str::substr($validation['studentName'], -2) . Str::substr($validation['studentEmail'],0,4). Str::substr($validation['studentContact'],-4) ."25"),
                            'role' => "student",
                            'account_id'=> $id
                        ]);
            return $student->id;
        }else if ($role == "companion"){
            $findCompanion = User::where([
                'account_id' => $id,
                'role' => "companion"
            ])->first();
            if(!$findCompanion){
                $companion = User::create([
                    'name' => $validation['companionName'],
                    'username' => Str::substr($validation['companionName'],0,2) . Str::substr($validation['companionName'], -2),
                    'password' => Str::substr($validation['companionName'],0,2) . Str::substr($validation['companionName'], -2) . Str::substr($validation['level'], 0, 2) . Str::substr($validation['level'], 0, 2),
                    'role' => "companion",
                    'account_id'=> $id
                ]);
                return $companion->id;
            }else{
                return -1;
            }
                
            
            
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
