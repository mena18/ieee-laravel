<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magazine;

class magazineController extends Controller{

    public function index(){
        $magazines = Magazine::all();
        return view("magazines.magazines",['magazines'=>$magazines]);
    }

    public function show($id){
        $magazine = Magazine::find($id);
        return view("magazines.magazine",['magazine'=>$magazine]);
    }
}
