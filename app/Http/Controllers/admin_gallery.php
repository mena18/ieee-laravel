<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Gallery;
use App\Event;

class admin_gallery extends Controller
{

	public function home()
    {
        $gallery = Gallery::all();
        return view('admin.gallery.viewgallery',['gallerys'=>$gallery]); 
    }

	public function create()
    {
		$events = Event::all();
		$gallery = Gallery::all();
        return view('admin.gallery.addgallery',['gallery'=>$gallery,'events'=>$events]);
    }

	public function store(Request $request)
    {
		$this->validate($request,[
			'url'=>'required',
			'event_id'=>'required',
			'description'=>'required',
		]);
		$img_name = time() . '.' . $request->url->getClientOriginalExtension();
		$request->url->move(public_path('images/gallery'),$img_name);
		$gal = new Gallery();
		$gal->url = 'images/gallery/'.$img_name;
		$gal->event_id = $request['event_id'];
		$gal->description = $request['description'];
		$save = $gal->save();
		if($save)
		{
            return redirect()->back()->with('success', "Created Successfuly");
        }
		return redirect()->back();
    }

    public function edit($id)
    {
    	$events = Event::all();
    	$gallery = Gallery::find($id);
    	return view('admin.gallery.editgallery',['gallery'=>$gallery,'events'=>$events]);
    }

    public function update(Request $request,$id){
    	$gal = Gallery::find($id);
    	$this->validate($request,[
			'url'=>'',
			'event_id'=>'required',
			'description'=>'required',
		]);
    	if(!is_null($request->url)){
    		Storage::delete($gal->url);
            $img_name = time() . '.' . $request->url->getClientOriginalExtension();
			$request->url->move(public_path('images/gallery'),$img_name);
			$gal->url = 'images/gallery/'.$img_name;
		}
		$gal->event_id = $request['event_id'];
		$gal->description = $request['description'];
		$update = $gal->update();
		if($update){
            return redirect()->back()->with('success', "Updated Successfuly");
        }
		return redirect()->back();
    }

    public function destroy($id)
    {
    	$gal = Gallery::find($id);
        if (!is_null($gal)) {
            Storage::delete($gal->url);
            $gal->delete();
        }
        return redirect()->back()->with("success", "Deleted Successfuly");

    }

}
