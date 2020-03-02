<?php

namespace App\Http\Controllers;
use App\Exports\attendeeExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Attendee;
use App\Registeration;
use App\Event;

class admin_attendee extends Controller{
    
    public function event($id=0){
    	if ($id==0){
    		$attendee = Attendee::all();
    		$event_name = '';
    	}else{
    		$attendee = Attendee::where('event_id','=',$id)->get();
    		$event = Event::find($id);
    		$event_name = $event->title;
    	}    	
    	$events = Event::where("mega","=",'0')->get();
    	return view('admin.attendee.view_event_attendee',['attendees'=>$attendee,'events'=>$events,'id'=>$id,'event_name'=>$event_name,"mega"=>0]);
    }


    public function mega($id=0){
        if ($id==0){
            $attendee = Registeration::all();
            $event_name = '';
        }else{
            $attendee = Registeration::where('event_id','=',$id)->get();
            $event = Event::find($id);
            $event_name = $event->title;
        }
        $events = Event::where("mega","=",'1')->get();
        return view('admin.attendee.view_mega_attendee', ['attendees'=>$attendee,'events'=>$events,'id'=>$id,'event_name'=>$event_name,"mega"=>1]);
    }

    public function download_event($id){

        $var = new attendeeExport($id,0);
        if($id==0){return Excel::download($var, 'All Events attendees.xlsx');}
        else{
            $name  = Event::where('id','=',$id)->get();
            return Excel::download($var, $name[0]->title.'.xlsx');
        }
        
    }


    public function download_mega($id){

        $var = new attendeeExport($id,1);
        if($id==0){return Excel::download($var, 'All Mega Events attendees.xlsx');}
        else{
            $name  = Event::where('id','=',$id)->get();
            return Excel::download($var, $name[0]->title.'.xlsx');
        }
        
    }


}
