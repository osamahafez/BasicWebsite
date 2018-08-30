<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; // to use eloquent commands
use DB; // to use raw sql commands

class MessagesController extends Controller
{
   public function submit(Request $request) {

        // make sure that the user entered values in the fields
        $this->validate($request,[
            'name' => 'required',
            'email'  => 'required',
            'msg' => 'required'
        ]);    
        
        /* IF you want to use Raw Sql commands
        $name = $request->input('name');
        $email = $request->input('email');
        $msg = $request->input('msg');
        DB::insert("INSERT INTO messages(name, email, message) VALUES(?,?,?)", [$name, $email, $msg]);
        */
        
        // Using Eloquent
        $message = new Message;
        $message->name    = $request->input('name');
        $message->email   = $request->input('email');
        $message->message = $request->input('msg');
        $message->save();
        
        return redirect('/')->with('success_msg', 'Message Sent');
   }

   public function getMessages() { // get all messsages from database and send it to messages page

        // Using Raw SQL
        $messages = DB::select("SELECT * FROM messages");
        return view('messages', ['messages' => $messages]);

        /*
        //Using Eloquent
        $messages = Message::all();
        return view('messages', ['messages' => $messages]);
        */
   }
}
