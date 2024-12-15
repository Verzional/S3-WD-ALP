<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        $registrations = Registration::paginate(10);
            return view('AdminParticipants',[
                'title' => 'Participants',
                'registrations' => $registrations
            ]);

        
    }

    public function detailRegistration($registration_id){
            return view('AdminDetailParticipant',[
                'title' => 'Participant Information',
                'registration' => Registration::dataWithID($registration_id)
            ]);

        
    }

    public function allRegistrationsYear($event_id){
        $registrations = Registration::where('event_id',$event_id)->get();
        return view('detailed',[
            'title' => 'Project',
            'registrations' =>$registrations
        ]);
    }
}
