<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mega;
use App\Event;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class admin_mega extends Controller{

    public function home(){
        $events = Event::where('events.mega','=',1)->orderBy('date', 'DESC')->get();
        return view('admin.mega.viewmega',['events'=>$events]); 
    }

    public function create(){
        return view('admin.mega.addmega');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name'=>'required',
            'event_image'=>'required',
            'location'=>'required',
            'date'=>'required',
            'description'=>'required',
            'arabic_description'=>'',
            'mega_date'=>'required',
        ]);


        $img_name = time() . '.' . $request->event_image->getClientOriginalExtension();#url is variable
        $request->event_image->move(public_path('images/events/'),$img_name);

        $event = new Event();

        $event->title = $request['name'];
        $event->image = 'images/events/'.$img_name;
        $event->location = $request['location'];
        $event->date = $request['date'];
        $event->description = $request['description'];
        $event->arabic_description = $request['arabic_description'];
        $event->mega_date = $request->mega_date;
        $event->event_open = false;
        $event->event_type="mega";
        $event->mega = 1;
        $save = $event->save();

        if($save){
            return redirect()->back()->with('success', "Created Successfuly");
        }

        return redirect()->back();
    }

    public function edit(Request $request,$id){
        $event = Event::find($id);
        if(!is_null($event) && $event->mega==1){
            return view('admin.mega.editmega',['event'=>$event]);
        }
        return redirect("/admin");
    }

    public function update(Request $request,$id){

        $event = Event::find($id);
        if (is_null($event)) {
            return redirect('/admin');
        }

        $this->validate($request, [
                'name'=>'required',
                'location'=>'required',
                'date'=>'required',
                'description'=>'required',
                'arabic_description'=>'',
                'mega_date'=>'required',
        ]);

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
        $event->arabic_description = $request['arabic_description'];
        $event->mega_date = $request['mega_date'];

        $update = $event->update();

        if($update){
            return redirect()->back()->with('success', "Updated Successfuly");
        }

        return redirect()->back();

    }

    public function destroy($id){
        $event = Event::find($id);
        if (!is_null($event)) {
            Storage::delete(explode(',',$event->speakers_images));
            Storage::delete($event->image);
            $event->delete();
        }
        return redirect()->back()->with("success", "Deleted Successfuly");
    }

    public function toggle($id){
        $event = Event::find($id);
        if(!is_null($event)) {
            $event->event_open = !$event->event_open;
            $event->update();
        }
        return redirect()->back();
    }

}
