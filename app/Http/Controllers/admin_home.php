<?php

namespace App\Http\Controllers;

use App\Event;
use App\Team;
use App\Attendee;
use App\Registeration;

class admin_home extends Controller
{
    public function index()
    {
        $numberOfEvents = count(Event::all());
        $numberOfVolunteers = count(Team::all());
        $numberOfAttendees = count(Attendee::all());
        $numberOfMegaAttendees = count(Registeration::all());

        return view('admin.home', ['numberOfEvents'=>$numberOfEvents, 'numberOfVolunteers'=>$numberOfVolunteers,'numberOfAttendees'=>$numberOfAttendees, 'numberOfMegaAttendees'=>$numberOfMegaAttendees]);

    }
}
