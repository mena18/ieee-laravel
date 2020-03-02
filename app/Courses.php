<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //
	public function certificates() {
		return $this->hasMany('App\Certificates','course_id','id');
	}
}
