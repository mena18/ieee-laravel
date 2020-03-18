<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Certificates;
use App\Courses;
class CoursesController extends Controller{


	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		//
		return view('courses.index');
	}
	public function certificate($serial = '') {

		$certificate = Certificates::where('serial',$serial)->first();
		if(is_null($certificate)) {
			return '<h1 style="text-align: center">Serial Not Found</h1>';
		}
		return view('courses.certificate',['certificate'=>$certificate]);
	}
	public function offline() {
		#$mid_year = Courses::where("type",'=','mid_year')->orderBy('year',"desc")->orderBy('open',"desc")->get();
		$mid_year = Courses::where("type",'=','mid_year')->orderBy('year','desc')->get()->groupBy('year');
		$summer = Courses::where('type','=','summer')->orderBy('open',"desc")->get();
		return view('courses.offline',['mid_year'=>$mid_year,'summer'=>$summer]);
	}
	public function online() {
		return view('courses.online');
	}
}
