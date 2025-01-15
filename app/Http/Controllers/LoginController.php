<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    public function show(){
        return view('login');
    }

    public function login(Request $request)
{
    $request->validate([
        "username" => "required|string",
        "password" => "required|string"
    ]);

    $user = User::where("username", $request->username)->first();
    if (!$user) {

        
        return back()->with('error', 'User not found.');
    }

    $inputPassword = trim($request->password);
    $password = trim($user->password);

    if ($password !== $inputPassword) {
        return back()->with('error', 'Invalid password.');
    } 

        session()->put("user", $user->id);
        session()->put("role", $user->role);
        
        if($user->role == "admin") {
        return redirect('/dashboard');
        }else if($user->role == 'student'){
            return redirect('/student/dashboard');
        }else if($user->role == 'companion'){
            return redirect('/companion/dashboard');
        }
}

    public function logout(){
        session()->flush();
        return redirect('/');
    }

}