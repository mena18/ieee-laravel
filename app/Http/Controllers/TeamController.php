<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller{

    public function volunteers(){
	    $volunteers = Team::where('title','volunteers')->get();
		return view('team.volunteers',['volunteers'=>$volunteers]);
    }

	public function webmasters() {
		return view('team.webmasters');
	}
	public function board() {
		return view('team.board');
	}

    
}
