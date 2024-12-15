<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(10);
            return view('AdminUsers',[
                'title' => 'Users',
                'users' => $users
            ]);

        
    }

    public function detailUser($id){
        return view('AdminDetailUser',[
            'title' => 'User Information',
            'user' =>User::dataWithID($id)
        ]);
    }
}
