<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\User;
class UserController extends Controller{

    public function login_view(){
    	return view('login');
    }

	public function login(Request $request) {
		if(Auth::check()){
			return redirect('/admin');
		}
		$errors = ['email'=>'Email/Password is not correct'];
    	$this->validate($request, ['email'=>'required'],$errors);

    	
		if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password'],])){
			return redirect("/admin");
		} else {
			return redirect()->back()->with(['errors'=>$errors]);
		}
	}
	public function logout() {
		Auth::logout();
		return redirect("/admin");
	}

}
