<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
	protected $fillable = ['title','description_1','description_2','images','date'];
}
