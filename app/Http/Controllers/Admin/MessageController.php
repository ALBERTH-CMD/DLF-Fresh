<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageSend;

class MessageController extends Controller
{
    public function show(Message $message){
        return view('admin.messages.show', compact('message'));
    }

    public function store(Request $request ){

        $request->validate([
            'name' =>'required|min:10',
            'subject' => 'required|min:10',
            'body' => 'required|min:10',
            'to_user_id' => 'required|exists:users,id',
        ]);

        $message = Message::create([
            'name' => $request->name,
            'subject' => $request->subject,
            'body' => $request->body,
            'from_user_id' => auth()->id(),
            'to_user_id' => $request->to_user_id,
        ]);

        $user = User::find($request->to_user_id);
        $user->notify(new MessageSend($message));

        $request->session()->flash('flash.banner', 'Tu mensaje se Envio Exitosamente!!!');
        $request->session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }
}
