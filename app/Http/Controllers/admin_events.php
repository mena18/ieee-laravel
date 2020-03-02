<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Carbon\Carbon;

function format($str){
    $str = preg_replace("(\<.*?\>)", " ", $str);
    return substr($str, 0, 100).'...';
}

function delete_image($image){
    try {
        if($image!="images/speakers/person-vector.jpg"){
            Storage::delete($image);
        }
    } catch (Exception $e) {
                        
    }
}

class admin_events extends Controller{
    public function home()
    {
        $events = Event::where('events.mega','=',0)->orderBy('date', 'DESC')->get();
        return view('admin.events.viewevent',['events'=>$events]); 
    }

    public function create()
    {
        $events = Event::where('events.mega','=',0)->get();
        return view('admin.events.addevent',['events'=>$events]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'name'=>'required',
                'event_image'=>'required',
                'location'=>'required',
                'date'=>'required',
                'description'=>'required',
                'speakers'=>'array|required',
                'speakers_images'=>'array',
                'event_type'=>'required',
        ]);

        $i=0;
        $speakers = [];
        $speakers_images = [];
        foreach($request->speakers as $speaker) {

                if (!isset($request->speakers_images[$i]) || is_null($request->speakers_images[$i])) {
                    $p = "person-vector.jpg";
                } else {
                    $p = time() .$i. '.' . $request->speakers_images[$i]->getClientOriginalExtension();
                    $request->speakers_images[$i]->move(public_path('images/speakers'),$p);
                }
                $speakers[] = $speaker;
                $speakers_images[] = 'images/speakers/'.$p;
            $i++;
        }
        
        

        $event = new Event();

        $p = time(). 'E' . '.' . $request->event_image->getClientOriginalExtension();
        $request->event_image->move(public_path('images/events'),$p);

        $event->title = $request['name'];
        $event->image =  'images/events/'.$p;
        $event->location = $request['location'];
        $event->date = $request->date;//Carbon::parse($request['date']);
        $event->description = $request['description'];
        $event->arabic_description = $request['arabic_description'];
        $event->mission = $request['mission'];
        $event->goals = $request['goals'];
        $event->speakers = implode(',',$speakers);
        $event->speakers_images = implode(',', $speakers_images);
        $event->event_type = $request['event_type'];
        $event->event_open = false;

        $save = $event->save();

        if($save){
            return redirect()->back()->with('success', "Created Successfuly");
        }

        return redirect()->back();

    }

    public function edit($id){
        $event = Event::find($id);
        if (is_null($event)) {
            return redirect()->back();
        }
        return view('admin.events.editevent',['event'=>$event]);
    }

    public function update(Request $request , $id){
        $event = Event::find($id);
        if (is_null($event)) {
            dd($event);
            return redirect('/');
        }
        $this->validate($request, [
            'name'=>'required',
            'location'=>'required',
            'date'=>'required',
            'description'=>'required',
            'speakers'=>'array',
            'speakers_images'=>'array',
            'event_type'=>'required',
        ]);

        $oldImages_speakers = explode(',',$event->speakers_images);
        $i=0;
        $speakers = [];
        $speakers_images = [];
        foreach($request->speakers as $speaker)
        {
            if(!is_null($speaker))
            {
                if (isset($request->speakers_images[$i])) {
                    $p = time() .$i. '.' . $request->speakers_images[$i]->getClientOriginalExtension();
                    $request->speakers_images[$i]->move(public_path('images/speakers'),$p);
                    $p = 'images/speakers/'.$p;

                    if(count($oldImages_speakers)>$i ) {
                        delete_image($oldImages_speakers[$i]);
                    }
                } else {
                    if(isset($oldImages_speakers[$i])){
                        $p = $oldImages_speakers[$i];
                    }else {
                        $p = "images/speakers/person-vector.jpg";
                    }
            }
                $speakers[] = $speaker;
                $speakers_images[] = $p;
            }
            else if(count($oldImages_speakers)>$i ) {
                delete_image($oldImages_speakers[$i]);
            }
            $i++;
        }
        
        if(!is_null($request->event_image)){
            Storage::delete($event->image);
            $img_1 = time() . '.' . $request->event_image->getClientOriginalExtension();
            $request->event_image->move(public_path('images/events'),$img_1);
            $event->image = 'images/events/'.$img_1;
        }

        $event->title = $request['name'];
        $event->location = $request['location'];
        $event->date = $request['date'];
        $event->description = $request['description'];
        $event->mission = $request['mission'];
        $event->goals = $request['goals'];
        $event->speakers = implode(',',$speakers);
        $event->speakers_images = implode(',', $speakers_images);
        $event->event_type = $request['event_type'];
        $update = $event->update();

        if($update){
            return redirect()->back()->with('success', "Updated Successfuly");
        }
        return redirect()->back();
    }

    public function destroy($id){
        $event = Event::find($id);
        if (!is_null($event)) {
            $oldImages_speakers = explode(',',$event->speakers_images);
            foreach ($oldImages_speakers as $image) {
                delete_image($image);
            }
            Storage::delete($event->image);
            $event->delete();
        }
        return redirect()->back()->with("success", "Deleted Successfuly");
    }


    public function toggle($id){
        $event = Event::find($id);
        $event->event_open = !$event->event_open;
        $event->update();
        return redirect()->back();
    }

}
