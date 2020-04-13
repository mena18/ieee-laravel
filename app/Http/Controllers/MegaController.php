<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Registeration;
use App\Jobs\SendMegaEmailJob;
use Carbon\Carbon;


function cleanData(&$str)
{
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

function generateSerial() {
    $chars = range('A','Z');
    $nums = range(0,9);
    $serial = $chars[array_rand($chars,1)] . $nums[array_rand($nums,1)] . $nums[array_rand($nums,1)] . $nums[array_rand($nums,1)];
    return $serial;
}

class MegaController extends Controller
{
    public function register(Request $request, $id)
    {
        $event = Event::find($id);
        $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "mobile" => "required|max:11|min:11",
            "nationalid" => "required|max:14|min:14",
            "university" => "required",
            "a_status" => "required",
            "ieeemember" => "required",
            "date" => "required",
            "membership" => "",
        ]);
        $reg = new Registeration();
        $reg->name = $request->name;
        $reg->email = $request->email;
        $reg->mobile = $request->mobile;
        $reg->national_id = $request->nationalid;
        $reg->university = $request->university;
        $reg->a_status = $request->a_status;
        $reg->ieee_member = $request->ieeemember;
        $reg->date = $request->date;
        $reg->membershipId = $request->membership? $request->membership : 0;
        $reg->event_id = $id;
        $reg->code = generateSerial();
        $save = $reg->save();
        $mail = $reg->email;
        if ($save) {
            SendMegaEmailJob::dispatch($mail, $request->name, $reg->code, $event->title)
                            ->delay(now()->addSeconds(5));
            return redirect()->back()->with("success", "Registration Complete");
        }
        return redirect()->back();
    }

    public function show($id)
    {
        $event = Event::find($id);
        if(!$event){
          return redirect()->back()->with('error',"Mega Event Dosen't Exists");
        }
        return view('mega.singleevent', ['event'=>$event]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('mega', '1')->orderBy('date', 'DESC')->get();
        return view('mega.index', ['events' => $events]);
    }
}
