<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

	protected $fillable = ['title','image','location','date','description','arabic_description','mission','goals','speakers','speakers_images','event_type','event_open'];
	public function gallery() {
		//return $this->hasMany('App\Gallery','event_id','id');
		return $this->hasMany('App\Gallery');
	}
	public function attendees() {
		//return $this->hasMany('App\Attendee','event_id','id');
		return $this->hasMany('App\Attendee');
	}
	public function registeration() {
		return $this->hasMany('App\Registeration','event_id','id');
	}
}
