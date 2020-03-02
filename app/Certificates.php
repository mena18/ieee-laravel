<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    //
	public function course()
	{
		return $this->hasOne('App\Courses','id','course_id');
	}
}
