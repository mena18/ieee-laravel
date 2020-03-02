<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mega extends Model
{
    //
	protected $fillable = ['title','image','location','date','description','arabic_description','mission','goals','speakers','speakers_images','event_type','event_open'];
	public function gallery() {
		return $this->hasMany('App\Gallery','event_id','id');
	}
}
