<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::paginate(10);
            return view('AdminEvents',[
                'title' => 'Events',
                'events' => $events
            ]);

        
    }

    public function detailEvent($id){
        return view('AdminDetailEvent',[
            'title' => 'Event Information',
            'event' => Event::dataWithID($id)
        ]);
    }
}
