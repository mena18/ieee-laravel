<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Magazine;
class admin_magazine extends Controller{

    public function home(){
        $magazines = Magazine::all();
        return view('admin.magazines.index',['magazines'=>$magazines]);
    }

	public function create(){
    return view('admin.magazines.create');
  }



	public function store(Request $request){
		$this->validate($request,[
			'url'=>'required',
			'image'=>'required',
			'name'=>'required',
		]);
		$img_name = time() . '.' . $request->image->getClientOriginalExtension();
		$request->image->move(public_path('images/magazines'),$img_name);

    $magazine = new Magazine();
		$magazine->image = 'images/magazines/'.$img_name;
		$magazine->url = $request['url'];
		$magazine->name = $request['name'];
		$save = $magazine->save();
		if($save){
        return redirect()->back()->with('success', "Created Successfuly");
    }
		return redirect()->back();
    }




    public function edit($id){
      $magazine = Magazine::find($id);
    	return view('admin.magazines.edit',['magazine'=>$magazine]);
    }




    public function update(Request $request,$id){
    	$magazine = Magazine::find($id);
      if(!$magazine){
        return redirect()->back()->with('errors',"Magazine Not found");
      }

    	$this->validate($request,[
  			'url'=>'required',
  			'image'=>'',
  			'name'=>'required',
		   ]);

    	if(!is_null($request->image)){
    		//Storage::delete($magazine->image);
        $img_name = time() . '.' . $request->image->getClientOriginalExtension();
			$request->image->move(public_path('images/magazines'),$img_name);
			$magazine->image = 'images/magazines/'.$img_name;
		}
		$magazine->url = $request['url'];
		$magazine->name = $request['name'];
		$update = $magazine->update();
		if($update){
            return redirect()->back()->with('success', "Updated Successfuly");
        }
		return redirect()->back();
    }

    public function destroy($id){
    	  $magazine = Magazine::find($id);
        if (!is_null($magazine)) {
            //Storage::delete($magazine->image);
            $magazine->delete();
        }else{
          return redirect()->back()->with('errors',"Magazine Not found");
        }
        return redirect()->back()->with("success", "Deleted Successfuly");

    }

}
