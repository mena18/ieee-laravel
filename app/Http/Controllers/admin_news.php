<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class admin_news extends Controller{

    public function home(){
        $news = News::all();
        return view('admin.news.viewnews',['newss'=>$news]);
    }

	public function create(){
        $news = News::all();
        return view('admin.news.addnews',['news'=>$news]);
    }

	public function store(Request $request){	

		$this->validate($request, [
            'title' => 'required',
            'date'=>'required',
            'top_image'=>'required',
            'description_1' =>'required',
            'description_2'=>'',
            'middle_image'=>'',
            
        ]);

        $news = new News();

        if(!is_null($request->description_2)){
            $news->description_2 = $request['description_2'];
        }else{
            $news->description_2 = '';
        }
        

        $images = '';

        $img_1 = time() . '.' . $request->top_image->getClientOriginalExtension();
        $request->top_image->move(public_path('images/news'),$img_1);
        $images.='images/news/'.$img_1;

        if(!is_null($request->middle_image)){
            $img_2 = time() . '2.' . $request->middle_image->getClientOriginalExtension();
            $request->middle_image->move(public_path('images/news'),$img_2);
            $images.=',images/news/'.$img_2;
        } else {
            $images.=',none';
        }

        
        
        $news->title = $request->title;
        $news->description_1 = $request->description_1;
        $news->images = $images;
        $news->date = $request->date;

        $save = $news->save();
        
        if($save){
            return redirect()->back()->with('success', "Created Successfuly");
        }
        
        return redirect()->back();

    }

    public function edit(Request $request,$id){

        $news = News::find($id);
        return view('admin.news.editnews',['news'=>$news]);
    }

    public function update(Request $request,$id){
        $news = News::find($id);

        $this->validate($request, [
            'title' => 'required',
            'date'=>'required',
            'top_image'=>'',
            'description_1' =>'required',
            'description_2'=>'',
            'middle_image'=>'',
            
        ]);

        

        if(!is_null($request->description_2)){
            $news->description_2 = $request['description_2'];
        }
        

        $images = '';
        $actual_images = explode(',',$news->images);

        if(!is_null($request->top_image)){
            Storage::delete($actual_images[0]);
            $img_1 = time() . '.' . $request->top_image->getClientOriginalExtension();
            $request->top_image->move(public_path('images/news'),$img_1);
            $images.='images/news/'.$img_1;
        }else{
            $images.=$actual_images[0];
        }
        

        if(!is_null($request->middle_image)){
            Storage::delete($actual_images[1]);
            $img_2 = time() . '2.' . $request->middle_image->getClientOriginalExtension();
            $request->middle_image->move(public_path('images/news'),$img_2);
            $images.=',images/news/'.$img_2;
        }else{
            $images.=','.$actual_images[1];
        }

        
        
        $news->title = $request->title;
        $news->description_1 = $request->description_1;
        $news->images = $images;
        $news->date = $request->date;

        $update = $news->update();

        if($update){
            return redirect()->back()->with('success', "Updated Successfuly");
        }

        
        return redirect()->back();


    }

    public function destroy(Request $request,$id){

        $news = News::find($id);
        if(!is_null($news)) {
            Storage::delete(explode(',',$news->images));
            $news->delete();
        }

        return redirect()->back()->with("success", "Deleted Successfuly");
    }
}
