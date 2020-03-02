<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
use App\Certificates;
class admin_courses extends Controller
{
    /******************    Certification   ********************************/
    public function certificate_home()
    {
    	$Certificates = Certificates::all();
    	return view('admin.courses.view_certificates',['certificates'=>$Certificates]);
    }
    public function create_certificate(){
    	$courses = Courses::all(); 
    	return view('admin.courses.create_certificates',['courses'=>$courses]);
    }
    public function store_certificate(Request $request)
    {
    	$this->validate($request, [
            'name'=>'required',
            'serial'=>'required|max:8|min:8|unique:certificates',
            'course_id'=>'required',
            'link'=>'required',
        ]);
    	$course = Courses::find($request['course_id'])->get();
        $certificate = new Certificates();
        $certificate->name         = $request['name'];
        $certificate->serial       = $request['serial'];
        $certificate->course_id    = $request['course_id'];
        $certificate->link         = $request['link'];
        $certificate->attendance   = $course[0]['hours'];
        $save = $certificate->save();
        if($save){
            return redirect()->back()->with('success', "Created Successfuly");
        }
        return redirect()->back();
    }

    public function edit_certificate($id)
    {
        $courses = Courses::all(); 
        $certificate = Certificates::find($id);
        if (is_null($certificate)) {
            return redirect()->back()->with('error', "certificate dosen't exists "); 
        }
        return view('admin.courses.edit_certificates',['courses'=>$courses,'certificate'=>$certificate,]);
    }

    public function update_certificate(Request $request,$id)
    {
        $this->validate($request, [
            'name'=>'required',
            'serial'=>'required|max:8|min:8|unique:certificates',
            'course_id'=>'required',
            'link'=>'required',
        ]);
        $course = Courses::find($request['course_id'])->get();
        $certificate = Certificates::find($id);
        if (is_null($course) || is_null($certificate)) {
            return redirect('/admin');
        }
        $certificate->name         = $request['name'];
        $certificate->serial       = $request['serial'];
        $certificate->course_id    = $request['course_id'];
        $certificate->link         = $request['link'];
        $certificate->attendance   = $course[0]['hours'];
        $update = $certificate->update();
        if($update){
            return redirect()->back()->with('success', "Updated Successfuly");
        }
        return redirect()->back();
    }


    public function delete_certificate($id)
    {
        $certificate = Certificates::find($id);
        if (is_null($certificate)) {
            return redirect()->back()->with('error', "certificate dosen't exists "); 
        }
        $certificate->delete();
        return redirect()->back()->with("success", "Deleted Successfuly");
    }





    /******************************************** Courses ***************************************/

    public function courses_home()
    {
        $courses = Courses::orderBy("open","desc")->get();
        return view('admin.courses.view_courses',['courses'=>$courses]);
    }

    public function create_course()
    {
        return view("admin.courses.create_course");
    }

    public function store_course(Request $request)
    {
        $this->validate($request,[
            "name"=>"required",
            "hours"=>"required",
            "type"=>"required"
        ]);
        $course = new Courses();
        $course->name   = $request['name'];
        $course->hours   = $request['hours'];
        $course->description   = $request['description'];
        $course->open = 1;
        $course->type = $request['type'];
        $save = $course->save();
        if($save){
            return redirect()->back()->with('success', "Created Successfuly");
        }
        return redirect()->back();
    }

    public function edit_course($id)
    {
        $course = Courses::find($id);
        if (is_null($course)) {
            return redirect()->back()->with('error', "Course dosen't exists "); 
        }
        return view("admin.courses.edit_course",['course'=>$course]);
    }

    public function update_course(Request $request,$id)
    {
        $this->validate($request,[
            "name"=>"required",
            "hours"=>"required",
            "type"=>"required",
            "open"=>"required"
        ]);
        $course = Courses::find($id);
        if(is_null($course)){
            return redirect()->back()->with('error', "Course dosen't exists "); 
        }
        $course->name   = $request['name'];
        $course->hours   = $request['hours'];
        $course->description   = $request['description'];
        $course->open = $request['open'];
        $course->type = $request['type'];
        $update = $course->update();
        if($update){
            return redirect()->back()->with('success', "Updated Successfuly");
        }
        return redirect()->back();
    }

    public function delete_course($id)
    {
        $course = Courses::find($id);
        if (is_null($course)) {
            return redirect()->back()->with('error', "Course dosen't exists ");
        }
        $course->delete();
        return redirect()->back()->with("success", "Deleted Successfuly");
    }
}
