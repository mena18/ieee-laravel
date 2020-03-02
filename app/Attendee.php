<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model{
	
    //
	protected $table = 'attendees';
	public function event(){
		//return $this->hasOne('App\Event','id','event_id')
		return $this->belongsTo('App\Event');
	}
}
