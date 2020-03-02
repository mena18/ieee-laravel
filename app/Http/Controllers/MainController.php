<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Event;
use App\News;
use App\Gallery;
use App\Team;
use App\User;
class MainController extends Controller{

    public function index()
    {
	    $events = Event::where([['event_type','!=','mega']])->orderBy('date','desc')->take(4)->get();
	    $mega = Event::where(['event_type'=>'mega','event_open'=>'1'])->orderBy('date','desc')->get()->first();
	    $news = News::orderBy('date','desc')->take(4)->get();;
	    $team = Team::where('title','board')->get();
	    $gallery = Gallery::orderBy('created_at','desc')->take(5)->get();
        $volunteers_number = Team::all()->count();
        $event_number = Event::all()->count();
	    return view('home')->with([
	    		'events'=>$events,
	    		'team'=>$team,
	    		'news'=>$news,
	    		'mega'=>$mega,
	    		'gallery'=>$gallery,
                'volunteers_number'=>($volunteers_number),
                'event_number'=>$event_number
	    ]);
    }
}
