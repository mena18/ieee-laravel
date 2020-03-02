<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
	protected $table = 'gallery';

	public function event() {
		//return $this->belongsTo('App\Event', 'event_id','id');
		return $this->belongsTo('App\Event');
	}
	public function megaEvent() {
		return $this->belongsTo('App\Mvent', 'event_id','id');
	}
}
