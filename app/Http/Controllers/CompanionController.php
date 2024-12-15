<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanionController extends Controller
{
    public function index(){
        $projects = Project::all();
            return view('detail',[
                'title' => 'Detail',
                'name' => 'Rex',
                'projects' => $projects
            ]);

        
    }

    public function detailID($id){
        return view('detailed',[
            'title' => 'Project',
            'name' => 'Rex',
            'project' =>Project::dataWithID($id)
        ]);
    }
}
