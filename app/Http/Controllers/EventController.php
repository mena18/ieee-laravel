<?php

namespace App\Http\Controllers;

use App\Attendee;
use Illuminate\Http\Request;
use App\Event;
use App\jobs\SendEventEmailJob;


class EventController extends Controller{

	public function index(){
		$events = Event::where('mega','0')->orderBy('date', 'DESC')->get();
		return view('events.index',['events'=>$events]);
	}

    public function show($id = 0){
	    $event = Event::find($id);
	    if (is_null($event) || intval($event->mega) !== 0) {
	    	return redirect('/');
	    }
	    return view('events.singleevent', ['event'=>$event]);
    }


    public function register($id) {
    	$event = Event::find($id);
    	if(!is_null($event) && $event->event_open==1) {
    		return view('events.attendee-form',['event'=>$event]);
	    } else {
    		return redirect('/');
	    }
    }

    public function attendance(Request $request, $id = 0) {
    	$event = Event::find($id);
    	if(is_null($event) || $event->event_open==0) {
    		return redirect("/");
	    }

	    $this->validate($request, [
                'name'=>'required',
                'Faculty'=>'required',
                'semester'=>'required',
                'mail'=>'required|email',
                'profile'=>'required',
                'mobile'=>'required|max:11',
                'member'=>'required',
        ]);

	    $mail = Attendee::where([['email', '=', $request->mail],['event_id', '=', $id]])->get();
       	 if(count($mail)>0)
       	 {
        	return redirect('/events/event/'.$id)->with("error","Email already Registered");
         }

		$attendee = new Attendee();
		$attendee->name = $request->name;
		$attendee->faculty = $request->Faculty;
		$attendee->semester = $request->semester;
		$attendee->email = $request->mail;
		$attendee->facebook_profile = $request->profile;
		$attendee->mobile = $request->mobile;
		$attendee->membership_type = $request->member;
		$attendee->event_id = $id;
		$save = $attendee->save();
		$mail = $request->mail;
		if($save)
		{
            SendEventEmailJob::dispatch($mail, $request->name, $event->title)
                              ->delay(now()->addSeconds(5));
			return redirect('/events/event/'.$id)->with("success","Successfuly Registered");
		}

      	return redirect()->back();
    }
}
