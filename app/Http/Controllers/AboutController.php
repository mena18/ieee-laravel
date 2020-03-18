<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

	public function index() {
		return view('about.index');
	}

	public function contact() {
		return view('about.contact');
	}
	public function committees() {
		return view('about.committees');
	}
	public function benefits(){
		return view('about.benefits');
	}
}
