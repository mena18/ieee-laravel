<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class magazineController extends Controller{

    public function index(){
        return view("magazines.magazines");
    }

    public function show(){ #$id
        return view("magazines.magazine");
    }
}
