<?php

namespace App\Http\Controllers;

use App\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class NewsController extends Controller{

    public function index(){
	    $news = News::all();
	    return view('news/index',['news'=>$news]);
    }

    public function show($id = 0){
	    $news = News::find($id);
	    if(is_null($news)) {
	      return redirect('news');
	    }
	    return view('news.singlenews',['news'=>$news]);
    }

   
}
