<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\VolunteerExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Team;
use Illuminate\Support\Facades\Storage;
class admin_volunteer extends Controller{

    public function home(){
        $volunteers = Team::all();
        return view('admin.volunteers.viewvolunteers',['volunteers'=>$volunteers]);
    }


	public function create(){
        $volunteers = Team::all();
        return view('admin.volunteers.addvolunteers',['volunteers'=>$volunteers]);
    }

	public function store(Request $request){	

        $this->validate($request,[
            'name'=>'required',
            'committee'=>'required',
            'img'=>'required',
            'facebook'=>'required',
            'linkedin'=>'required',
        ]);

        $img_name = time() . '.' . $request->img->getClientOriginalExtension();
        $request->img->move(public_path('images/volunteers'),$img_name);

		$volunteer = new Team();
        $volunteer->title = 'volunteers';
        $volunteer->name = $request->name;
        $volunteer->committee = $request->committee;
        $volunteer->facebook = $request->facebook;
        $volunteer->linkedin = $request->linkedin;
        $volunteer->img = 'images/volunteers/'.$img_name;
        $save = $volunteer->save();
        
        if($save){
            return redirect()->back()->with('success', "Created Successfuly");
        }

        return redirect()->back();
    }

    public function edit($id){
        $volunteer = Team::find($id);
        if(is_null($volunteer)){
            return redirect()->back();
        }
        return view('admin.volunteers.editvolunteers',['volunteer'=>$volunteer]);
    }

    public function update(Request $request,$id){

        $volunteer = Team::find($id);

        if(is_null($volunteer)){
            return redirect()->back();
        }

        $this->validate($request,[
            'name'=>'required',
            'committee'=>'required',
            'img'=>'',
            'facebook'=>'required',
            'linkedin'=>'required',
        ]);

        if (!is_null($request->img)){
            Storage::delete($volunteer->img);
            $img_name = time() . '.' . $request->img->getClientOriginalExtension();
            $request->img->move(public_path('images/volunteers'),$img_name);
            $volunteer->img = 'images/volunteers/'.$img_name;

        }

        $volunteer->name = $request->name;
        $volunteer->committee = $request->committee;
        $volunteer->facebook = $request->facebook;
        $volunteer->linkedin = $request->linkedin;
        $update = $volunteer->update();

        if($update){
            return redirect()->back()->with('success', "Updated Successfuly");
        }
        
        return redirect()->back();


    }

    public function destroy($id){
        $volunteer = Team::find($id);
        if (!is_null($volunteer) and $volunteer->title =='volunteers') {
            Storage::delete($volunteer->img);
            $volunteer->delete();
        }
        return redirect()->back()->with("success", "Deleted Successfuly");
    }

    public function download_volunteers(){
        $var = new VolunteerExport();
        return Excel::download($var, 'All Volunteers.xlsx');
    }
}
