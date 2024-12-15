<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index(){
        $schools = School::paginate(10);
            return view('AdminSchools',[
                'title' => 'Schools',
                'schools' => $schools
            ]);

        
    }

    public function detailSchool($id){

        return view('AdminDetailSchool',[
            'title' => 'School Information',
            'school' =>School::dataWithID($id)
        ]);
    }
}
