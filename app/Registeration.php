<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registeration extends Model
{
    //
//	Registeration id: #171 changed date from 0000-00-00 to random date
		public function event() {
			//return $this->hasOne('App\Event','id','event_id');
			return $this->belongsTo('App\Event');
		}
}
