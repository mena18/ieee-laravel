<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('created_at','desc')->get();
        return view('admin.messages.all-messages', ['messages'=>$messages]);
    }

    public function show($id)
    {
        $message = Message::find($id);
        return view('admin.messages.single-message', ['message'=>$message]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:50',
            'email'=>'required|email|max:255',
            'mobile'=>'required|max:11|min:11',
            'content'=>'required'
        ]);

        $message = new Message();
        $message->name = $request['name'];
        $message->email = $request['email'];
        $message->mobile = $request['mobile'];
        $message->content = $request['content'];
        $message->save();

        return redirect()->route('about.contact')->with('success', 'we are happy to receive your message, we will answer soon');

    }

}
